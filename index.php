<?php 
	$name = "Daniel Montero Lopez";

	function checkUsers(){
		if ($_POST['uname']!==(false)) {
			echo "SUCCESSFULL";
		}else{
			echo "ERROR";
		}
	};
?>
<html>
<head>

</head>
<body>
<h1>Web desarrollada por <?= $name; ?></h1>
<br>
<div class="username">
	<label class="uname">User Name:</label>
	<input type="text" id="uname" required minlength="4" placeholder="4 characters min.">
</div>

<div class="openSesion">
	<input type="button" id="access" onclick="checkUsers()">
</div>
</body>
</html>