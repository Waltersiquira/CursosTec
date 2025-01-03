<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CursosTec</title>
</head>
<body>
    <button><a href="form-curso-tecnologia.php" style="text-decoration: none;">Adcionar curso de tecnologia</a></button>
    <?php require_once 'includes/cursos.php' ?>
    <h1>CursosTec</h1>
    <hr>
    <table>
        <?php 
        $busca = $cs->query('select * from tecnologia');
        if (!$busca){
            echo 'error';
        } else {
            if ($busca->num_rows == 0){
                echo 'error';
            } else {
                while ($reg=$busca->fetch_object()){
                    echo "<tr><td><a href='pagina-curso-tecnologia.php?i=$reg->id'><img src='$reg->imagem' width='150'></a></td><td>$reg->nome</td></tr>";
                }
            }
        }
        ?>
    </table>
</body>
</html>