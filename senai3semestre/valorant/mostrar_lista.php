<?php
require_once "conexao.php";

$sql = "SELECT 
	A.NOME AS NOME_AGENTE,
    T.NOME AS NOME_CLASSE,
    A.ARQ_IMAGEM AS IMG_SELF,
    T.ARQ_IMAGEM AS IMG_CLASSE
    FROM
    agente AS A
    inner JOIN tipo as T
    ON T.ID = A.TIPO_ID
    WHERE
    A.NOME LIKE :A_NOME OR
    T.NOME LIKE :T_NOME
    ";

if (isset($_GET["proucurar"])) {
    $busca = $_GET["proucurar"];
    $a_nome = "%" . $_GET["proucurar"] . "%";
    $t_nome = "%" . $_GET["proucurar"] . "%";
} else {
    $a_nome = "%";
    $t_nome = "%";
}

$conexao = GetConexao();
$comando = $conexao->prepare($sql);
$comando->bindParam(":A_NOME", $a_nome);
$comando->bindParam(":T_NOME", $t_nome);
$comando->execute();
$listar_agentes = $comando->fetchAll();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valorant</title>
    <link rel="stylesheet" href="mostrar_lista.css">
</head>

<body>
    <div class="container">
        <form method="GET" class="search-form">
            <h1 id="titulo">Valorant</h1>
            <input type="text" name="proucurar" placeholder="Pesquise por nome ou tipo" value="">
            <button type="submit">Buscar</button>
        </form>

        <div class="agentes-container">
            <?php foreach ($listar_agentes as $agentes) { ?>
                <div class="agente-card">
                    <div class="agente-info">
                        <h3><?= $agentes["NOME_AGENTE"] ?></h3>
                        <p class="classe"><?= $agentes["NOME_CLASSE"] ?></p>
                    </div>

                    <div class="agente-imagens">
                        <div class="imagem-agente">
                            <img src="imagens/<?= $agentes["IMG_SELF"] ?>" alt="foto agente">
                        </div>
                        <div class="imagem-classe">
                            <img src="classe/<?= $agentes["IMG_CLASSE"] ?>" alt="foto classe">
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>