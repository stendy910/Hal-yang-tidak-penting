<html>
<head>
	<title>Data</title>
</head>
<body>
<<?php  
//melakukan koneksi ke database
$conn=mysql_connect("localhost","CEO","");

mysql_select_db("user")
//menyimpan data yang dikirim
$nama=$_POST["nama"]
$tempat=$_POST["tempat"]
$tanggal=$_POST["tanggal"]
$email=$_POST["username"]
$nomortelepon=$_POST["phonenumber"]
$hobi=$_POST["hobi"]

//menampilkan data yang ada di database
echo "Nama : $nama";
echo "Tempat : $tempat";
echo "Tanggal : % tanggal";
echo "email : %email";
echo "No Telp : $nomortelepon";
echo "Hobi : $hobi";
$conn=mysql_connect("localhost","CEO","");
	mysql_select_db("user",$conn)
if (!empty($nama) AND !empty($tempat) AND !empty($tanggal) AND !empty($temail) AND !empty($tnomortelepon) AND !empty($hobi))
{
//$hasil"mysql_query($sqlstr,$conn);
	$sqlstr=mysql_query("insert into koneksi ( nama, tempat, tanggal, email, notelp, hobi) values ("$nama","$tempat","$tanggal","$email","$nomortelepon","$hobi")");
	echo "<b>Penyimpanan Data Berhasil</b>";


}
?>


</body>
</html> 