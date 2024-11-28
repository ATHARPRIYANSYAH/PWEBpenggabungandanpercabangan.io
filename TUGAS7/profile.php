<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Styles -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .welcome-section {
            margin-top: 10%;
            text-align: center;
        }
        .welcome-text {
            font-size: 2rem;
            font-weight: bold;
            color: #343a40;
        }
        .btn-custom {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="welcome-section">
            <h1 class="welcome-text">Selamat Datang, Admin!</h1>
            <p class="mt-3 text-muted">Kelola data produk, pesanan, dan pengguna dengan mudah melalui dashboard ini.</p>
            <a href="create.php" class="btn btn-primary btn-custom">Kelola Produk</a>
            <a href="show.php" class="btn btn-success btn-custom">Kelola Pesanan</a>
            <a href="pengguna.php" class="btn btn-secondary btn-custom">Kelola Pengguna</a>
        </div>
    </div>
   
