<div class="container pb-6 pt-6 notification is-danger is-light is-rounded center">
	<div class="center">
		<h1 class="title">Usuarios</h1>
		<h2 class="subtitle">Agregar nuevo usuario</h2>

<div class="container pb-6 pt-6">
	<div class="form-rest mb-6 mt-6"></div>

	<form action="./php/usuario_guardar.php" method="POST" class="FormularioAjax" autocomplete="off">
		<div class="columns is-multiline is-centered">
			<div class="column is-half">
				<div class="field">
					<label class="label">Nombres</label>
					<div class="control has-icons-left">
						<input class="input is-rounded is-danger is-medium" 
						       type="text" 
						       name="usuario_nombre" 
						       pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" 
						       maxlength="40" 
						       required>
						<span class="icon is-small is-left">
							<i class="fas fa-user"></i>
						</span>
					</div>
				</div>
			</div>

			<div class="column is-half">
				<div class="field">
					<label class="label">Apellidos</label>
					<div class="control has-icons-left">
						<input class="input is-rounded is-danger is-medium" 
						       type="text" 
						       name="usuario_apellido" 
						       pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" 
						       maxlength="40" 
						       required>
						<span class="icon is-small is-left">
							<i class="fas fa-user"></i>
						</span>
					</div>
				</div>
			</div>

			<div class="column is-half">
				<div class="field">
					<label class="label">Usuario</label>
					<div class="control has-icons-left">
						<input class="input is-rounded is-danger is-medium" 
						       type="text" 
						       name="usuario_usuario" 
						       pattern="[a-zA-Z0-9]{4,20}" 
						       maxlength="20" 
						       required>
						<span class="icon is-small is-left">
							<i class="fas fa-user-tag"></i>
						</span>
					</div>
				</div>
			</div>

			<div class="column is-half">
				<div class="field">
					<label class="label">Email</label>
					<div class="control has-icons-left">
						<input class="input is-rounded is-danger is-medium" 
						       type="email" 
						       name="usuario_email" 
						       maxlength="70">
						<span class="icon is-small is-left">
							<i class="fas fa-envelope"></i>
						</span>
					</div>
				</div>
			</div>

			<div class="column is-half">
				<div class="field">
					<label class="label">Clave (Usar mayúsculas y mínimo 1 carácter, mínimo 7 dígitos)</label>
					<div class="control has-icons-left">
						<input class="input is-rounded is-danger is-medium" 
						       type="password" 
						       name="usuario_clave_1" 
						       pattern="[a-zA-Z0-9$@.-]{7,100}" 
						       maxlength="100" 
						       required>
						<span class="icon is-small is-left">
							<i class="fas fa-lock"></i>
						</span>
					</div>
				</div>
			</div>

			<div class="column is-half">
				<div class="field">
					<label class="label">Repetir clave</label>
					<div class="control has-icons-left">
						<input class="input is-rounded is-danger is-medium" 
						       type="password" 
						       name="usuario_clave_2" 
						       pattern="[a-zA-Z0-9$@.-]{7,100}" 
						       maxlength="100" 
						       required>
						<span class="icon is-small is-left">
							<i class="fas fa-lock"></i>
						</span>
					</div>
				</div>
			</div>

			<div class="column is-full has-text-centered">
				<button type="submit" class="button is-danger is-rounded is-medium is-hovered animado">
					Guardar
				</button>
			</div>
		</div>
	</form>
</div>