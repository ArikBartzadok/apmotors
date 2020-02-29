<?php
    session_start();
    
    $_SESSION['logado'] = 0;

    session_destroy();
    
	echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=http://localhost/apmotors/index.php'>"
    . "<script type='text/javascript'>alert('Usuário deslogado');</script>";

?>