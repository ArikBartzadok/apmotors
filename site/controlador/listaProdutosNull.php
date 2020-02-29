<?php
include_once 'conecta.php';
//CRIA uma consulta para listar as categorias
$sql = "SELECT * FROM produto ORDER BY nome";
//EXECUTA a consulta
$resultado = mysqli_query($conecta, $sql);
// transforma os dados em um array
$linha = mysqli_fetch_assoc($resultado);
// calcula quantos dados retornaram
$totalColuna = mysqli_num_rows($resultado);
$totalLinha = mysqli_num_rows($resultado);
if ($totalLinha<4){
    $totalLinha = 4;
}
?>

<html>
    <head>
        <title>Produtos</title>
    </head>
    <body>

        <?php for ($l = 0; $l < ($totalLinha/4); $l++) { ?>
        <div class="d-flex flex-row mb-3 justify-content-center">
            <?php
            // se o número de resultados for maior que zero, mostra os dados
            if ($totalLinha > 0) {
                // inicia o loop que vai mostrar todos os dados
                for ($i = 1; $i <= 4; $i++) {
                    ?>
                    <div class="d-flex justify-content-center" style="margin: 0 5px 0 5px;">
                        <div class="card" style="width: 16rem;">
                            <img src="<?= $linha['imagem'] ?>" 
                                 class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $linha['nome'] ?></h5>
                                <h5 class="card-title"><b>ID:</b><i style="color: red"><?= $linha['id'] ?></i></h5>
                                <h6 class="card-title">Descrição</h6>
                                <p class="card-text"><?= $linha['espec'] ?></p>
                                <h2 class="card-title"><b>R$ </b><?= $linha['preco'] ?></h2>
                            </div>
                        </div>
                    </div>           
                    <?php
                    $linha = mysqli_fetch_assoc($resultado);
                    if ($linha['id'] == NULL){
                        exit();
                    }
                        
                    // finaliza o loop que vai mostrar os dados
                }
                // fim do if 
            }
            ?>
        </div>
        <?php } ?>
    </body>
</html>
<?php
// tira o resultado da busca da memória
mysqli_free_result($resultado);
mysqli_close($conecta);
?>