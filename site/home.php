
<!DOCTYPE html>
<html>
<head>
	<title>APMotors</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body>
    <?php include("nav.php");?>
	<?php include("cabecalho.php");?>
	<div class="container-fluid">
        <div class="card-deck">
        <div class="card" style="width: 18rem;">
        <img src="imagens/5_manutencao.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Agendamento</h5>
                <p class="card-text">Realize um agendamento para manutenção de sua motocicleta</p>
                <form action="../controlador/tipo_servico.php" method="POST">
                    <a href="https://testediogo.herokuapp.com/site/interface/formCadastraAgendamento.php" class="btn btn-warning" value="">Realizar Agendamento</a>
                </form>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
        <img src="imagens/7_shop.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Loja</h5>
                <p class="card-text">Visite nossa loja e adquira peças perfeitas e unicas para sua motocicleta</p>
                <form action="../controlador/tipo_servico.php" method="POST">
                    <a href="https://testediogo.herokuapp.com/site/interface/listaProdutos.php" class="btn btn-success" value="">Visitar loja</a>
                </form>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
        <img src="imagens/6_vistoria.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">vistoria</h5>
                <p class="card-text">Realize um agendamento para vistoria de sua motocicleta</p>
                <form action="../controlador/tipo_servico.php" method="POST">
                    <a href="https://testediogo.herokuapp.com/site/interface/formCadastraAgendamento.php" class="btn btn-warning" value="">Realizar vistoria</a>
                </form>
            </div>
        </div>
        </div>
	</div>
	<?php include("rodape.php");?>
</body>
</html>
