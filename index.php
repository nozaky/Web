<?php 
	$name = "Daniel Montero Lopez";
	$checked = "";
	
	if(isset($_POST['user']) && isset($_POST['pass'])){
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		if($user==null || $pass==null){
			echo "Uno de los datos no es valido";
		}else{
			echo "Los dos datos son validos";
		}
	}
$strHtmlButton = 	'';

$strHtml = '<div >
				<form action="miHome.php" method="POST">	
					<div id="formLoging">
						<div >
							<label >User: </label>
							<div>
								<input type="text" name="user">	
							</div>
						</div>
						<div >
							<label >Password: </label>
							<div>
								<input type="password" name="pass">	
							</div>
						</div>
						<div>
							<br>
							<input type="submit" name="accept" >
						</div>
					</div>
				</form>
			</div>';
			
echo $strHtml;

?>
