

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Clientes
                <small>Lista</small>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <a href="<?php echo base_url();?>Mantenimiento/Clientes/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Clientes</a>
                <div class="box box-solid">
                <hr>
                <div class="row">
                    <div class= "col-md-12">
                        <table id="example1" class= "table table-bordered btn-hover">
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Dirección</th>
                                <th>Telefono</th>
                                <th>Cedula de Identidad</th>
                                <th>Gmail</th>
                                <th>Estado</th>
                                <th>Opciones</th>
                                </tr>
                            </thead>
                        <tbody>
                            <?php if (!empty($clientes)):?>
                                    <?php foreach($clientes as $cliente):?>
                                        <tr>
                                            <td><?php echo $cliente->id_cliente;?></td>
                                            <td><?php echo $cliente->nombre_cliente;?></td>
                                            <td><?php echo $cliente->apellido_cliente;?></td>
                                            <td><?php echo $cliente->direccion_cliente;?></td>
                                            <td><?php echo $cliente->telefono_cliente;?></td>
                                            <td><?php echo $cliente->ci_cliente;?></td>
                                            <td><?php echo $cliente->email_cliente;?></td>
                                            <td><?php echo $cliente->estado_cliente;?></td>
                                            <?php $datacliente = $cliente->id_cliente."*".$cliente->nombre_cliente."*".$cliente->apellido_cliente."*". 
                                            $cliente->direccion_cliente."*".$cliente->telefono_cliente."*".$cliente->ci_cliente."*".$cliente->email_cliente;?>

                                            <td>
                                                <div class= "btn-group">
                                                    <button type="button" class="btn btn-info btn-view-cliente" data-toggle="modal" data-target="#modal-default" value="<?php echo $datacliente; ?>">
               										    <span class="fa fa-search"></span>
             									    </button>
                                                    </span></a>
                                                    <a href="<?php echo base_url();?>Mantenimiento/Clientes/edit/<?php echo $cliente->id_cliente;?>" class= "btn btn-warning"><span class="fa fa-pencil">
                                                    </span></a>
                                                    <a href="<?php echo base_url(); ?>Mantenimiento/Clientes/delete/<?php echo $cliente->id_cliente; ?>" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>                                                    </span></a>
                                                </div>
                                            </td>
                                        </tr> 
                                    <?php endforeach;?>
                                <?php endif;?>

                                
                            </tbody>
                        
                        </table>
                    
                    </div>
                
                </div>
                <!-- /.box -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Informacion del Cliente</h3>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>