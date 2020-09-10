<?php
	if (!defined('BASEPATH')) {
		exit('Acesso direto ao arquivo não autorizado, log gerado!');
	}
?>
<script type="text/javascript" language="JavaScript"
		src="http://127.0.0.1/exemplos-livro-ci/ibge/assets/js/inc/js_tela_inc.js"></script>
<link rel="stylesheet" href="http://127.0.0.1/exemplos-livro-ci/ibge/assets/css/bootstrap.css">

<div class="row" id="total">
	<!--	<h1>Tela Inicial</h1>-->
	<div class="col-md-3"></div>

	<div class="col-md-6" id="corpo">
		<h2 class="text-success">Estados da região <?= $regiao ?></h2>
		<table class="table table-bordered table-striped text-center">
			<thead class="text-center">
			<tr>
				<th>ORD</th>
				<th>ESTADO</th>
				<th>UF</th>
			</tr>
			</thead>
			<tbody>
			<?php
				$i = 1;
				foreach ($estRegiao->result() as $linha) {
					echo "<tr>
							<td>$i</td>
							<td>$linha->NM_UF</td>
							<td>$linha->SIGLA_UF</td>
						</tr>";
					$i++;
				}
			?>
			</tbody>
		</table>
		<?php

			//			if (isset($muniEstado)) {
			//				echo '<pre>';
			//				print_r($muniEstado);
			//				echo '</pre>';
			//			}

		?>

	</div>
	<!--	div corpo-->

</div>
<!--div total-->

