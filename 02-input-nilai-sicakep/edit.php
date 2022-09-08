<?php 
    include ('koneksi.php');

    $ambil = $con->query("SELECT * FROM nilai WHERE id_nilai = 1");
    $nl = mysqli_fetch_array($ambil);
    $id_nilai = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing Ajax</title>
    <script type="text/javascript" src="jquery-3.6.1.min.js"></script>
    <style>
        * {
            font-size: 15px;
            padding: 5px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <table>
            <?php 
                // foreach ($nilai as $nl){
            ?>
            <input type="hidden" name="id_nilai" value="<?php echo $nl['id_nilai'] ?>" >
            <tr>
                <td>id_pegawai</td>
                <td><input type="text" name="id_pegawai" value="<?php echo $nl['id_pegawai'] ?>" placeholder="Masukkan id_pegawai Anda"></td>
            </tr>
            <tr>
                <td>id_bulan</td>
                <td><input type="text" name="id_bulan" value="<?php echo $nl['id_bulan'] ?>" placeholder="Masukkan id_bulan"></td>
            </tr>
            <tr>
                <td>id_tahun</td>
                <td><input type="text" name="id_tahun" value="<?php echo $nl['id_tahun'] ?>" placeholder="Masukkan id_tahun Anda"></td>
            </tr>
            <tr>
                <td>nilai</td>
                <td><input type="text" name="nilai" value="<?php echo $nl['nilai'] ?>" placeholder="Masukkan nilai"></td>
            </tr>
            <tr>
                <td><button name="update" type="submit"> edit</button></td>
            </tr>
        </table>
    </form>
    <hr>
    <div id="content">

    </div>

    <script type="text/javascript">
        // $(document).ready(function(){
        //     loadData();

        //     $('form').on('submit',function(e){
        //         e.preventDefault();
        //         $.ajax({
        //             type:$(this).attr('method'),
        //             url:$(this).attr('action'),
        //             data:$(this).serialize(),
        //             success:function(){
        //                 loadData();
        //             }
        //         });
        //     })
        // })

        // function loadData(){
        //     $.get('data.php', function(data){
        //         $('#content').html(data)
        //     })
        // }

        // function resetForm(){
        //     $('[type=text]').val('');
        //     $('[name=nama]').focus();
        // }
    </script>
    <?php  

            // EDIT DATA
    if(isset($_POST['update'])){
        // $id_nilai = '$_POST[id_nilai]';
        // $id_pegawai = '$_POST[id_pegawai]';
        // $id_bulan = '$_POST[id_bulan]';
        // $id_tahun = '$_POST[id_tahun]';
        // $nilai = '$_POST[nilai]';

        mysqli_query($con, "UPDATE nilai SET 
            id_pegawai='$_POST[id_pegawai]', 
            id_bulan='$_POST[id_bulan]', 
            id_tahun='$_POST[id_tahun]', 
            nilai='$$_POST[nilai]'");

        // $query_run = mysqli_query($con, $query);
        // if($query_run){
        //     echo "<script>alert('Data sudah diupdate')</script>";
        //     echo "<script>location='penilaian-bulanan.php?id=$id_pegawai'</script>"; 
        // }
        // else 
        // {
        //     echo "<script>alert('Update data gagal')</script>";
        //     echo "<script>location='penilaian-bulanan.php?id=$id_pegawai'</script>";   
        // }
    }
    ?>
</body>
</html>