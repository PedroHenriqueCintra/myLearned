<?php
        require_once "funcionario.php";
        require_once "departamento.php";

        $f = new funcionario("Pedro", "Developer");
        $f1 = new funcionario("Joao", "Gerente");
        $f2 = new funcionario("Eduardo", "Estagiario");

        $d = new departamento("TI");
        $d1 = new departamento("analise");

        $d->inserirFuncionarios($f);
        $d1->inserirFuncionarios($f1);
        $d->inserirFuncionarios($f2)

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de funcionarios do departamentos <?= $d->nomeDepartamento ?></h1>
    <?= $d->listarFuncionarios() ?>
    <h1>Lista de funcionarios do departamentos <?= $d1->nomeDepartamento ?></h1>
    
</body>
</html>

