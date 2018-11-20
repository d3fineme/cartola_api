<?php include 'header.php'; ?>
<?php include '../carrossel.php'; ?>
<br>
<div class="container">
		  	<div class="row">
		  		<div class="col s12 m12 l12">
		  		<!--1 gráfico dentro de um card panel-->
		  			<div class="z-depth-3">
						<?php include 'posicoes-destaques.php'; ?>
					</div>
		  		</div>
		  	</div>
		  	<div class="row">
		  		<div class="col s4 m4 l4">
		  			<div class="row">
					    <div class="col s12">
					      <div class="row">
					        <div class="input-field col s12">
					          <i class="material-icons prefix">search</i>
					          <input type="text" id="autocomplete-input" class="autocomplete">
					          <label for="autocomplete-input">Autocomplete</label>
					        </div>
					      </div>
					    </div>
					  </div>
		  		</div>
		  	</div>
		  	<div class="row">
		  		<div class="col s12 m12 l12">
		  		<!--1 gráfico dentro de um card panel-->
		  			<div class="z-depth-3">
					    <?php include 'hist-jogador.php'; ?>
					    <br>
					</div>
		  		</div>
		  	</div>
		  	
		  	<div class="row">
		  		<div class="col s12 m12 l12">
		  		<!--1 gráfico dentro de um card panel-->
		  			<div class="z-depth-3"  style="height: 400px;">
						<?php include 'maiores-pontuadores-posicao.php'; ?>
					</div>
		  		</div>
		  	</div>
		  	<div class="row">
		  		<div class="col s12 m12 l12">
		  		<!--1 gráfico dentro de um card panel-->
		  			<div class="z-depth-3">
						<?php include 'hist-destaques.php'; ?>
					</div>
		  		</div>
		  	</div>
	  	</div>
<?php include 'footer.php'; ?>