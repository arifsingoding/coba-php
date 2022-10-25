<?php
include "koneksi.php";
if(isset($_POST['simpan'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];

    $insert = "INSERT INTO tb_data (nik,nama,umur,alamat) VALUES('$nik','$nama','$umur','$alamat')";
    $pro = mysqli_query($con, $insert);

    if($pro){
        header('Location: tampil.php?sukses');
    }else {
        echo "Gagal!";
    }
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Data</title>
</head>
<body>
    <h2>Input Data</h2>
    <br>

    <form action="" method="post">
        <h2>NIK</h2>
        <input type="text" name="nik">

        <h2>NAMA</h2>
        <input type="text" name="nama">

        <h2>UMUR</h2>
        <input type="text" name="umur">

        <h2>AlAMAT</h2>
        <select name="alamat">
            <option value="jawa">Jawa</option>
            <option value="papua">Papua</option>
            <option value="sumatra">Sumatra</option>
            <option value="kalimantan">kalimantan</option>
            <option value="sulawesi">Sulawesi</option>
        </select>

        <br>
        <br>
        <input type="submit" value="Kirim" name="simpan">
    </form>
</body>
</html>