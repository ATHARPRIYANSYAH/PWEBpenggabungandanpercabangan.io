<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Data Produk</h1>
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Gambar Produk</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require './config/db.php';

                    $products = mysqli_query($db_connect, "SELECT * FROM products");
                    $no = 1;

                    while ($row = mysqli_fetch_assoc($products)) {
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= htmlspecialchars($row['name']); ?></td>
                    <td><?= htmlspecialchars($row['price']); ?></td>
                    <!-- <td><img src="<?= htmlspecialchars($row['image']); ?>" width="100"></td> -->
                    <td><a href="<?= htmlspecialchars($row['image']); ?>" target="_blank" class="btn btn-sm btn-primary">Unduh</a></td>
                    <td>
                        <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
