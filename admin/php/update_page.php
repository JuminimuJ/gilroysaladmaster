<?php 

//ABOUT PAGE
if(isset($_POST['btnupdabout']))
{
	require_once('../../db/conn.php'); 
	$content_about = $_POST['content_about'];
	$sql = "UPDATE `page_about` SET `about_content`='$content_about' WHERE `id`=1";
	if($result = $conn->query($sql) or die(mysqli_error($conn)))
	{
		echo "<script type='text/javascript'>
	  			alert('Saved!');
	  			window.location='../page_about.php';
	  		</script>";
		
	}else{
		echo "<script type='text/javascript'>
	  			alert('Connection Error!');
	  			window.location='page_about.php';
	  		</script>";	
	}
		
	$conn->close();
	echo "<script type='text/javascript'>
	  			alert('Page has expired!');
	  			window.location='page_about.php';
	  		</script>";
}


?>