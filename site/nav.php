<nav class="navbar navbar-expand-lg">
	  	<a class="navbar-brand" href="http://localhost/apmotors/index.php">
	  		<img src="http://localhost/apmotors/site/imagens/logo.png" width="40" height="40" class="img-fluid" alt="">
	  		APMotors
	  	</a>
	  	<div class="collapse navbar-collapse">
	    	<ul class="navbar-nav mr-auto">
	      		<li class="nav-item active">
	        		<a class="nav-link" href="https://testediogo.herokuapp.com/index.php">Inicio</a>
	      		</li>

	     		<li class="nav-item">
	        		<a class="nav-link" href="https://testediogo.herokuapp.com/site/interface/historia.php">Sobre Nós</a>
	     		</li>

	     		<li class="nav-item">
	        		<a class="nav-link" href="https://testediogo.herokuapp.com/site/interface/contato.php">Contato</a>
	     		</li>

	     		<li class="nav-item">
	        		<a class="nav-link" href="https://testediogo.herokuapp.com/site/interface/mapa.php">Onde nos achar</a>
	     		</li>
            </ul>

			  <?php 
			  session_start();

				if(($_SESSION['logado'] == 0) || ($_SESSION['logado'] == NULL)){
					echo '<a href="https://testediogo.herokuapp.com/site/interface/form_login.php"><button type="button" class="btn btn-outline-light" name="log">Login</button></a>';
              		echo '<a href="https://testediogo.herokuapp.com/site/interface/form_adm.php"><button type="button" class="btn btn-outline-light" name="adm">ADM</button></a>';
				}
				else {
					echo '<a class="nav-link active" href="https://testediogo.herokuapp.com/site/controlador/sair.php"><button type="button" class="btn btn-danger" name="ext">Sair</button></a>';
				}
			?>
	  	</div>
</nav>
