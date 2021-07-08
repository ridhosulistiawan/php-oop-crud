<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
<?php
include 'database.php';
$db = new database();

foreach($db->edit($_GET['id']) as $data){
?>
<h1>Edit Data</h1>
    <form action="proses.php?aksi=update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
    Nama : <br>
    <input type="text" name="nama" value="<?php echo $data['nama']; ?>"><br>
    Alamat : <br>
    <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"><br>
    Usia : <br>
    <input type="text" name="usia" value="<?php echo $data['usia']; ?>"><br>
    <p></p>
    <input type="submit" value="simpan">
    </form>
    <?php
    }
    ?>
</body>
</html>