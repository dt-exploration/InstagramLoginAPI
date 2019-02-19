<?php
session_start();

if (empty($_SESSION['logged_in'])) {
    header('Location: login.php');
    die();
}

?>
<!doctype html>
<html lang="en">
<head>
  <style>
p.ex1 {
  display: block;
  margin-top: 9em;
  margin-bottom: 1em;
  margin-left: 0;
  margin-right: 0;
}
</style>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Instagram Log IN</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin-top:100px;">
	<div class="row justify-content-center">
		<div class="col-md-3" align="center">
			<img src="<?php echo $_SESSION['profile_picture']; ?>">
		</div>
        <div class="col-md-9" align="center">
          <p class="ex1">
			<?php echo "<----------- This guy (<b>".$_SESSION['full_name']."</b>) is the biggest faggot on the face of earth"; ?><br>
</p>
    </div>
	</div>
</div>
</body>
</html>
