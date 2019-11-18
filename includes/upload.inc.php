<?php
	if (isset($_POST['picSubmit'])) {
		include_once 'dbh.inc.php';
		session_start();
		$id = $_SESSION['userId'];
		$file = $_FILES['fileToUpload'];
		
		$fileName = $_FILES['fileToUpload']['name'];
		$fileTmpName = $_FILES['fileToUpload']['tmp_name'];
		$fileSize = $_FILES['fileToUpload']['size'];
		$fileError = $_FILES['fileToUpload']['type'];
		$fileType = $_FILES['fileToUpload']['error'];
		
		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));
		
		$allowed = array('jpg', 'jpeg', 'png', 'gif');

		print_r($file);
		
		if (in_array($fileActualExt, $allowed)) {
			if ($fileError == 0) {
				if ($fileSize < 2000000) {
					$fileNameNew = "profile".$id.".".$fileActualExt;
					$fileDestination = '../images/uploads/'.$fileNameNew;
					$sql = "UPDATE userprofileimg SET status=0 WHERE idUsers='$id';";
					$result = mysqli_query($conn, $sql);
					move_uploaded_file($fileTmpName, $fileDestination);
					header("Location: ../profile.php?upload=success");
				} else {
					echo "Your file is too big.";
				}
			} else {
				echo "There was an error uploading your file.";
			}
		} else {
			echo "You cannot upload files of this type.";
		} 
	}
?>
