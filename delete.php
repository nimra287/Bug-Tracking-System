<?php 

include 'connect.php';

$id = $_GET['ids'];


$deletequery = "delete from bugsrecord where id=$id";

$query = mysqli_query($con, $deletequery);

if($query){
		?>
		<script>
			//alert('Delete Successfully');
		</script>

		<?php 
		header('location:read-fetch.php');
	}else{
		?>
		<script>
			//alert('Data Deleted');
		</script>
	<?php
	}

?>