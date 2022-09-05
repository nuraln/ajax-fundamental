<?php 
    include ('koneksi.php');

    $sql = "SELECT * FROM nilai";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row['id_pegawai'].", Alamat:".$row['nilai']. "</br>";
        }
    }
?>