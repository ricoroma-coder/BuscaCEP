<header id="menuNavbar" class="row w-100 border-bottom m-0 bg-light">
	
	<?php routeIs('/'); ?>

	<div class="col-sm-8 pt-2">
		<a class="font-lobster font2 menu-link text-dark" href="/">Busca<span style="color: red;">CEP</span></a>
	</div>

	<div class="row col-sm-4 text-center">
		
		<div class="col-sm-6 pt-3 border-left selector <?php if (routeIs('/')) echo 'active'; else echo '' ?>">
			<a class="font4 link text-secondary" href="/">Por CEP</a>
		</div>

		<div class="col-sm-6 pt-3 border-left border-right selector <?php if (routeIs('/endereco')) echo 'active'; else echo '' ?>">
			<a class="font4 link text-secondary w-100 h-100" href="/endereco">Por endereço</a>
		</div>

	</div>

</header>