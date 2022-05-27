<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<title></title>
</head>
<body>
	<div class="container">
	<h3>Qual dos times abaixo é o maior?</h3>
	<form name="formulario_times" method="POST" action="exercicio_26.05_resp - v2.php">
		<p>
			<label>
				<input class="with-gap" type="radio" name="time" value="Corinthians"/>
				<span>Corinthians</span><br>
				<img src="omaior.jpg" width="5%" alt="Corinthians">
			</label>
		</p>
		<p>
			<label>
				<input class="with-gap" type="radio" name="time" value="São Paulo"/>
				<span>São Paulo</span><br>
				<img src="spfc.png" width="5%" alt="SP">
			</label>
		</p>
		<p>
			<label>
				<input class="with-gap" type="radio" name="time" value="Santos"/>
				<span>Santos</span><br>
				<img src="san.png" width="5%" alt="SFC">
			</label>
		</p>
		<p>
			<label>
				<input class="with-gap" type="radio" name="time" value="Palmeiras"/>
				<span>Palmeiras</span><br>
				<img src="pal.png" width="5%" alt="Corinthians">
			</label>
		</p>
		<input type="submit" name="Enviar">
	</form>
	</div>

</body>
</html>