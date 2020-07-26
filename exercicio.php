<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link href="recursos/css/estilo.css" rel="stylesheet">
    <link href="recursos/css/exercicio.css" rel="stylesheet">

</head>

<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">
        <a href=<?= "{$_GET['dir']}/{$_GET['file']}.php" ?>  class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php

                // include($_GET['dir']."/".$_GET['file'].".php");
                
               // include("{$_GET['dir']}/{$_GET['file']}.php");

               include(__DIR__."/{$_GET['dir']}/{$_GET['file']}.php");

            ?>
        </div>
    </main>
    <footer class="rodape">
        <h3>Todos os direitos reservados © <?php echo  date('Y'); ?> </h3>
    </footer>


</body>

</html>