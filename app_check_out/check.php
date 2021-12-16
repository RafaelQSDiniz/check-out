<?php 
	session_start();
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
						<form action="controlador.php" method="post">
							<div class="form-group">
								<div class="text-center">
									<label  for="codigo"><h3>Digite o código enviado:<h3></label>
								</div>
								<input  name="codigo" type="number" class="form-control" id="para" placeholder="" required>
							</div>

							
							<div class="text-center">
							<button type="submit" class="btn btn-primary btn-lg botao">Enviar</button>
							</div>
						</form>
					</div>
				</div>
      		</div>

      		<?php if ( $_SESSION['estado'] == 3) { ?>

				<div class="enviado pt-2 text-white d-flex justify-content-center">
					<h3> CÓDIGO INVALIDO!</h3> 
				</div>	
	      		
			<?php }  ?>
      		
      	</div>

	</body>
</html>