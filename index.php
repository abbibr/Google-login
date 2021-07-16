<?php

include "google.php";

if(isset($_SESSION['access_token']))
{
	header("Location: get.php");
	exit();
}

$loginURL = $client->createAuthUrl();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Google</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

	<div class="container" style="margin-top: 100px">
		<div class="row justify-content-center">
			<div class="col-md-6 col-offset-3" align="center">
				<img src="bg2.png " style="width: 225px; height: 100px;border-radius: 7px;"><br><br>

				<form>
					<input type="id" name="id" class="form-control" placeholder="User ID..."><br>
					<input type="email" name="email" class="form-control" placeholder="Email..."><br>
					<input type="submit" value="Вход" class="btn btn-primary">&nbsp;
					<input type="button" onclick="window.location = '<?php echo $loginURL; ?>'" value="Вход через Google" class="btn btn-danger">
				</form>

			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>
