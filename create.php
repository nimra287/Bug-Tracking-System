
<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<?php include 'style.css'; ?>

<style type="text/css">


  
#maindiv {
    margin-top: -46%;
    text-align: center;
    margin-left: 570px;
    width: 47%;
    background-color: white;
    padding: 10px 10px 40px 20px;
    box-shadow:0 10px 10px 0 rgba(0, 0, 0, 0.), 0 10px 20px 0 rgba(0, 0, 0, 0.19) ;
}
.data{
    display: inline-block;
    margin-left: 12%;
}
.txtbox{
    width: 400px;
    height: 40px;
    margin-top: 10px;
    background-color: #F8F9F9;
    border :1px solid #C2C8CC;
}
.txtbox:hover{
	 border: 2px solid #00008B;
}
h1{
	margin-top: 2% ;
    font-size: 35px;
    color: #00008B;
    margin-bottom: 20px;
    text-align: center;
    margin-left: -14%;
}
label{
    color: #10363D;
}
#btn{
    width: 400px;
    height: 45px;
    margin-top: 2px;
    background-color: #00008B;
    color:  white;
    font-size: 20px;
    box-shadow: 5px 5px 0 rgba(0,0,0,.5);
}
#btn:hover{
    box-shadow: 0 0 0 ;
}
.namei{
    width: 170px;
    height: 40px;
    margin-top: 10px;
    background-color: #F8F9F9;
    border :1px solid #C2C8CC;
}
.namei:hover{
   border: 2px solid #00008B;
}
.namei1{
    width: 200px;
    height: 40px;
    position:relative; 
    top:-64px;
    margin-left: 40%;
    background-color: #F8F9F9;
    border :1px solid #C2C8CC;
}
.namei1:hover{
    border: 2px solid #00008B;
}
#bugsuvrity{
    margin-left: 2px;
}
option{
    color: grey;
}

</style>
</head>
<body>
   <div class="divmain">
   	<div class="row">
   		<div class="register-left"><br>
   		 <img src="pic.png"><br>
       
   		<br><h2>
        <i class="fa fa-chevron-left" style="color:white; margin-right:2%;" onclick="document.location='welcome.php'" title="Go To Home Page"></i> Report Bug</h2>

   		<p>A bug report is something that stores all information needed to document, report and fix problems occurred in software or on a website.</p>
   		<a href="read-fetch.php">Check List</a><br>
   	</div>

   	<div id="maindiv">
        <div class="data">
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"  method="post" style="text-align: start;">
            <h1 style="text-align: center;">Report Bug</h1>
            <div>
            <label for="" style="font-weight: bold;">Bug</label><br>
            <input type="text" name="bug" class="txtbox" required>
            <br>
            <br>
            <label for="" style="font-weight: bold;">Reporter Name</label><br>
            <input type="text" name="rname" class="txtbox" required>
            <br>
            <br>
            <label for="" style="font-weight: bold;">Bug Description</label><br>
            <input type="text" name="bdesc" class="txtbox" required>
            <br><br>
                
                <label style="font-weight: bold;">Severity</label>
                <label style="font-weight: bold; margin-left: 26%;">Bug Type</label><br>
                <select name="severity" id="bugsuvrity" class="namei" required>
                    <option value="Critical">Critical</option>
                    <option value="Minor">Minor</option>
                    <option value="Major">Major</option>
                    <option value="LowTrival">Low Trival</option>
                    <option value="Blocker">Blocker</option>>
                </select>
                <br>
            <br>
            
            <select name="btype" class="namei1" required>
                <option value="Functional defects" >Functional defects</option>
                <option value="Performance defects">Performance defects</option>
                <option value="Usability defects">Usability defects</option>
                <option value="Compatibility defects">Compatibility defects</option>
                <option value="Security defects">Security defects</option>
            </select>
            <input type="submit" id="btn" name="submit" value="Create"><br>
            
        </form>
        </div>
    </div>
  </div>
 </div>

</body>
</html>


<?php

include 'connect.php';

if(isset($_POST['submit'])){
	$bug = $_POST['bug'];        //accept special characters
	$bugtype = $_POST['btype'];
	$bugdesc= $_POST['bdesc'];
	$reportername = $_POST['rname'];
    $status="reported";
    $bugseverity =  $_POST['severity'];
    $reportedat=date("Y-m-d")." ".date("h:i");
    

	$insertquery = "insert into bugsrecord(bug, bugtype, bugdesc, reportedby, bugstatus, severity, reporteddate) values('$bug', '$bugtype', '$bugdesc', '$reportername', '$status','$bugseverity', '$reportedat')";

	$query = mysqli_query($con, $insertquery);

	if($query){
		//echo '<h2 style="color:green">Data Inserted Successfully</h2>';
		?>
		<script>
			 window.location="read-fetch.php";
			//alert('Data Inserted Successfully');
		</script>

		<?php 

	}else{
		?>
		<script>
			//alert('Data Not Inserted');
		</script>
	<?php
	}
}
?>