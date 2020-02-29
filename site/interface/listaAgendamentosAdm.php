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
    <center><h3 class="display-4">AGENDAMENTOS</h3></center>
                <div class="row">
				<table class="table">
				  	<thead>
				    	<tr>
				      		<th scope="col">ID</th>
				      		<th scope="col">Nome</th>
				      		<th scope="col">Email</th>
				      		<th scope="col">Telefone</th>
				      		<th scope="col">CPF</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Valor</th>
                            <th scope="col" style="color: red;">Excluir</th>
                            
				    	</tr>
				  	</thead>
				  	<tbody>
				  		<?php
						$sql = "SELECT * FROM agendamentos";
            			$query = mysqli_query($conecta, $sql);
            			$rows = mysqli_num_rows($query);
            			$assoc = mysqli_fetch_assoc($query);
						do {
						?>
				    	<tr>
				      		<th scope="row"><?php echo $assoc['id'];?></th>
				      		<td><?php echo $assoc['nome'];?></td>
				      		<td><?php echo $assoc['email'];?></td>
                            <td><?php echo $assoc['telefone'];?></td>
                            <td><?php echo $assoc['cpf'];?></td>
                            <td><?php echo $assoc['tipo'];?></td>
				      		<td><?php echo $assoc['valor'];?></td>
				      		<td><a href="http://localhost/apmotors/site/interface/formExcluiAgendamento.php">Excluir</a></td>
				    	</tr>
				    	<?php } while($assoc = mysqli_fetch_assoc($query))?>
				  </tbody>
				</table>
			</div>
            </div>
            <div class="row">
			<div class="col">
                    <br>
					<a href="http://localhost/apmotors/site/interface/formCadastraAgendamentoAdm.php">
						<button type="button" class="btn btn-outline-danger btn-lg btn-block">Adicionar Agendamento</button>
                        <a href="http://localhost/apmotors/site/interface/adm.php" class="btn btn-warning btn-lg btn-block" value="VOLTAR" name="btn_entrar" style='border-radius: 20px;'>VOLTAR</a>
					</a>
                    </div>
                    </div>
	</div>
	<?php include("../rodape.php");?>
</body>
</html>