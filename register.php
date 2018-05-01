<!doctype html>  
<html>  
<head>  
 <title>Register</title>  
<style>   
 body{      
        margin:0%;  
        background-color: #bbff99 ;    
        font-family: verdana;  
        font-size: 100%  
          
        }

div.header{
        color: #000;
        text-align: left;
        padding: 1em 9.3em 1em ;
        background-color: #44cc00;
        font-size: 2em;
}
h1 {  
        text-align: center;
        color: indigo;  
        font-family: verdana;  
        font-size: 2em;  
}  
.kotak{
            background-color: #fff;
            text-align: left;
            border-radius: 3px;
            padding: 1em 3em 1em 2em;
            margin:1em auto;
            width: 50em;            
}
.a1{
    height: 1.4em;
    padding: 5px;
    width: 95%;
    background: #efefef;
    border: 0;
    font-size: 10pt;
    margin: 6px 0px;
}
td {
    padding: 2px;
}
label{
    font-size: 10pt;
}
.a2{
  float: right;
  background: #3498db;
  color: #fff;
  border: 0;
  padding: 5px 8px;
  margin: 20px 0px;
  width: 15%;
  font-size: 0.8em;
  height: 3em;
}

</style> 
    </head>  
    <body>  
         
    <div class="header">
        TulisanTangan
    </div>    
           <br>
        <div class="kotak">
    <form action="" method="POST">
    <table style="width: 50em;">
        <br>
        <center><content style="font-size: 1.4em ">Pendaftaran TulisanTangan</content></center>
        <br><br>
    <tr>    
    <td><label>Nama :  </label></td> <td><input class="a1" type="text" name="nama" id="nama"></td>
    </tr>
    <tr>
        <td><label>Username:  </label></td> <td><input class="a1" type="text" name="username" id="username"></td>
    </tr>  
    <tr>
        <td><label>Password:  </label></td> <td><input class="a1" type="password" name="password" id="password"><td>
    </tr>
    <tr> <td colspan="2"></td>
    </tr>
    <tr>
        <td><label>Jenis Kelamin:  </label></td> <td><input type="radio" name="gender"
      <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male
    </tr>
    <tr>
        <td><label>Tempat:  </label></td> <td><input class="a1" type="text" name="tempat" id="tempat"></td>
    </tr>
    <tr>
        <td><label>Tanggal Lahir:  </label></td> <td><input class="a1" type="date" name="tanggallahir" id="tanggallahir"></td>
    </tr>
    <tr>
        <td><label>Email: </label></td> <td><input class="a1" type="email" name="email" id="email"></td>
    </tr>
    <tr>
        <td><label>Phone Number:  </label></td> <td><input class="a1" type="text" name="phonenumber" id="phonenumber"></td>
    </tr>
    <tr>
    <td colspan="2" ><input class="a2" type="submit" value="Register" name="submit" /></td></tr>
    </table>
    </form>
    </div>  
    <?php  
    if(isset($_POST["submit"])){  
    if(!empty($_POST['username']) && !empty($_POST['password'])) {  
        $nama=$_POST['nama'];
        $username=$_POST['username'];  
        $password=$_POST['password'];
        $con=mysqli_connect('localhost','root','','tulisantangan') or die(mysqli_error());  
        mysqli_select_db($con,'tulisantangan') or die("cannot select DB");  
      
        $query=mysqli_query($con,"SELECT * FROM user WHERE username='$username'");  
        $numrows=mysqli_num_rows($query);  
        if($numrows==0)  
        {  
        $sql="INSERT INTO user(nama,username,password) VALUES ('$nama','$username','$password')";  
      
        $result=mysqli_query($con,$sql);  
            if($result){
            $last_id = mysqli_insert_id($con); 
        echo "Account Successfully Created. Last inserted ID is: ".$last_id;  
        } else {  
        echo "Failure!";  
        }  
      
        } else {  
        echo "That username already exists! Please try again with another.";  
        }  
      
    } else {  
        echo "All fields are required!";  
    }  
    }  
    ?>  
    </body>  
    </html>   