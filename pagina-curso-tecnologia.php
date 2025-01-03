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
    $id = $_GET['i'] ?? 1;
    $busca = $cs->query("select * from tecnologia where id = '$id'");
    if (!$busca){
        echo 'error';
    } else {
        if ($busca->num_rows == 0){
            echo 'error';
        } else {
            while ($reg=$busca->fetch_object()){
                echo "<img src='$reg->imagem' width='200'> <h2>$reg->nome</h2> <h4>$reg->preço</h4> total de aulas: $reg->totalaulas <br> carga: $reg->carga <hr> <p>$reg->descrição</p>";
            }
        }
    }
    ?>
    <button style="background-color: blue;"><a href="comprar-curso-tecnologia.php" style="text-decoration: none; color: white;">Comprar</a></button>
</body>
</html>