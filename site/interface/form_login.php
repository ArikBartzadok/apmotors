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
    <div class="row">
                <div class="col"></div>
                <div class="col">
                    <center><h3 class="display-4">Acesso ao Site</h3></center>
                    <form name="logar" action="../controlador/login.php" method="POST" class="form">
                        <div class="form-group">
                            <label>Email </label>
                            <input class="form-control" type="text" name="txt_email" value="" size="30" required="" />
                        </div>
                        <div class="form-group">
                            <label>Senha </label>
                            <input class="form-control" type="text" name="txt_senha" value="" size="30" required="" />
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary btn-lg btn-block" type="submit" value="ENTRAR" name="btn_entrar" style='background: #153959;'/>
                        </div>
                        <div class="alert alert-primary" role="alert">
                            Não tem uma conta? <a href="formCadastraUsuario.php" class="alert-link">CADASTRE-SE</a>. É simples e rápido!
                        </div>
                    </form>
                </div>
                <div class="col"></div>
            </div>
	</div>
	<?php include("../rodape.php");?>
</body>
</html>
