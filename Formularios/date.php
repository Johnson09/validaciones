<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="">
	<title>Date</title>
</head>
<body>
	<script>
		$(function(){
		   	$("#Mostrar").click(function(){
		   		var url = "../Ejercicios/exercise4.php";
		        $.ajax({
		        	type: "POST",
		        	url: url,
		        	data: $("#exe4").serialize(),
		        	success: function(data)
		        	{
		        		$("#resultado").html(data);
		        	}
		        });
		        return false;
		    });
		});
	</script>

	<form method="POST" action="../Ejercicios/exercise4.php" id="exe4">
		<p>Date: </p>
			
			<input type="date" name="date" placeholder="Enter a date">
	</form>
					
		<input type="button" value="Show" id="Mostrar">
		<div id="resultado">
			
		</div>
</body>
</html>