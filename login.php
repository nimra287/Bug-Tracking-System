<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>

#mdiv{
    margin-left: 80px;
}
#maindiv{
    width: 38%;
    display: block;
    padding-top: 50px;
    padding-left: 60px;
    padding-right: 10px;
    padding-bottom: 50px;
    box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19) ;
    margin-right: 500px;
    margin-top: 5px;
    margin-left: 350px;
}
.dd{
    display: inline-block;
    margin-left: 4%;
}
h2{
    font-size: 35px;
    color: #00008B;
    margin-bottom: 20px;
    text-align: center;
    margin-left: 6%;
}
input{
    margin-bottom: 10px;
    margin-top: 10px;
    height: 40px;
    width: 300px;
}
input:hover{
    border: 2px solid #00008B;
}
label{
    font-weight: bold;
}
#btn{
   background-color: #00008B;
    color:  white;
    font-size: 20px;
    box-shadow: 5px 5px 0 rgba(0,0,0,.5);
}
#btn:hover{
    box-shadow: 0 0 0 ;
}
a{
    text-decoration: none;
}
a:hover{
    color: red;
}
</style>
</head>

<body>
    <br><br>
    <div id="mdiv"> 
    <div id="maindiv">
        <div class="dd">
            <form action="./login.php" method="post" class="dd">
                <h2>Login Form</h2><br>

                <label for="" id="l">Your Email</label>
                <br>
                <input type="email" name="email" placeholder="Enter Your Email" required>
                <br><br>
                <label for="" id="l">Your Password</label>
                <br>
                <input type="password" name="password" placeholder="Password" required >
                <br><br>
                <input type="submit" id="btn" name="login" value="Login"><br>
                <a href="signup.php" style="margin-left: 39%; font-size: 18px;">Sign Up</a>


            </form>
        </div>
</body>

</html>



<?php
include("connect.php");
if(isset($_POST['login'])){
$email=$_POST['email'];
$password=$_POST['password'];
    $query=$con->prepare("SELECT * FROM userdata WHERE email='$email' && password='$password'");
    $query->execute();
    $result=$query->get_result();
    $row=$result->fetch_assoc();
    if($row>=1){
        header("Location:welcome.php");
    }
    else{
        echo "
        <script>
        //alert('No User found');
        </script>
        <p style=\"color:red; font-size:18px; margin-left:23%;\">Invalid Login Details</p>
        ";
    }
}
?>