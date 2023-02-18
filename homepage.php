
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<?php include 'style.css'; ?>

<style>
	
.btn{
	width: 40%;
	height: 10%;
	margin-top: 15%;
	margin-left: 10%;
}
.button {
  background:#00008B;
  box-shadow:10px 10px 0 rgba(0,0,0,.5);
  display:inline-block;
  font-size:2em;
  padding:.5em 2em;
  text-decoration:none;
}
.button:hover {
  box-shadow: 0 0 0 ;
}
.but {
  background:#00008B;
  box-shadow:10px 10px 0 rgba(0,0,0,.5);
  display:inline-block;
  font-size:2em;
  padding:.5em 2.5em;
  text-decoration:none;
  
}

.but:hover {
  box-shadow: 0 0 0 ;
}

.parallelogram{
  transform: skew(-20deg);
}

.skew-fix{
  display:inline-block;
  transform: skew(20deg);
  color: white;
}
</style>

</head>
<body>
   <div class="divmain">
   	<div class="row">
   		<div class="register-left"><br><br>
   		<img src="img-logo.png"><br>
   		<br><h2>Bug Tracker</h2>
   		<p>Bug tracking is the process of logging and monitoring bugs or errors during software testing. It is also referred to as defect tracking or issue tracking. Large systems may have hundreds or thousands of defects. Each needs to be evaluated, monitored and prioritized for debugging.</p>
   		
   	</div>
   	<div class="btn" ><br><br>
   		   <a class="button parallelogram" href="signup.php"><span class="skew-fix">Sign Up</span></a><br><br>
   			<a class="but parallelogram" href="login.php"><span class="skew-fix">Log In</span></a><br><br>
   			
   </div>
  </div>
 </div>

</body>
</html>


