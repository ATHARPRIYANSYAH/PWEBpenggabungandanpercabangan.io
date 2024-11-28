<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Tambah Produk</h1>
        <div class="text-center mb-3">
            <a href="show.php" class="btn btn-primary">Lihat Data Produk</a>
        </div>
        <form action="./backend/create.php" method="post" enctype="multipart/form-data" class="p-4 border rounded shadow">
            <div class="mb-3">
                <label for="name" class="form-label">Nama Produk</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Input nama produk" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Harga Produk</label>
                <input type="number" id="price" name="price" class="form-control" placeholder="Input harga produk" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Upload Gambar Produk</label>
                <input type="file" id="image" name="image" class="form-control">
            </div>
            <div class="text-center">
                <button type="submit" name="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
   