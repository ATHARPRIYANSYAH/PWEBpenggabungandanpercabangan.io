<?php

require './../config/db.php';

if (isset($_POST['submit'])) {
    global $db_connect;

    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $tempImage = $_FILES['image']['tmp_name'];

    $randomFilename = time() . '-' . md5(rand()) . '-' . $image;

    // Path upload
    $uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/TUGAS7/upload/' . $randomFilename;

    // Debugging folder
    if (!is_dir($_SERVER['DOCUMENT_ROOT'] . '/TUGAS7/upload/')) {
        echo "Folder 'TUGAS7/upload' tidak ditemukan.<br>";
        exit;
    }

    if (!is_writable($_SERVER['DOCUMENT_ROOT'] . '/TUGAS7/upload/')) {
        echo "Folder 'TUGAS7/upload' tidak memiliki izin tulis.<br>";
        exit;
    }

    // Debug file sementara
    if (!file_exists($tempImage)) {
        echo "File sementara tidak ditemukan: " . $tempImage . "<br>";
        exit;
    }

    // Pindahkan file
    if (move_uploaded_file($tempImage, $uploadPath)) {
        $query = "INSERT INTO products (name, price, image) 
                  VALUES ('$name', '$price', 'TUGAS7/upload/$randomFilename')";
        if (mysqli_query($db_connect, $query)) {
            echo "berhasil upload";
        } else {
            echo "Gagal menyimpan data ke database: " . mysqli_error($db_connect);
        }
    } else {
        echo "Gagal memindahkan file ke: " . $uploadPath . "<br>";
        echo "Error details: ";
        print_r(error_get_last());
    }
}
?>
