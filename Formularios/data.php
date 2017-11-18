<?php 

	require '../index.php';

?>
<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../Css/style.css">
	<title>Data</title>
</head>
<body>
	<script>
		$(function(){
		   	$("#Mostrar").click(function(){
		   		var url = "../Ejercicios/exercise1.php";
		        $.ajax({
		        	type: "POST",
		        	url: url,
		        	data: $("#exe1").serialize(),
		        	success: function(data)
		        	{
		        		$("#resultado").html(data);
		        	}
		        });
		        return false;
		    });
		});
	</script>

	<form method="POST" action="../Ejercicios/exercise1.php" id="exe1">
		<p>Data: </p>
			
			<input type="message" name="data" placeholder="Enter a data">
	</form>
					
		<input type="button" value="Show" id="Mostrar">
		<div id="resultado">
			
		</div>
</body>
</html>