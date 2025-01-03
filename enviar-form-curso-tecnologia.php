<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CursosTec</title>
</head>
<body>
    <?php require_once 'includes/cursos.php' ?>
    <?php 
    $n = $_GET['nome'];
    $d = $_GET['descricao'];
    $c = $_GET['carga'];
    $t = $_GET['totaulas'];
    $pr = $_GET['preco'];
    $i = $_GET['imagem'];
    $pl = $_GET['playlist'];
    if ($cs->query("INSERT INTO `tecnologia` (`id`, `nome`, `descrição`, `carga`, `totalaulas`, `preço`, `imagem`, `playlist`) VALUES (DEFAULT, '$n', '$d', '$c', '$t', '$pr', '$i', '$pl')") == true){
        echo "Curso de tecnologia adcionado com sucesso";
    } else {
        echo 'error';
    }
    ?>
</body>
</html>