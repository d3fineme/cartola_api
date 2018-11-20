<?php include 'header.php'; ?>
<?php include '../carrossel.php'; ?>
<br>
<div class="container">
		  	<div class="row">
		  		<div class="col s8 m8 l8 push-l2">
		  		<!--1 gráfico dentro de um card panel-->
		  			<div class="z-depth-3">
						<?php include 'pont-times-rodada.php'; ?>
					</div>
		  		</div>
		  	</div>
		  	<div class="row">
		  		<div class="col s8 m8 l8 push-l2">
		  		<!--1 gráfico dentro de um card panel-->
		  			<div class="z-depth-3">
		  				<p class="center"><strong>Tabela de Classificação Brasileirão Série A.</strong></p>
					    <?php include 'tabela-classificacao.php'; ?>
					    <br>
					</div>
		  		</div>
		  	</div>
		  	<div class="row">
		  		<div class="col s12 m12 l12">
		  		<!--1 gráfico dentro de um card panel-->
		  			<div class="z-depth-3"  style="height: 400px;">
						<?php include 'hist-clube.php'; ?>
					</div>
		  		</div>
		  	</div>
		  	<div class="row">
		  		<div class="col s12 m12 l12">
		  		<!--1 gráfico dentro de um card panel-->
		  			<div class="z-depth-3"  style="height: 400px;">
						<?php include 'aproveitamento.php'; ?>
					</div>
		  		</div>
		  	</div>
		  	<div class="row">
		  		<div class="col s12 m12 l12">
		  		<!--1 gráfico dentro de um card panel-->
		  			<div class="z-depth-3" style="height: 700px;">
					    <?php include 'probabilidade.php'; ?>
					</div>
		  		</div>

		  	</div>

	  	</div>
<?php include 'footer.php'; ?>