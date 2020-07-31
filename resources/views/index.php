<!DOCTYPE html>
<html>
<head>
	<?php require __DIR__.'/layout/links.php'; ?>
	<title>BuscaCEP - Home Page</title>
</head>
<body>

	<section id="content">
		<div class="bg bg-dark"></div>

		<?php require __DIR__.'/components/spining-modal.php'; ?>

		<div class="row m-0 p-0 h-auto">
			<?php require __DIR__.'/components/navbar.php'; ?>
		</div>

		<!-- Buscar por CEP -->
		<div id="cep" class="row m-0 p-0 h-auto mb-5">
			<div class="container mt-5 bg-light border p-3 rounded">
				<div class="col-sm-12 m-0 p-0 text-center">
					<p class="font2 w-100 font-staatliches">Busque um endereço através de um CEP</p>
				</div>

				<div class="col-sm-12 m-0 p-0">
					<form id="ajax-form" class="form-group p-2 row" method="POST">
						<div class="row col-sm-4 position-relative">
							<div class="col-sm-12 m-0 p-0">
								<label for="cep-input">CEP</label>
							</div>
							<div class="col-sm-12 m-0 p-0">
								<input class="form-control" type="text" name="cep" id="cep-input">
							</div>
							<div class="col-sm-12 m-0 p-0">
								<div id="searchContent" class="bg-light border-left border-right border-bottom position-absolute col100"></div>
							</div>
						</div>
						<div class="d-flex flex-column-reverse ml-1">
							<button class="btn btn-primary mt-auto">Buscar</button>
						</div>
					</form>
				</div>

				<div class="row col-sm-12 m-0 p-0 h-auto border">
				</div>

				<div class="col-sm-12 m-0 p-0 position-relative py-3">
					<div id="collapse-button" class="cursor-pointer position-absolute rounded-circle close" target="collapse-endereco" style="height: 30px;width: 30px;right:0;top:0;"></div>

					<div class="col100 h-auto">
						<p id="error-message" class="text-danger font3">
						</p>
					</div>

					<div class="form-group p-2 row col100 close collapse-endereco" collapse="collapse-endereco">
						<div class="col-sm-12 m-0 p-0 pl-3">
							<label>Logradouro</label>
							<input class="form-control result" name="logradouro" type="text" disabled="true" value="">
						</div>

						<div class="row col-sm-12 m-0 p-0">
							<div class="col-sm-7 pr-0">
								<label>Bairro</label>
								<input class="form-control result" name="bairro" type="text" disabled="true" value="">
							</div>
							<div class="col-sm-5 pr-0">
								<label>Localidade</label>
								<input class="form-control result" name="localidade" type="text" disabled="true" value="">
							</div>
						</div>

						<div class="row col-sm-12 m-0 p-0">
							<div class="col-sm-2 pr-0">
								<label>UF</label>
								<input class="form-control result" name="uf" type="text" disabled="true" value="">
							</div>
							<div class="col-sm-3 pr-0">
								<label>Unidade</label>
								<input class="form-control result" name="unidade"  type="text" disabled="true" value="">
							</div>
							<div class="col-sm-3 pr-0">
								<label>GIA</label>
								<input class="form-control result" name="gia"  type="text" disabled="true" value="">
							</div>
							<div class="col-sm-4 pr-0">
								<label>IBGE</label>
								<input class="form-control result" name="ibge"  type="text" disabled="true" value="">
							</div>
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

