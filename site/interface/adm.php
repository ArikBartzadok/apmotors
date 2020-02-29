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
	<?php include("../cabecalho.php");?>

	<div class="container-fluid">

        <div class="card-deck">
        <div class="card" style="width: 18rem;">
        <img src="../imagens/1_adm.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">ADICIONAR ADM</h5>
                <p class="card-text">ADICIONAR UM ADMINISTRADOR AO SISTEMA</p>
                <form action="../controlador/tipo_servico.php" method="POST">
                    <a href="http://localhost/apmotors/site/interface/formCadastraAdm.php" class="btn btn-danger">ADICIONAR</a>
                </form>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
        <img src="../imagens/2_agendamento.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">ADICIONAR AGENDAMENTO</h5>
                <p class="card-text">ADICIONAR UM AGENDAMENTO AO SISTEMA</p>
                <form action="../controlador/tipo_servico.php" method="POST">
                    <a href="http://localhost/apmotors/site/interface/formCadastraAgendamentoAdm.php" class="btn btn-warning">ADICIONAR</a>
                </form>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
        <img src="../imagens/2_agendamento.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">VISUALIZAR AGENDAMENTOS</h5>
                <p class="card-text">VISUALIZAR AGENDAMENTOS NO SISTEMA</p>
                <form action="../controlador/tipo_servico.php" method="POST">
                    <a href="http://localhost/apmotors/site/interface/listaAgendamentosAdm.php" class="btn btn-success">VISUALIZAR</a>
                </form>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
        <img src="../imagens/3_estoque.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">ADICIONAR PRODUTOS</h5>
                <p class="card-text">AIDICIOANR PRODUTOS NO SISTEMA</p>
                <form action="../controlador/tipo_servico.php" method="POST">
                    <a href="http://localhost/apmotors/site/interface/formCadastraProduto.php" class="btn btn-warning">ADICIONAR</a>
                </form>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
        <img src="../imagens/4_estoque.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">VISUALIZAR PRODUTOS</h5>
                <p class="card-text">VISUALIZAR PRODUTOS NO SISTEMA</p>
                <form action="../controlador/tipo_servico.php" method="POST">
                    <a href="http://localhost/apmotors/site/interface/listaProdutosAdm.php" class="btn btn-success">VISUALIZAR</a>
                </form>
            </div>
        </div>
        </div>
	</div>
	<?php include("../rodape.php");?>
</body>
</html>