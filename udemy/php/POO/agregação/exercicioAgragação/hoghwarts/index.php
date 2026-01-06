<?php
    require_once "alunos.php";
    require_once "torneio.php";
    require_once "casademagia.php";

    $aluno1 = new aluno("harry", "voo");
    $aluno2 = new aluno("hermione" , "Feitiços");
    $aluno3 = new aluno("rony", "estrategia");
    $aluno4 = new aluno("draco", "Poçoes");
    $aluno5 = new aluno("pancy", "feitiços");
    $aluno6 = new aluno("crabe", "defesa");
    $aluno7 = new aluno("cedrico", "feitiçios");
    $aluno8 = new aluno("suzy", "defesa");
    $aluno9 = new aluno("luna", "feitiçios");
    $aluno10 = new aluno("cho", "voo");
    $casa1 = new casa("Grifinória");
    $casa2 = new casa("Sonserina");
    $casa3 = new casa("Lufa-Lufa");
    $casa4 = new casa("Corvinal");
    $casa1->colocarAlunosCasa($aluno1);
    $casa1->colocarAlunosCasa($aluno2);
    $casa1->colocarAlunosCasa($aluno3);
    $casa2->colocarAlunosCasa($aluno4);
    $casa2->colocarAlunosCasa($aluno5);
    $casa2->colocarAlunosCasa($aluno6);
    $casa3->colocarAlunosCasa($aluno7);
    $casa3->colocarAlunosCasa($aluno8);
    $casa4->colocarAlunosCasa($aluno9);
    $casa2->colocarAlunosCasa($aluno10);
    $torneio1 = new Torneio("Quadribol");
    $torneio1->adicionarCasas($casa1);
    $torneio1->adicionarCasas($casa2);
    $torneio1->adicionarCasas($casa3);
    $torneio1->adicionarCasas($casa4);
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>Torneio: <?= $torneio1->nomeTorneio ?></H1>
    <p><?=$torneio1->listarTorneios()?></p>

</body>
</html>