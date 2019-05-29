<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/header.css">

    <title>Rede Social</title>
</head>


<?php
include_once './fixo/conexao_bd.php';
?>

<body>
    <?php
    require './fixo/topo.php';
    ?>
    <div class="container conteudo">
        <div class="row">
            <div class="card col-md-3" style="width: 18rem;">
                <img src="https://img.elo7.com.br/product/zoom/18134D3/quadro-decorativo-paisagem-onda-1-peca-paisagem.jpg" class="card-img-top foto-perfil" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Fulano de tal</h5>
                    <p class="card-text">Primeira pessoa nessa rede social maravilhosa.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"> 10 Amigos </li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link"> Sair </a>
                </div>
            </div>

            <div class="col-md-9">
                <div class="card card-fazer-postagem">
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="O que você está pensando? (falta de criatividade kaka)" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Postar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <?php for ($i = 1; $i <= 5; ++$i) : ?>

                    <div class="card card-postagem">
                        <div class="card-body">
                            <div class="header-postagem">
                                <img src="https://img.elo7.com.br/product/zoom/18134D3/quadro-decorativo-paisagem-onda-1-peca-paisagem.jpg" class="card-img-top imagem-card" alt="...">

                                <h5 class="card-title titulo-postagem">Fulano de tal</h5>

                            </div>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="card-link"> Curtir</a>
                            <a href="#" class="card-link"> Comentar</a>
                        </div>
                    </div>

                <?php endfor; ?>

            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>