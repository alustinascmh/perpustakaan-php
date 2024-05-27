<?php
    include_once("./connect.php");

    $query = mysqli_query ($db, "SELECT * FROM staff")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Staff</title>
</head>
<body>
    <div class="container w-75">
        <h1 class="my-4">Daftar Staff</h1>


        <table class="table table-light table-striped-columns">
            <thead>
                <tr>
                <th scope="col" class="text-center">Nama</th>
                <th scope="col" class="text-center">Telepon</th>
                <th scope="col" class="text-center">Email</th>
                <th scope="col" class="text-center">ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($query as $staff) { ?>
                    <tr>
                        <td><?php echo $staff["nama"] ?></td>
                        <td class="text-center"><?php echo $staff["telp"] ?></td>
                        <td class="text-center"><?php echo $staff["email"] ?></td>
                        <td class="text-center">
                            <a href=<?php echo "edit-staff.php?id=" . $staff["id"] ?> class="btn btn-outline-success">EDIT</a>
                            <a href=<?php echo "delete-staff.php?id=" . $staff["id"] ?> class="btn btn-outline-danger">HAPUS</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <br>
        <a href="./tambah-staff.php" class="btn btn-info">Tambah Data Staff</a>
        <a href="./index.php" class="btn btn-warning">Kembali ke Halaman Utama</a>
    </div>
</body>
</html>