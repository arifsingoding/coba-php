<?php
include "koneksi.php";
$pro = mysqli_query($con, "SELECT * FROM tb_data where nik='$_GET[kode]'");
$ses = mysqli_fetch_array($pro); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <h2>Edit Data</h2>
    <br>

    <form action="" method="post">
        <h2>NIK</h2>
        <input type="text" name="nik" value="<?php echo $ses['nik']; ?>">

        <h2>NAMA</h2>
        <input type="text" name="nama" value="<?php echo $ses['nama']; ?>">

        <h2>UMUR</h2>
        <input type="text" name="umur" value="<?php echo $ses['umur']; ?>">

        <h2>AlAMAT</h2>
        <select name="alamat" value="<?php echo $ses['alamat']; ?>">
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

    <?php
    include "koneksi.php";
    if(isset($_POST['simpan'])) {
        mysqli_query($con, "UPDATE tb_data set nik='$_POST[nik]', nama='$_POST[nama]', umur='$_POST[umur]', alamat='$_POST[alamat]' where nik='$_GET[kode]'");

        echo "<p>Data Berhasil Dihapus</p>";
        echo "<meta http-equiv=refresh content=1;URL='tampil.php'>";
    } 
    ?>
</body>
</html>