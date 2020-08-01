<div class="content-wrapper">
	<section class="content header">
		<h1>
			Cliente
			<small>Editar</small>
		</h1>
		<section class="content">
			<div class="row">
				<div class="col-lg-12 text text-right">
						<h3 class="card-title right">
							<a href="<?php echo base_url();?>mantenimiento/clientes" class="btn btn-danger bt"><span class="fa fa-danger"></span>ATRAS</a>
						</h3>
				</div>
			</div>
            <section class="content">
				<div class="box box-solid">
					<div class="row">
						<div class="col-md-12">
						<form action="<?php echo base_url();?>Mantenimiento/Cliente/update" method="POST">
							<input type="hidden" value="<?php echo $cliente->id_cliente;?>"name="idCliente"></input>
                            <div class="form-group">
								<label for="nombre">Nombre:</label>
								<input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente"value="<?php echo $cliente->nombre_cliente ?>">
							</div>
                            <div class="form-group">
								<label for="apellido">Apellido:</label>
								<input type="text" class="form-control" id="apellido_cliente" name="apellido_cliente"value="<?php echo $cliente->apellido_cliente ?>">
							</div>
                            <div class="form-group">
								<label for="nombre">Nombre:</label>
								<input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente"value="<?php echo $cliente->nombre_cliente ?>">
							</div>
                            <div class="form-group">
								<label for="nombre">Nombre:</label>
								<input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente"value="<?php echo $cliente->nombre_cliente ?>">
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