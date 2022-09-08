<?php 
    include ('koneksi.php');

    // TAMBAH DATA
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

    // EDIT DATA
    if(isset($_POST['update'])){
        $id_nilai = $_POST['id_nilai'];
        $id_pegawai = $_POST['id_pegawai'];
        $id_bulan = $_POST['id_bulan'];
        $id_tahun = $_POST['id_tahun'];
        $nilai = $_POST['nilai'];

        $query = "UPDATE nilai SET 
            id_pegawai='$id_pegawai', 
            id_bulan='$id_bulan', 
            id_tahun='$id_tahun', 
            nilai='$nilai' 
            WHERE id_nilai='$id_nilai'
            OR die mysqli_error($con)
            ";
        
        // $id_nilai = $_POST['id_nilai'];
        // $id_pegawai = $_POST['id_pegawai'];
        // $id_bulan = $_POST['id_bulan'];
        // $id_tahun = $_POST['id_tahun'];
        // $nilai = $_POST['nilai'];

        // $query = "INSERT INTO nilai
        //     VALUES ('$id_nilai', '$id_pegawai', '$id_bulan', '$id_tahun', '$nilai')";

        $query_run = mysqli_query($con, $query);
        if($query_run){
            echo "<script>alert('Data sudah diupdate')</script>";
            echo "<script>location='penilaian-bulanan.php?id=$id_pegawai'</script>"; 
        }
        else 
        {
            echo "<script>alert('Update data gagal')</script>";
            echo "<script>location='penilaian-bulanan.php?id=$id_pegawai'</script>";   
        }
    }
?>