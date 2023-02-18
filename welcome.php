
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
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
   		<div class="register-left"><br>
   		<img src="pic.png"><br>
   		<br><h2>Welcome</h2>
   		<p>The Bug Tracker application visualizes projects and bugs that are related to these projects. The application enables you to log a new bug from the frontend.</p>
      <a href="homepage.php">Log Out</a><br>
   		
   	</div>
   	<div class="btn" ><br><br>
   		   <a class="button parallelogram" href="create.php"><span class="skew-fix">Report Bug</span></a><br><br>
   			<a class="button parallelogram" href="read-fetch.php"><span class="skew-fix">Check List</span></a><br><br>
   			
   </div>
  </div>
 </div>

</body>
</html>


