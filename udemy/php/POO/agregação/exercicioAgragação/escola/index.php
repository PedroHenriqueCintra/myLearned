<?php
    require_once "aluno.php";
    require_once "escola.php";

    $aluno = new aluno("pedro", 5475);
    $aluno1 = new aluno("pedro", 3440);
    $escola = new escola("sesi");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= $escola->nomeEscola; ?>
    <?= $escola->listarAlunos($aluno);
        $escola->listarAlunos($aluno1); 
        foreach($escola->alunos as $aluno): ?>
            <li>
                <?=  $aluno->nome ?>  - <?= $aluno->matricula ?> 
            </li>
        <?php endforeach ?>
                    
</body>
</html>