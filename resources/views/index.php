<!DOCTYPE html>
<html>
<head>
	<?php require __DIR__.'/layout/links.php'; ?>
	<title>BuscaCEP - Home Page</title>
</head>
<body>

	<section id="content">
		<div class="bg bg-dark"></div>

		<div class="row m-0 p-0 h-auto">
			<?php require __DIR__.'/components/navbar.php'; ?>
		</div>

		<!-- Buscar por CEP -->
		<div id="cep" class="row m-0 p-0 h-auto in-data mb-5">
			<div class="container mt-5 bg-light border p-3 rounded">
				<div class="col-sm-12 m-0 p-0 text-center">
					<p class="font2 w-100 font-staatliches">Busque um endereço através de um CEP</p>
				</div>

				<div class="col-sm-12 m-0 p-0">
					<form class="form-group p-2 row" action="" method="POST">
						<div class="col-sm-4">
							<label for="cep-input">CEP</label>
							<input class="form-control" type="text" name="cep" id="cep-input">
						</div>
						<div class="d-flex flex-column-reverse">
							<button class="btn btn-primary mt-auto">Buscar</button>
						</div>
					</form>
				</div>

				<div class="row col-sm-12 m-0 p-0 h-auto border">
				</div>

				<div class="col-sm-12 m-0 p-0 position-relative py-3">
					<div class="collapse-button cursor-pointer position-absolute rounded-circle close" target="collapse-endereco" style="height: 30px;width: 30px;right:0;top:0;"></div>

					<div class="form-group p-2 row col100 close" collapse="collapse-endereco">
						<div class="col-sm-12 m-0 p-0 pl-3">
							<label>Logradouro</label>
							<input class="form-control" type="text" disabled="true" value="">
						</div>

						<div class="row col-sm-12 m-0 p-0">
							<div class="col-sm-4 pr-0">
								<label>Número</label>
								<input class="form-control" type="text" disabled="true" value="">
							</div>
							<div class="col-sm-8 pr-0">
								<label>Bairro</label>
								<input class="form-control" type="text" disabled="true" value="">
							</div>
						</div>

						<div class="row col-sm-12 m-0 p-0">
							<div class="col-sm-4 pr-0">
								<label>Cidade</label>
								<input class="form-control" type="text" disabled="true" value="">
							</div>
							<div class="col-sm-8 pr-0">
								<label>UF</label>
								<input class="form-control" type="text" disabled="true" value="">
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>

		<!-- Buscar por endereço -->
		<div id="endereco" class="row m-0 p-0 h-auto out-data mb-5">
			<div class="container mt-5 bg-light border p-3 rounded">
				<div class="col-sm-12 m-0 p-0 text-center">
					<p class="font2 w-100 font-staatliches">Busque um endereço através de um CEP</p>
				</div>

				<div class="col-sm-12 m-0 p-0">
					<form class="form-group p-2 row" action="" method="POST">

						<div class="col-sm-12 m-0 p-0 pl-3">
							<label for="logradouro-input">Logradouro</label>
							<input class="form-control" type="text" id="logradouro-input" value="">
						</div>

						<div class="row col-sm-12 m-0 p-0">
							<div class="col-sm-4 pr-0">
								<label for="numero-input">Número</label>
								<input class="form-control" type="text" id="numero-input" value="">
							</div>
							<div class="col-sm-8 pr-0">
								<label for="bairro-input">Bairro</label>
								<input class="form-control" type="text" id="bairro-input" value="">
							</div>
						</div>

						<div class="row col-sm-12 m-0 p-0">
							<div class="col-sm-4 pr-0">
								<label for="cidade-input">Cidade</label>
								<input class="form-control" type="text" id="cidade-input" value="">
							</div>
							<div class="col-sm-8 pr-0">
								<label for="uf-input">UF</label>
								<input class="form-control" type="text" id="uf-input" value="">
							</div>
						</div>

						<div class="row col-sm-12 m-0 p-0">
							<div class="mt-2 ml-auto">
								<button class="btn btn-primary">Buscar</button>
							</div>
						</div>

					</form>
				</div>

				<div class="row col-sm-12 m-0 p-0 h-auto border">
				</div>

				<div class="col-sm-12 m-0 p-0 position-relative py-3">
					<div class="collapse-button cursor-pointer position-absolute rounded-circle close" target="collapse-endereco" style="height: 30px;width: 30px;right:0;top:0;"></div>

					<div class="form-group p-2 row col100 close" collapse="collapse-endereco">
						<div class="col-sm-4">
							<label>CEP</label>
							<input class="form-control" type="text" disabled="true" value="">
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="row m-0 p-0 h-auto mt-auto">
			<?php require __DIR__.'/components/footer.php';  ?>
		</div>
	</section>


	<?php require __DIR__.'/layout/scripts.php'; ?>
</body>
</html>

