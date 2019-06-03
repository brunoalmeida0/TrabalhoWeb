<?php
session_start();

if ($_SESSION["logado"] != "true") {
    header("location: index.php");
} else {

    if ($_POST != NULL) {

        include_once "./conexao_bd.php";
        $id = $_SESSION["id"];
        $postagem = $_POST['postagem'];
        $datahora = date('Y-m-d H:i:s');
        $sqlRealizaPost = " INSERT INTO postagem (id_usuario, conteudo, data) VALUES ('$id', '$postagem', now()) ";
        $res = $conexao->query($sqlRealizaPost);

        if ($res) {
            header("location: ../feed.php");
        }
    }
}
