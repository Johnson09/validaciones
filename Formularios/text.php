<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="">
	<title>Text</title>
</head>
<body>
	<script>
		$(function(){
		   	$("#Mostrar").click(function(){
		   		var url = "../Ejercicios/exercise2.php";
		        $.ajax({
		        	type: "POST",
		        	url: url,
		        	data: $("#exe2").serialize(),
		        	success: function(data)
		        	{
		        		$("#resultado").html(data);
		        	}
		        });
		        return false;
		    });
		});
	</script>

	<form method="POST" action="../Ejercicios/exercise2.php" id="exe2">
		<p>Text: </p>
			
			<input type="text" name="text" placeholder="Enter a text">
	</form>
					
		<input type="button" value="Show" id="Mostrar">
		<div id="resultado">
			
		</div>
</body>
</html>