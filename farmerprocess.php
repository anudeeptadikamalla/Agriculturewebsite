<?php
 session_start();
 
include 'db.php';
 $login = mysqli_query($conn,"SELECT * FROM farmersignup WHERE (emails = '" .($_POST['emails']) . "') and (psw = '" .($_POST['psw']) . "')");
 $row=mysqli_fetch_array($login);  
 
 if($row){
 $_SESSION['emails'] = $row['emails'];

 echo '<script>windows: location="farmerhome.html"</script>';
	}
	else {
        echo '<script>alert("invalid username/ password")</script>';
        echo '<script>windows: location="farmerlogin.html"</script>';
		}
 
 
?>
