<?php 
	include('../ketnoi.php');
	if(isset($_GET['id']) && filter_var($_GET['id'],FILTER_VALIDATE_INT,array('min_range'=>1))){
		$id=$_GET['id'];
		$query="delete from khachhang where id={$id}";
		$result=mysqli_query($conn,$query) or die ("Query {$query} \n <br/>
        MYSQL error:" .mysqli_error($conn));
        header('Location: showdskh.php');	
	}else{
		header('Location: showdskh.php');	
	}

 ?>