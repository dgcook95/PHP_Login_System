<?php
	require 'header.php';
	require 'includes/dbh.inc.php';
	$id = $_GET['user'];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$sql = "SELECT status FROM userprofileimg WHERE idUsers='$id'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
		echo "<div class='profileContainer'>";
			if ($row['status'] == 0) {
				echo "<img class='profileImgContainer' src='images/uploads/profile".$id.".png'>";	
			} else {
				echo "<img class='profileImgContainer' src='images/uploads/profiledefault.png'>";
			}
		echo "</div>";
	if ($_SESSION['userId'] == $id) {
		if ($row['status'] == 0) {
			echo '<div class="fileButton">
			<form action="includes/upload.inc.php" method="POST" enctype="multipart/form-data">
				<input type="file" name="fileToUpload" data-classButton="btn btn-primary" data-input="false" data-classIcon="icon-plus" data-buttonText="Replace Profile Pic">
				<button type="submit" name="picSubmit">UPLOAD</button>
			</form>
			</div>';
		} else if ($row['status'] == 1) {
			echo '<div class="fileButton">
			<form action="includes/upload.inc.php" method="POST" enctype="multipart/form-data">
                                <input type="file" name="fileToUpload">
                                <button type="submit" name="picSubmit">UPLOAD</button>
                        </form>
			</div>';
		}
	}
?>
</body>
</html>
