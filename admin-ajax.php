<?php
	require_once 'config.php';
	
	// Create connection
	$mysql = new mysqli($servername, $username, $password, $database);

	// Check connection
	if ($mysql->connect_error) {
		$die("Connection failed: " . $mysql->connect_error);
	}

    if (!empty($_POST)) {
        
		$name = $_POST['guestbook-name'];
		$message = $_POST['guestbook-message'];
		$confirm = $_POST['confirm'];
		
		$insert = mysqli_query($mysql, "INSERT INTO guestbook (name, message, confirm) VALUES('$name', '$message', '$confirm')");
		// $query = mysqli_query($mysql, "SELECT * FROM setting");
		// $result = mysqli_fetch_assoc($query);
		// if (is_null($result)) {
        //     if ($insert) {
		// 		$_SESSION["status"] = "save data success";
		// 		header('Location: '.$_SERVER['HTTP_REFERER']);
        //     } else {
		// 		$_SESSION["status"] = "Error: Server Error";
		// 		header('Location: '.$_SERVER['HTTP_REFERER']);
        //     }
		// } else {
		// 	$id = $result['id'];
		// 	$update = mysqli_query($mysql, "UPDATE setting SET percent='$percent', invested='$sold' WHERE id = '$id'");
        //     if ($update) {
		// 		$_SESSION["status"] = "save data success";
		// 		header('Location: '.$_SERVER['HTTP_REFERER']);
        //     } else {
		// 		$_SESSION["status"] = "Error: Server Error";
		// 		header('Location: '.$_SERVER['HTTP_REFERER']);
        //     }
		// }

		echo '<div class="user-guestbook">
				<div><img src="images/cropped-Logo-Fix.png"></div>
				<div class="guestbook">
					<a class="guestbook-name">'.$name.'</a><span class="wdp-confirm"><i class="fas fa-check-circle"></i> '.$confirm.'</span>
					<div class="guestbook-message">'.$message.'</div>
				</div>
			</div>';
    } else {
		echo '';
    }
	
?>