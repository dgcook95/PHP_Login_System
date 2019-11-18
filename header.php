<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="loginSystem" content="Login System">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title>Login System Testing</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<header>
			<div class="topnav">
				<a class="active" href="index.php">Home</a>
				<?php
					$profileUser = $_SESSION['userId'];
					$userLoginStatus = isset($profileUser);
					if (!$userLoginStatus) {
						echo '<a href="signup.php" id="signupStyle">Sign Up</a>';
					}
					else {
						echo '<a href="profile.php?user='.$profileUser.'" id="signupStyle">Profile</a>';
					}
					if ($userLoginStatus) {
						echo '<div class="logout-container">
							<form action="includes/logout.inc.php" method="GET">
								<button type="submit" name="logout-submit">Log Out</button>
							</form>
                              				</div>';
                   			}
                    			else {
                        			echo '<div class="login-container">
							<form action="includes/login.inc.php" method="POST">
								<input type="text" placeholder="Username" name="mailuid">
                                    				<input type="password" placeholder="Password" name="pwd">
                                    				<button type="submit" name="login-submit">Login</button>
                                			</form>
                              				</div>';
                    			}
                		?>
            		</div>
       		</header>
