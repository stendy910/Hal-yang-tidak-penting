    <!doctype html>  
    <html>  
    <head>  
    <title>Register</title>  
        <style>   
            body{  
        margin-top: 100px;  
        margin-bottom: 100px;  
        margin-right: 150px;  
        margin-left: 80px;  
        background-color: azure ;  
        color: palevioletred;  
        font-family: verdana;  
        font-size: 100%  
          
            }  
                h1 {  
        color: indigo;  
        font-family: verdana;  
        font-size: 100%;  
    }  
             h2 {  
        color: indigo;  
        font-family: verdana;  
        font-size: 100%;  
    }
</style> 
    </head>  
    <body>  
         
        <center><h1>CREATE REGISTRATION AND LOGIN FORM USING PHP AND MYSQL</h1></center>    
        <center><h2>Registration Form</h2></center>  
    <form action="" method="POST">  
        <legend>  
        <fieldset>  
    Nama : <input type="text" name="nama" id="nama"><br>
    Username: <input type="text" name="username" id="username"><br />  
    Password: <input type="password" name="password" id="password"><br/>   
    <input type="submit" value="Register" name="submit" />  
                  
            </fieldset>  
            </legend>  
    </form>  
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