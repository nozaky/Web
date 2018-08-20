<?php 
	$name = "Daniel Montero Lopez";
	$checked = "";
	function example(){
		var_dump("expression");
	}
//	function checkUsers(){
//		if ($_POST['uname']!==(false)) {
//			$checked = "SUCCESFULL";
//		}else{
//			$checked = "FAILED";
//		}
//		var_dump($checked);
//	}
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
	<input type="button" id="access" onclick="check();" value="Submmit">
	<script type="text/javascript">
		function check(){
			alert('<?php example(); ?>');
		}
	</script>
</div>
</body>
</html>