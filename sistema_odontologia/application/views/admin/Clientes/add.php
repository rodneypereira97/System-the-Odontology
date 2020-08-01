
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Cliente
        <small>Nuevo</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php if($this->session->flashdata("error")):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                                
                             </div>
                        <?php endif;?>
                        <form action="<?php echo base_url();?>Mantenimiento/Clientes/store" method="POST">
                            <div class="form-group">
                                <label for="nombre_cliente">Nombre:</label>
                                <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente">
                            </div>
                            <div class="form-group">
                                <label for="apellido_cliente">Apellido:</label>
                                <input type="text" class="form-control" id="apellido_cliente" name="apellido_cliente">
                            </div>
                            <div class="form-group">
                                <label for="direccion_cliente">Direccion:</label>
                                <input type="text" class="form-control" id="direccion_cliente" name="direccion_cliente">
                            </div>
                            <div class="form-group">
                                <label for="telefono_cliente">Telefono:</label>
                                <input type="text" class="form-control" id="telefono_cliente" name="telefono_cliente">
                            </div>
                            <div class="form-group">
                                <label for="ci_cliente">Cedula de Identidad:</label>
                                <input type="text" class="form-control" id="ci_cliente" name="ci_cliente">
                            </div>
                            <div class="form-group">
                                <label for="email_cliente">Correo:</label>
                                <input type="text" class="form-control" id="email_cliente" name="email_cliente">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
