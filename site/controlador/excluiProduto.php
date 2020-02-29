<?php

include_once 'conecta.php';

//Recebe os valores digitados
$id = filter_input(INPUT_POST, 'txt_id');

//CRIA uma consulta para EXCLUSÃO de um produto
$sql = "DELETE FROM produto WHERE id = '$id'";
//EXECUTA a consulta
$resultado = mysqli_query($conecta, $sql);

if (mysqli_affected_rows($conecta) != 0) {
    echo "<META HTTP-EQUIV=REFRESH CONTENT = "
    . "'0;URL=http://localhost/apmotors/site/interface/listaProdutosAdm.php'>"
    . "<script type='text/javascript'>"
    . "alert('Produto excluído com Sucesso!');</script>";
} else {
    echo "ERROR: ";
    //echo "ERRO:   --> $resultado e linha > $linha";
}

mysqli_close($conecta);