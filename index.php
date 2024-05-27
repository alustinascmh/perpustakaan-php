<?php
    session_start();
    if(!isset($_SESSION['email'])) {
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perpustakaan</title>
</head>
<body>
    <div class="container w-75">
        <h1 class="my-4 text-center">Aplikasi Perpustakaan</h1>

        <a href="./buku.php" class="d-grid gap-2 col-6 mx-auto btn btn-primary">Lihat Daftar Buku</a>
        <br>
        <a href="./staff.php" class="d-grid gap-2 col-6 mx-auto btn btn-primary">Lihat Daftar Staff</a>
        
        <br><br>
        <form method="POST" action="./logout_proccess.php" class="text-center">
            <button class="btn btn-danger">LOGOUT</button>
        </form>
    </div>
</body>
</html>