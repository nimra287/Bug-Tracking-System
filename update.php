
<!DOCTYPE html>
<html>
<head>
    <title>Update</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <?php include 'style.css'; ?>

<style type="text/css">


  
#maindiv {
    margin-top: -46.3%;
    text-align: center;
    margin-left: 580px;
    width: 46%;
    background-color: white;
    padding: 10px 10px 30px 20px;
    box-shadow:0 10px 10px 0 rgba(0, 0, 0, 0.), 0 10px 20px 0 rgba(0, 0, 0, 0.19) ;
}
.dd{
    display: inline-block;
    margin-left: 12%;
}
.txtbox{
    width: 400px;
    height: 35px;
    margin-top: 1px;
    background-color: #F8F9F9;
    border :1px solid #C2C8CC;
}
.txtbox:hover{
     border: 2px solid #00008B;
}
h1{
    margin-top: 1%;
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
    margin-top: -40%;
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
    height: 35px;
    margin-top: 10px;
    background-color: #F8F9F9;
    border :1px solid #C2C8CC;
}
.namei:hover{
   border: 2px solid #00008B;
}
.namei1{
    width: 202px;
    height: 35px;
    position:relative; 
    top:-59px;
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
        <i class="fa fa-chevron-left" style="color:white; margin-right:2%;" onclick="document.location='welcome.php'" title="Go To Home Page"></i> Update Bug</h2>

        <p>Bug Fixes means a temporary work-around, patch, or bypass to update the program code to correct errors or defects.</p>
        <a href="read-fetch.php">Check List</a><br>
    </div>

    <div id="maindiv">
        <div class="dd">
        <form action=""  method="post" style="text-align: start;">
            <h1>Update Bug</h1>
            


<?php

include 'connect.php';
$id = $_GET['id'];
$selectquery = "select * from  bugsrecord where id=$id";
$query = mysqli_query($con,$selectquery);
$result = mysqli_fetch_assoc($query);

if(isset($_POST['submit'])){
    $bug = $_POST['bug'];        //accept special characters
    $bugtype = $_POST['btype'];
    $bugdesc= $_POST['bdesc'];
    $reportername = $_POST['rname'];
    $status=$_POST['bugstatus'];
    $bugseverity =  $_POST['severity'];
    $reportedat=date("Y-m-d")." ".date("h:i");


    $updatequery = "update  bugsrecord set id=$id, bug='$bug', bugtype='$bugtype', bugdesc='$bugdesc', reportedby='$reportername', bugstatus='$status', severity='$bugseverity' where id=$id";

    $query = mysqli_query($con, $updatequery);

    if($query){
         
        ?>
        <script>
            window.location="read-fetch.php";
            //alert('Data Updated Successfully');
        </script>
        <?php 
    }else{
        ?>
        <script>
            //alert('Data Not Updated');
        </script>
    <?php
    }
}
?>


            <div>
            <label for="" style="font-weight: bold;">Bug</label><br>
            <input type="text" name="bug" class="txtbox" value="<?php echo $result['bug']; ?>" required>
            <br>
            <br>
            <label for="" style="font-weight: bold;">Reporter Name</label><br>
            <input type="text" name="rname" class="txtbox" value="<?php echo $result['reportedby']; ?>" required>
            <br>
            <br>
            <label for="" style="font-weight: bold;">Bug Description</label><br>
            <input type="text" name="bdesc" class="txtbox" value="<?php echo $result['bugdesc']; ?>" required>
            <br><br>


            <label style="font-weight: bold;">Bug Status</label><br>
                <select name="bugstatus"  class="txtbox"  required>
                    <option value="reported"
                    <?php
                    if($result['bugstatus'] == 'reported'){
                        echo "selected";
                    }
                    ?>
                    >reported</option>

                    <option value="in-progress"
                    <?php
                    if($result['bugstatus'] == 'in-progress'){
                        echo "selected";
                    }
                    ?>
                    >in-progress</option>

                    <option value="complete"
                     <?php
                    if($result['bugstatus'] == 'complete'){
                        echo "selected";
                    }
                    ?>
                    >complete</option>
                </select>


            <br><br>
                
                <label style="font-weight: bold;">Severity</label>
                <label style="font-weight: bold; margin-left: 26%;">Bug Type</label><br>
                <select name="severity" id="bugsuvrity" class="namei" required>
                    <option value="Critical"
                     <?php
                    if($result['severity'] == 'Critical'){
                        echo "selected";
                    }
                    ?>
                    >Critical</option>

                    <option value="Minor"
                    <?php
                    if($result['severity'] == 'Minor'){
                        echo "selected";
                    }
                    ?>
                    >Minor</option>

                    <option value="Major"
                     <?php
                    if($result['severity'] == 'Major'){
                        echo "selected";
                    }
                    ?>
                    >Major</option>

                    <option value="LowTrival"
                     <?php
                    if($result['severity'] == 'LowTrival'){
                        echo "selected";
                    }
                    ?>
                    >Low Trival</option>

                    <option value="Blocker"
                     <?php
                    if($result['severity'] == 'Blocker'){
                        echo "selected";
                    }
                    ?>
                    >Blocker</option>
                </select>
                <br>
            <br>
            
            <select name="btype" class="namei1" required>
                <option value="Functional defects" 
                <?php
                    if($result['bugtype'] == 'Functional defects'){
                        echo "selected";
                    }
                ?>
                >Functional defects</option>

                <option value="Performance defects"
                 <?php
                    if($result['bugtype'] == 'Performance defects'){
                        echo "selected";
                    }
                ?>
                >Performance defects</option>

                <option value="Usability defects"
                <?php
                    if($result['bugtype'] == 'Usability defects'){
                        echo "selected";
                    }
                ?>
                >Usability defects</option>

                <option value="Compatibility defects"
                <?php
                    if($result['bugtype'] == 'Compatibility defects'){
                        echo "selected";
                    }
                ?>
                >Compatibility defects</option>

                <option value="Security defects"
                <?php
                    if($result['bugtype'] == 'Security defects'){
                        echo "selected";
                    }
                ?>
                >Security defects</option>
            </select>

            <input type="submit" id="btn" name="submit" value="Update">
            
        </form>
        </div>
    </div>
  </div>
 </div>

</body>
</html>


