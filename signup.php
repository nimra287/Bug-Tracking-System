<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>

#mdiv{
    margin-left: 80px;
}
label{
    font-weight: bold;
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
    margin-left: 3%;
}
input{
    margin-bottom: 10px;
    margin-top: 10px;
    height: 40px;
    width: 300px;
}
input:hover{
    border: 1px solid #00008B;
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
    <div id="mdiv"> 
    <img src="./images/download.png" alt="" height="35">
    <div id="maindiv">
        <div class="dd">
            <form action="./signup.php" method="post" class="dd">
                <h2>Sign Up Form</h2><br>

                <label for="" id="l">Your Name</label>
                <br>
                <input type="text" name="uname" placeholder="Enter Your Name" required>
                <br>
                <label for="" id="l">Your Email</label>
                <br>
                <input type="email" name="email" placeholder="Enter Your Email" required>
                <br>
                <label for="" id="l">Your Password</label>
                <br>
                <input type="password" name="password" placeholder="Password" required >
                <br><br>
                <input type="submit" id="btn" name="create" value="Sign Up"><br>
                <a href="login.php" style="margin-left: 41%; font-size: 18px;">Login</a>

            </form>
        </div>
</body>

</html>


<?php
include("connect.php");

if(isset($_POST['create'])){

    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $password=$_POST['password'];


$query=$con->prepare("INSERT INTO userdata(name,email,password) Values(?,?,?)");
$query->bind_param("sss" ,$uname,$email,$password);
$query->execute();
$query->close();

  
header("Location: login.php");

}
?>