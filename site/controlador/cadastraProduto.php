<?php

include_once 'conecta.php';
require 'wideimage/WideImage.php'; //Inclui classe WideImage à página

$nome = filter_input(INPUT_POST, 'txt_produto');
$esp = filter_input(INPUT_POST, 'txt_esp');
$preco = filter_input(INPUT_POST, 'txt_preco');

if(isset($_FILES['txt_imagem']))
 {
    $ext = strtolower(substr($_FILES['txt_imagem']['name'],-4)); //Pegando extensão do arquivo
    $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
    $dir = '../imagens/produtos/'; //Diretório para uploads
 
    move_uploaded_file($_FILES['txt_imagem']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo

    $up = 'http://localhost/apmotors/site/imagens/produtos/';
    $imagem = $up.$new_name;
}

//CRIA uma consulta para cadastra um novo produto
//$sql = "INSERT INTO produto(idProduto, nomeProduto, descProduto, caminhoImagemPrincipal, qtdEstoque, precoProduto, tipo, categoria) VALUES (0, '$nome', '$descricao', '$caminhocompleto', $estoque, $preco, '$tipo', '$categoria')";
$sql = "INSERT INTO produto(id, nome, espec, preco, imagem) "
        . "VALUES (0, '$nome', '$esp', '$preco', '$imagem')";
//EXECUTA a consulta
$resultado = mysqli_query($conecta, $sql);

if (mysqli_affected_rows($conecta) != 0) {
    /*
    echo "<META HTTP-EQUIV=REFRESH CONTENT = "
    . "'0;URL=http://localhost/apmotors/site/interface/formCadastraProduto.php'>"
    . "<script type='text/javascript'>"
    . "alert('Produto cadastrado com Sucesso! $resultado');</script>";*/
} else {
    echo "ERROR: ";
    //echo "ERRO:   --> $resultado e linha > $linha";
}

mysqli_close($conecta);