<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP CRUD</title>
</head>
<body>

<?php
include "database.php";
$db = new database();
?>

<h1>Data Orang</h1>

<p><a href="input.php">Input Data</a></p>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Usia</th>
        <th>Alamat</th>
        <th colspan="2"></th>
    </tr>
    <?php

    $nomor = 1;
    foreach($db->tampil() as $data){
    ?>
    <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['usia']; ?></td>
        <td><?php echo $data['alamat']; ?></td>
        <th><a href="proses.php?aksi=hapus&id=<?php echo $data['id']?>">Hapus</a></th>
        <th><a href="edit.php?id=<?php echo $data['id']?>">Edit</a></th>
    </tr>
    <?php
    }
    ?>
</table>

</body>
</html>

