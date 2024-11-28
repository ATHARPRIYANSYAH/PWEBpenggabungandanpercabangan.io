<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Register</h1>
        <form action="./backend/register.php" method="post" class="w-50 mx-auto p-4 border rounded shadow-sm">
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama Anda" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password Anda" required>
            </div>
            <div class="mb-3">
                <label for="confirm" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control" id="confirm" name="confirm" placeholder="Masukkan konfirmasi password Anda" required>
            </div>
            <button type="submit" class="btn btn-primary w-100" name="submit">Daftar</button>
        </form>
    </div>

    