<!DOCTYPE html>
<html>
<head>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script> 
	<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="Css/style.css">
	<title>Validations</title>
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="index.php">Intro</a></li>
				<li><a href="#">Exercises</a>
 
				<div>
 
					<ul>
						<li class="titulo"><a href="">Data</a></li>
						<li><a href="Formularios/data.php">Exercise 1</a></li>
					</ul>
 
					<ul>
						<li class="titulo azul"><a href="">Text</a></li>
						<li><a href="Formularios/text.php">Exercise 2</a></li>
					</ul>
 
					<ul>
						<li class="titulo verde"><a href="">Number</a></li>
						<li><a href="Formularios/number.php">Exercise 3</a></li>
					</ul>
 
					<ul>
						<li class="titulo rojo"><a href="">Date</a></li>
						<li><a href="Formularios/date.php">Exercise 4</a></li>
					</ul>
 
					<ul>
						<li class="titulo naranja"><a href="">Email</a></li>
						<li><a href="Formularios/email.php">Exercise 5</a></li>
					</ul>
				</div>
			
				<li><a href="#acerca">About</a></li>
				<li><a href="#conclu">Conclusions</a></li>
				<li><a href="#contacto">Contact</a></li>
			</ul>
		</nav>
	</header>

	<span class="ir-arriba">Up</span>
	<script type="text/javascript">
			$(document).ready(function(){
		 
			$('.ir-arriba').click(function(){
				$('body, html').animate({
					scrollTop: '0px'
				}, 300);
			});
		 
			$(window).scroll(function(){
				if( $(this).scrollTop() > 0 ){
					$('.ir-arriba').slideDown(300);
				} else {
					$('.ir-arriba').slideUp(300);
				}
			});
		 
		});
	</script>

	<section class="contenido wrapper">
	<a name="acerca"><h3>About</h3></a>
		<p>In this job, I try to implement the validations in a serie the exercises where I go to see 
		its use in the ambit of the forms. A definition will be that is the process of checking that a
		software system meets specifications and that it fulfills its intended purpose. It may also be
		referred to as software quality control. It is normally the responsibility of software testers
		as part of the software development lifecycle. In simple terms, software verification is:
		"Assuming we should build X, does our software achieve its goals without any bugs or gaps?" On
		the other hand, software validation is: "Was X what we should have built? Does X meet the high
		level requirements?". <img id="img" src="image/ap.jpg"></p>
	</section>

	<aside class="contenido wrapper">
	<a name="conclu"><h3>Conclusions</h3></a>
		<p>It is useful in a certain way to avoid mistakes, since otherwise, it leaves open the
		possibility that the page does not look correct in some browsers. It also helps to clear
		up doubts and Avoid errors that can harm the client or the server. It also specifies its
		correct use and instructions that must be followed to avoid generating problems in the
		information that goes both stored and managed. <img id="img" src="image/validation.png"></p>
	</aside>

	<footer class="contenido wrapper">
	<a name="contacto"><h3>Contact</h3></a>
		<p><div>Made by: Jhon Stiven Sotelo Quiñones</div> 
		<div>In November 12, 2017</div>
		<div>Card: 1354962</div>
		<div>Description: <a href="#contacto" id="alternar-respuesta-ej1">more...</a></div>
	 
		<div id="respuesta-ej1" style="display:none">I'm Jhon Stiven Sotelo, I'm 18 and by now I'm studying a Systems Engineer
			in Unicuces. This is my job in Php with the professor Ernesto Campos. So I have studied at the Colombo, also I'm 
			a technician in Electronic. That is all, this is my email "jhonstiven1409@hotmail.com" to any question.
			<p><img id="im" src="image/perfil.jpeg"></p></div>
			<script type="text/javascript">
				//$('.elemento').toggle();

				$(document).ready(function(){ 
			   		$('#alternar-respuesta-ej1').on('click',function(){
			      		$('#respuesta-ej1').toggle();
			   		});
				});	
			</script>
		</p>
		<p> 
			<div id="date"><?php echo date("F j, Y - g:i a"); ?></div> 
		</p>
	</footer>
</body>
</html>