<?php
$id = $_GET['id'];
$db =new PDO("mysql:host=localhost;dbname=sekolah__php_pdo",'root','');
$query = $db->query("select * from siswa where id=$id");
$data = $query->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses_edit.php" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div>
            <label>Nama</label>
            <input type="text" name="nama" value="<?= $data['nama'] ?>">
        </div>
        <div>
            <label>Kelas</label>
            <select name="kelas" id="">
                <option value="1" <?= $data['id_kelas'] == '1' ? 'selected' : '' ?>>12 RPL</option>
                <option value="2" <?= $data['id_kelas'] == '2' ? 'selected' : '' ?>>11 RPL</option>
            </select>
        </div>
        <input type="submit" value="simpan">
    </form>
</body>
</html>