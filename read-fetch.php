<!DOCTYPE html>
<html>
<head>
	<title>List of Bugs</title>
	<?php include 'style.css'; ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
</head>

<body>
<div class="main-div">
	<div id="logo"> 
	<!--<a href="welcome.php"><img src="logo.jpg"></a><br>--> 
	</div><br><br>
	<h1 style="color: #00008B;">Lists of Bugs Reported Using Bug Tracker</h1><br>
	<div class="">
		<div class="table-responsive">
			<table>
				<thead style="border: 1px solid white;">
				<tr style="border: 1px solid lightgrey;">
             <th style="background-color: #000080; border: 1px solid lightgrey;" title="Go To Home Page"><a href="welcome.php" style="text-decoration: none;"><i class="fa fa-chevron-left"  style="color:white; margin-right: 80%; font-size: 20px;"></i></a></th>
             <th scope="col" colspan="10" style="text-align:center; background-color: #000080;">Area of workplace</th>
        	</tr>
        	<tr>
        	<th style="border: 1px solid lightgrey;">ID</th>
					<th style="border: 1px solid lightgrey;">Bug</th>
					<th style="border: 1px solid lightgrey;">Bug Type</th>
					<th rowspan="2">Bug Description</th>
					<th style="border: 1px solid lightgrey;">Reported By</th>
					<th style="border: 1px solid lightgrey;">Status</th>
					<th style="border: 1px solid lightgrey;">Severity</th>
					<th style="border: 1px solid lightgrey;">Reported Date</th>
					<th colspan="3" style="border: 1px solid lightgrey;">Operation</th>
			</tr>
			</thead>
			<tbody>

		<?php 

		include 'connect.php';

		$selectquery = "select * from bugsrecord";
		$query = mysqli_query($con,$selectquery);

		while($result = mysqli_fetch_assoc($query)){
			?>
				<tr style="border: 1px solid lightgrey;">
					<td><?php echo $result['id']; ?></td>
					<td><?php echo $result['bug']; ?></td>
					<td><?php echo $result['bugtype']; ?></td>
					<td><?php echo $result['bugdesc']; ?></td>
					<td><?php echo $result['reportedby']; ?></td>
					


					<?php
             if($result['bugstatus']=="reported"){ 
                 ?>
                <td style="color:blue";><?php echo $result['bugstatus']; ?></td>
            <?php
             }
              elseif($result['bugstatus']=="in-progress"){
                    ?>
                    <td style="color:#FF5733;";><?php echo $result['bugstatus']; ?></td>
                   <?php
                 }
              else{
                   ?>
                    <td style="color:green";><?php echo $result['bugstatus']; ?>
                  <i class="fa fa-check"></i></td>
                     <?php
                 }
            ?>


			<?php
             if($result['severity']=="Critical" || $result['severity']=="Blocker"){ 
                 ?>
                <td style="color:#E82020";><?php echo $result['severity']; ?></td>
            <?php
             }
             elseif($result['severity']=="Major"){
                    ?>
                    <td style="color:#008080";><?php echo $result['severity']; ?></td>
            <?php
                 }
                 else{
                     ?>
                     <td style="color:#8F16D8 ";><?php echo $result['severity']; ?></td>
                <?php
                 }
            ?>

          <td><?php echo $result['reporteddate']; ?></td>
					




					<td><a href="update.php?id=<?php echo $result['id']; ?>"><i class="fa fa-edit" 
						style="font-size:17px;" title="Update" ></i></a></td>
					<td onclick="return confirm('Confirmation !!! \nAre you sure want to permanently delete this?')"><a href="delete.php?ids=<?php echo $result['id']; ?>"><i class="fa fa-trash" 
						style="font-size:17px;" title="Delete"></i></a></td>
					<td><a href="create.php"><i class="fa fa-plus-circle" style="font-size:17px;" title="Create New Bug" ></i></a></td>
				</tr>

	<?php 

		}
	?>
					
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>

<?php


?>

