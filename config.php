<?php
$con=mysqli_connect("localhost","root","","tulisantangan"); 
mysqli_connect('localhost','root','') or die ("Gagal Terhubung Ke Database");;
mysqli_select_db($con,'tulisantangan') or die ("Database Tidak Ditemukan");
?>