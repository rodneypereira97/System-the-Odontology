<div class="content-wrapper">
	<section class="content header">
		<h1>
			Usuario
			<small>Editar</small>
		</h1>
		<section class="content">
			<div class="row">
				<div class="col-lg-12 text text-right">
						<h3 class="card-title right">
							<a href="<?php echo base_url();?>mantenimiento/usuarios" class="btn btn-danger bt"><span class="fa fa-danger"></span>ATRAS</a>
						</h3>
				</div>
			</div>
            <section class="content">
				<div class="box box-solid">
					<div class="row">
						<div class="col-md-12">
						<form action="<?php echo base_url();?>Mantenimiento/Usuarios/update" method="POST">
							<input type="hidden" value="<?php echo $usuario->id_usuario;?>"name="idUsuario"></input>
                            <div class="form-group">
								<label for="nombre">Nombre:</label>
								<input type="text" class="form-control" id="nombre" name="nombre"value="<?php echo $usuario->nombre ?>">
							</div>
							<div class="form-group">
								<label for="estado">Estado:</label>
								<input type="text" class="form-control" id="estado" name="estado"value="<?php echo $usuario->estado ?>">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-success btn_flat">Guardar</button>
							</div>
						</form>
						</div>
					</div>
				</div>
			</section>
		</section>

	</section>
	
</div>