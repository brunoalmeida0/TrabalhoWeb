	<?php
		include_once './fixo/topo.php';
	?>

		<title>Página Inicial</title>

	</head>

	<?php
		include_once './fixo/conexao_bd.php';
	?>

	<body>
		<?php
			include_once './fixo/navbar.php';
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


		<?php
			include_once './fixo/rodape.php';
		?>