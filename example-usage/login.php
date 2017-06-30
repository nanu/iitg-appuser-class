<?php
/*
 * Login.php
 * 
 * This script demonstrates the task of authentication, utilizing the
 * IITG AppUser Class (iitg-appuser-class.php)
 * 
 * Written by: Nanu Alan Kachari, Department of CSE, IIT Guwahati
 * on 30 June 2017
 * 
 */

//include the config file
include_once('config.php');

//Check if the user is logged in
if( $iitgAppUser->is_logged_in() )
{
	//user is logged in
	header('Location: memberpage.php');//redirect to the member-page
	exit;
}

//Check if the login-form is submitted
if( isset($_POST['submit']) )
{
	//the login form is submitted
	$mailserver = $_POST['mailserver'];	//get the mailserver
	$username = $_POST['username'];		//get the username
	$password = $_POST['password'];		//get the password
	
	//Check if the login credentials provided are valid
	if( $iitgAppUser->login($username, $password, $mailserver) )
	{
		//the login credentials provided are valid
		header('Location: memberpage.php');//redirect to the member-page
		exit;
	}
	else
	{
		//the login credentials provided are invalid
		$error[] = '<strong>Something is not right!</strong> Check your inputs and try again';//set an error
	}
}

//the login form is not submitted
include_once('header.php');//include the page-header

//include the css styling
echo "<link href='css/bootstrap.min.css' rel='stylesheet'>";

//Login form START
?>

<div class="container">

	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">

			<form role="form" method="post" action="" autocomplete="off">
				<?php echo "<pre>".APPTITLE."</pre>"; ?>
				<?php
				//check for any errors
				if(isset($error)){
					foreach($error as $error){
						echo '<pre class="bg-danger">'.$error.'</pre>';
					}
				}
				?>

				<div class="form-group">
					<select name="mailserver" id="mailserver" class="form-control input-lg" placeholder="Mail Server" value="<?php if(isset($error)){ echo $_POST['mailserver']; } ?>" tabindex="1" required>
						<?php if(isset($error) && $_POST['mailserver']!="" ) { echo '<option value="'.$_POST['mailserver'].'" selected>'.$_POST['mailserver'].'</option>'; ?>
						<?php } elseif(isset($error) && $_POST['mailserver']=="" ) { echo '<option value="" selected>Select your mailserver</option>'; ?>
						<?php } else { echo '<option value="" selected>Select your mailserver</option>'; } ?>
						<option value='mailserver1'>mailserver1</option>
						<option value='mailserver2'>mailserver2</option>
					</select>
				</div>

				<div class="form-group">
					<input type="text" name="username" id="username" class="form-control input-lg" placeholder="Enter username here" value="<?php if(isset($error)){ echo $_POST['username']; } ?>" tabindex="2" required>
				</div>

				<div class="form-group">
					<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Enter password here" tabindex="3" required>
				</div>
				
				<div class="row">
					<div class=""><input type="submit" name="submit" value="Login" class="btn btn-primary btn-block btn-lg" tabindex="4"></div>
				</div>

			</form>
		</div>
	</div>

</div>

<?php 
//Login form END

include_once('footer.php');//include the page-footer
?>
