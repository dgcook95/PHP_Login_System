<?php
        require "header.php";
?>

        <main>
		<div id="main-wrapper">	
			<?php

			if ($userLoginStatus){
				$displayName = $_SESSION['uid'];
				echo '<p class="login-status">You are logged in as '.$displayName.'</p>';
			}
			else {
				echo '<p class="login-status">You are logged out!</p>';	
			}
			
			?>
        	</div>
	</main>

<?php
        require "footer.php";
?>
