<div class="container pb-6 pt-6 notification is-danger is-light is-rounded center">
	<div class="center">
		<h1 class="title">Productos</h1>
		<h2 class="subtitle">Agregar nuevo producto</h2>


<div class="container pb-6 pt-6">
	<?php
		require_once "./php/main.php";
	?>

	<div class="form-rest mb-6 mt-6"></div>

	<form action="./php/producto_guardar.php" method="POST" class="FormularioAjax" autocomplete="off" enctype="multipart/form-data" >
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Código de tela</label>
				  	<input class="input is-rounded is-danger is-medium" type="text" name="producto_codigo" pattern="[a-zA-Z0-9- ]{1,70}" maxlength="70" required >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Nombre</label>
				  	<input class="input is-rounded is-danger is-medium" type="text" name="producto_nombre" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}" maxlength="70" required >
				</div>
		  	</div>
		</div>
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Precio</label>
				  	<input class="input is-rounded is-danger is-medium" type="text" name="producto_precio" pattern="[0-9.]{1,25}" maxlength="25" required >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Stock</label>
				  	<input class="input is-rounded is-danger is-medium" type="text" name="producto_stock" pattern="[0-9]{1,25}" maxlength="25" required >
				</div>
		  	</div>
		  	<div class="column">
				<label>Categoría</label><br>
		    	<div class="select is-rounded is-medium is-danger">
				  	<select name="producto_categoria" >
				    	<option value="" selected="" >Seleccione una opción</option>
				    	<?php
    						$categorias=conexion();
    						$categorias=$categorias->query("SELECT * FROM categoria");
    						if($categorias->rowCount()>0){
    							$categorias=$categorias->fetchAll();
    							foreach($categorias as $row){
    								echo '<option value="'.$row['categoria_id'].'" >'.$row['categoria_nombre'].'</option>';
				    			}
				   			}
				   			$categorias=null;
				    	?>
				  	</select>
				</div>
		  	</div>
			  <div class="columns pt-5">
			<div class="column">
				<label>Foto o imagen del producto</label><br />
				<div class="file is-small has-name">
				  	<label class="file-label">
				    	<input class="file-input is-danger" type="file" name="producto_foto" accept=".jpg, .png, .jpeg" >
				    	<span class="file-cta is-danger">
				      		<span class="file-label is-danger">Imagen</span>
				    	</span>
				    	<span class="file-name">JPG, JPEG, PNG. (MAX 3MB)</span>
				  	</label>
				</div>
			</div>
		</div>
		</div>

		<p class="has-text-centered pt-6">
			<button type="submit" class="button is-danger animado is-rounded is-large">Guardar</button>
		</p>
	</form>
</div>