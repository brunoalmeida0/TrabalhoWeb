<?php
session_start();
if ($_SESSION["logado"] != "true") {
    header("Location: index.php");
}
if ($_GET != null) {
    include_once "./conexao_bd.php";
    $idUsuario = $_GET["idUsuario"];
    $idUsuarioLogado = $_SESSION["id"];

    $sqlDeletaSolicitacao = " DELETE FROM solicitacao_amizade WHERE solicitacao_amizade.id_usuario_solicitado = $idUsuario and solicitacao_amizade.id_usuario_solicitante = $idUsuarioLogado ";
    $res = $conexao->query($sqlDeletaSolicitacao);

    if($res){
        echo "
        <script>
            alert('A solicitação foi excluida com sucesso!');          
        </script>
        ";
        header("Location: ../solicitacoes_amizade.php");
    }


   
}
