<?php
        require "header.php";
?>

        <main>
		<div id="main-wrapper">	
        		<h1>Sign Up</h1>
			<?php
				
				if (isset($_GET['error'])) {
					if ($_GET['error'] == "emptyfields") {
						echo '<p class="signuperror">Fill in all fields!</p>';
					}
					else if ($_GET['error'] == "invalidmailuid") {
						echo '<p class="signuperror">Invalid Email and Username</p>';
					}
					else if ($_GET['error'] == "invalidmail") {
                                                echo '<p class="signuperror">Invalid Email Address</p>';
                                        }
					else if ($_GET['error'] == "invaliduid") {
						echo '<p class="signuperror">Invalid Username</p>';
					}
					else if ($_GET['error'] == "passwordcheck") {
						echo '<p class="signuperror">Passwords didn\'t match. Try again.</p>';
					}
				}

			?>
			<form action="includes/signup.inc.php" method="POST">
				<input type="text" name="uid" placeholder="Username">
				<input type="text" name="mail" placeholder="E-Mail">
				<input type="password" name="pwd" placeholder="Password">
				<input type="password" name="pwd-repeat" placeholder="Repeat Password">
				<button type="submit" name="signup-submit">Sign Up</button>
			</form>
		</div>
	</main>

<?php
        require "footer.php";
?>
