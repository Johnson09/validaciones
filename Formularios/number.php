<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="">
	<title>Number</title>
</head>
<body>
	<script>
		$(function(){
		   	$("#Mostrar").click(function(){
		   		var url = "../Ejercicios/exercise3.php";
		        $.ajax({
		        	type: "POST",
		        	url: url,
		        	data: $("#exe3").serialize(),
		        	success: function(data)
		        	{
		        		$("#resultado").html(data);
		        	}
		        });
		        return false;
		    });
		});
	</script>

	<form method="POST" action="../Ejercicios/exercise3.php" id="exe3">
		<p>Number: </p>
			
			<input type="number" name="number" placeholder="Enter a number">
	</form>
					
		<input type="button" value="Show" id="Mostrar">
		<div id="resultado">
			
		</div>
</body>
</html>