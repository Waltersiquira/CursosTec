<?php 
$cs = new mysqli('localhost', 'root', '', 'cursos');
if ($cs->connect_error){
    echo 'error';
    die();
}
$cs->query('set character_set_connection = utf8mb4');
$cs->query('set character_set_client = utf8mb4');
$cs->query('set character_set_results = utf8mb4');
?>