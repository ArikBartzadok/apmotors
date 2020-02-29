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
			<div class="col">
            <center><h3 class="display-4">CADASTRAR AGENDAMENTO</h3></center>
				<form action="../controlador/cadastraAgendamentoAdm.php" method="POST">
  					<div class="form-group">
    					<label>Nome</label>
    					<input type="text" name="txt_nome" class="form-control" placeholder="Insira seu nome">
  					</div>

                      <div class="form-group">
    					<label>Email</label>
    					<input type="text" name="txt_email" class="form-control" placeholder="Insira seu email">
  					</div>

                      <div class="form-group">
    					<label>Telefone</label>
    					<input type="text" name="txt_tel" class="form-control" placeholder="() 00000-0000">
  					</div>

                      <div class="form-group">
    					<label>CPF</label>
    					<input type="text" name="txt_cpf" class="form-control" placeholder="xxx-xxx-xxx-yy">
  					</div>
  					<div class="form-group">
							<label>Escolha o tipo de agendamento:</label>
							<select class="form-control" name="txt_tipo">
								<option value="vistoria">Vistoria</option>
								<option value="manutenção">Manutenção</option>
							</select>
						</div>

                        <div class="alert alert-warning" role="alert">
                            Agendamento sem compromisso, valor do serviço divulgado somente após a análise.
                        </div>
  
  					<button type="submit" class="btn btn-success">Enviar</button>
                    <a href="http://localhost/apmotors/site/interface/adm.php" class="btn btn-danger" value="VOLTAR" name="btn_entrar" style='border-radius: 20px;'>VOLTAR</a>
				</form>
			</div>
		</div>
	</div>
	<?php include("../rodape.php");?>
</body>
</html>