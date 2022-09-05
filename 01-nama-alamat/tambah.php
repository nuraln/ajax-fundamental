<?php 
    include ('koneksi.php');

    if(isset($_POST['nama'])){
        $id_nama = $_POST['id_nama'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];

        $sql = "INSERT INTO data 
            VALUES ('$id_nama', '$nama', '$alamat')";
        if(mysqli_query($con, $sql)){
            echo "Berhasil Memasukkan Data";
        } else {
            echo "Error memasukkan data <br/>".mysqli_error($con);
        }
    }
?>