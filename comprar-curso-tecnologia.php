<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CursosTec</title>
</head>
<body style="text-align: center;">
    <?php require_once 'includes/cursos.php' ?>
    <h1>Aprovado</h1>
    <img src="https://upload.wikimedia.org/wikipedia/commons/8/84/Approved_img.png" alt="">
    <p>Curso de tecnologia comprado com sucesso clique no link abaixo para ver o curso &#128071;</p>
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
                echo "<a href='$reg->playlist' style='text-decoration: none;'>Playlist do curso de $reg->nome</a>";
            }
        }
    }
    ?>
</body>
</html>