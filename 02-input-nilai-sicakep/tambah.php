<?php 
    include ('koneksi.php');

    if(isset($_POST['submit'])){
        $id_nilai = $_POST['id_nilai'];
        $id_pegawai = $_POST['id_pegawai'];
        $id_bulan = $_POST['id_bulan'];
        $id_tahun = $_POST['id_tahun'];
        $nilai = $_POST['nilai'];

        $sql = "INSERT INTO nilai
            VALUES ('$id_nilai', '$id_pegawai', '$id_bulan', '$id_tahun', '$nilai')";
        if(mysqli_query($con, $sql)){
            echo "Berhasil Memasukkan Data";
        } else {
            echo "Error memasukkan data <br/>".mysqli_error($con);
        }
    }
?>