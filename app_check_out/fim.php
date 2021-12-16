<?php
	session_start();
	$_SESSION['estado'] = 1;
?>
<html>
	<head>
		<meta charset="utf-8" />
    	<title>App Check-out</title>

    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="estilo.css"/>
    	

	</head>

	<body>

		<div class="container">  

			<div class="py-3 text-center">
				<img class="check d-block mx-auto mb-2" src="logo1.png" alt="" width="300" height="300">
				<h3>CHECK-OUT concluído com sucesso!</h3>
				
			</div>

      		<div class="row">
      			<div class="col-md-12">
  				
					<div class="card-body font-weight-bold">
						<form action="index.php" >
							
							<div class="text-center">
							<button type="submit" class="btn btn-primary btn-lg botao">Voltar ao começo</button>
							</div>
						</form>
					</div>
				</div>
      		</div>

      		
      	</div>

	</body>
</html>