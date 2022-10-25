<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
</head>
<body>
    <h2>Isi Data</h2>
    <br>

    <h2><a href="form.php">+</a></h2>
    <table border="2">
        <tr>
            <th>NIK</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    
        <?php
        include "koneksi.php";
        $no = 1;
        $ambil = mysqli_query($con, "SELECT * FROM tb_data");
        while($show = mysqli_fetch_array($ambil)){
            echo "
            <tr>
            <td>$show[nik]</td>
            <td>$show[nama]</td>
            <td>$show[umur]</td>
            <td>$show[alamat]</td>
            <td><a href='edit.php?kode=$show[nik]'>Edit</a> <span>||</span> <a href='?kode=$show[nik]'>Hapus</a></td>
            </tr>
            ";
            $no++;
        } 
        ?>
    </table>


    <?php
    include "koneksi.php";
    if(isset($_GET['kode'])){
        mysqli_query($con, "delete from tb_data where nik='$_GET[kode]'");
        echo "<p>Data Berhasil Dihapus</p>";
        echo "<meta http-equiv=refresh;URL= 'tamah.php'>";
    } 
    ?>
</body>
</html>