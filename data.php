<?php 
    include ('koneksi.php');

    $sql = "SELECT * FROM data";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row['nama'].", Alamat:".$row['alamat']. "</br>";
        }
    }
?>