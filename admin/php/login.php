<?php 

if(isset($_POST['btnlogin']))
{
	require_once('../../db/conn.php'); 
	$username = $_POST['casusername'];
	$username = mysqli_escape_string($conn,$username);

	$password = $_POST['caspassword'];
	$password = mysqli_escape_string($conn,$password);
	$password = sha1($password);

	$sql = "SELECT * FROM `acc_user` WHERE `username`='$username' AND `hash_password`='$password'";
	if($result = $conn->query($sql) or die(mysqli_error($conn)))
	{
		$row = $result->fetch_array();
		if ($result->num_rows == 1)
		{
		  
		  //start session
			session_start();

			$_SESSION["user_id"] = $row[0];
			$_SESSION["username"] = $row[3];

			 echo "<script type='text/javascript'>
		  			window.location='../dashboard.php';
		  		</script>";
		} else {
		  echo "<script type='text/javascript'>
		  			alert('Incorrect Username or Password!');
		  			window.location='../login.php';
		  		</script>";
		}
	}else{
		echo "<script type='text/javascript'>
	  			alert('Connection Error!');
	  			window.location='../login.php';
	  		</script>";	
	}
		
	$conn->close();
	echo "<script type='text/javascript'>
	  			alert('Page has expired!');
	  			window.location='../login.php';
	  		</script>";
	}
?>