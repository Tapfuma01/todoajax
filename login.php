<?php
session_start();
if (isset($_SESSION['UUID']) and isset($_SESSION['username'])) {
	$_SESSION['err'] = "You're Already Logged in!";
    header('Location: ./index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Todo Page | Login</title>
	<link rel="stylesheet" type="text/css" href="./includes/css/styles.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css" rel="stylesheet">
    <link href="css/styles.min.css" rel="stylesheet">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body class="login">

<div class=" wrapper card text-center row">
	<div class="center col-lg-12">
		<h1 class="card-title text-warning">Login</h1>
		<form class="mb-4" action="./includes/login.inc.php" method="POST">
			<input type="text" class="username" name="user" placeholder="Username" required><br><br>
			<input type="password" class="password" name="password" placeholder="Password" required><br><br>
			<button class="btn btn-black waves-effect text-white" type="submit">Login</button>
			<p class="white-text">Don't have an account? <a class="text-warning" href="signup.php">Sign up now</a>.</p>
		</form>
	</div>
</div>
<?php
$temp = $_SESSION['temp'];
$tempT = $_SESSION['tempT'];
$_SESSION['temp'] = null;
$_SESSION['tempT'] = null;
if ($tempT !== null){
echo'
  <div class="modal fade" id="errModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">'.$tempT.'</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        	'.$temp.'  
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>


<script>
$(document).ready(function(){
	$("#errModal").modal();
});
</script>
';
}
?>
</body>
</html>