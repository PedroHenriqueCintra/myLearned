<?php
    require_once "livro.php";
    $livro = new Livro("Capitaes de areia", "Machado De Assis", "MachadodeAssis@gmail.com");

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> <?= $livro->apresentarLivro() ?></p>
    <?php
        $novoEmail = "fulaninho@gmail.com";
        $livro->setEmailAutor($novoEmail);
    ?>
    <p><?= $livro->apresentarLivro() ?></p>
    
</body>
</html>