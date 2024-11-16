<div class="container pb-6 pt-6 notification is-danger is-light is-rounded center">
	<div class="center">
		<h1 class="title">Categorías</h1>
		<h2 class="subtitle">Agregar nueva categoría</h2>

<div class="container pb-6 pt-4">

	<div class="form-rest mb-6 mt-6"></div>

	<form action="./php/categoria_guardar.php" method="POST" class="FormularioAjax" autocomplete="off" >
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Categoría de producto</label>
				  	<input class="input is-rounded is-danger is-medium" type="text" name="categoria_nombre" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{4,50}" maxlength="50" required >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Ubicación</label>
				  	<input class="input is-rounded is-danger is-medium" type="text" name="categoria_ubicacion" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{5,150}" maxlength="150" >
				</div>
		  	</div>
		</div>
		<p class="has-text-centered">
			<button type="submit" class="button is-danger animado is-rounded is-medium">Guardar</button>
		</p>
	</form>
</div>