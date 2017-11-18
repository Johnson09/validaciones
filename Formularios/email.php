<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="">
	<title>Email</title>
</head>
<body>
	<script>
		$(function(){
		   	$("#Mostrar").click(function(){
		   		var url = "../Ejercicios/exercise5.php";
		        $.ajax({
		        	type: "POST",
		        	url: url,
		        	data: $("#exe5").serialize(),
		        	success: function(data)
		        	{
		        		$("#resultado").html(data);
		        	}
		        });
		        return false;
		    });
		});
	</script>

	<form method="POST" action="../Ejercicios/exercise5.php" id="exe5">
		<p>Email: </p>
			
			<input type="email" name="email" placeholder="Enter a Email address">
	</form>
					
		<input type="button" value="Show" id="Mostrar">
		<div id="resultado">
			
		</div>
</body>
</html>