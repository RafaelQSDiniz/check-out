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
				<img class="d-block mx-auto mb-2" src="logo1.png" alt="" width="100" height="100">
				<h2>CHECK-OUT</h2>
				<p class="lead">APP para checagem de e-mail</p>
			</div>

      		<div class="row">
      			<div class="col-md-12">
  				
					<div class="card-body font-weight-bold">
						<form action="processa_envio.php" method="post">
							<div class="form-group">
								<div class="text-center">
									<label  for="para"><h3>E-mail:<h3></label>
								</div>
								<input name="para" type="email" class="form-control" id="para" placeholder="exemplo: ana@hotmail.com " required>
							</div>

							
							<div class="text-center">
							<button type="submit" class="btn btn-primary btn-lg botao">Enviar Código</button>
							</div>
						</form>
					</div>
				</div>
      		</div>

      		
      	</div>

	</body>
</html>