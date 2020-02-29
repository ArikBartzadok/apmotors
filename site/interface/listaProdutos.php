<?php
	include_once("../controlador/conecta.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>APMotors</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body>
    <?php include("../nav.php");?>
	<div class="container-fluid">
    <center><h3 class="display-4">PRODUTOS</h3></center>

    <div class="row">
			<div class="col">
            <br>
                <a href="http://localhost/apmotors/site/home.php" class="btn btn-warning btn-lg btn-block" value="VOLTAR" name="btn_entrar" style='border-radius: 20px;'>VOLTAR</a>
            </div>
            </div>

    <div class="container">
            <center><h3 class="border-top border-bottom bg-light" 
                style="padding: 5px 0 5px 30px; margin-bottom: 20px;">
                novidades</h3></center>
            <?php include('../controlador/listaProdutos.php')?>
    </div>

            <div class="row">
			<div class="col">
                    <br>
                        <a href="http://localhost/apmotors/site/home.php" class="btn btn-warning btn-lg btn-block" value="VOLTAR" name="btn_entrar" style='border-radius: 20px;'>VOLTAR</a>
                    </div>
                    </div>
	</div>
	<?php include("../rodape.php");?>
</body>
</html>