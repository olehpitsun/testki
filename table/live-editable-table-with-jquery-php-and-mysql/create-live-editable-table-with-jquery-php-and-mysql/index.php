<?php 
include_once("db_connect.php");
include("header.php"); 
?>
<title>phpzag.com : DemoCreate Live Editable Table with jQuery, PHP and MySQL</title>
<script type="text/javascript" src="dist/jquery.tabledit.js"></script>
<?php include('container.php');?>
<div class="container home">	
	<h2>Create Live Editable Table with jQuery, PHP and MySQL</h2>		 
	<table id="data_table" class="table table-striped">
		<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Gender</th>
				<th>Age</th>	
				<th>Designation</th>
				<th>Address</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$sql_query = "SELECT id, name, gender, address, designation, age FROM developers LIMIT 10";
			$resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
			while( $developer = mysqli_fetch_assoc($resultset) ) {
			?>
			   <tr id="<?php echo $developer ['id']; ?>">
			   <td><?php echo $developer ['id']; ?></td>
			   <td><?php echo $developer ['name']; ?></td>
			   <td><?php echo $developer ['gender']; ?></td>
			   <td><?php echo $developer ['age']; ?></td>   
			   <td><?php echo $developer ['designation']; ?></td>
			   <td><?php echo $developer ['address']; ?></td>   
			   </tr>
			<?php } ?>
		</tbody>
    </table>	
	<div style="margin:50px 0px 0px 0px;">
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="http://www.phpzag.com/create-live-editable-table-with-jquery-php-and-mysql/">Back to Tutorial</a>		
	</div>
</div>
<script type="text/javascript" src="custom_table_edit.js"></script>
<?php include('footer.php');?>
 



                                                                                                       