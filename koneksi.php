<?php
$koneksi=mysqli_connect("localhost","root","","indie_eatry");
if (mysqli_connect_error()){
    echo "Koneksi Database gagal : " . mysqli_connect_error();
}
?>