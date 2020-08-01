

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Usuarios
                <small>Lista</small>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <a href="<?php echo base_url();?>Mantenimiento/Usuarios/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Agregar Usuarios</a>
                <div class="box box-solid">
                <hr>
                <div class="row">
                    <div class= "col-md-12">
                        <table id="example1" class= "table table-bordered btn-hover">
                            <thead>
                                <tr>
                                <th>#</th>
                                <th>Nombres</th>
                                <th>Estado</th>
                                <th>Opciones</th>
                                </tr>
                            </thead>
                        <tbody>
                            <?php if (!empty($usuarios)):?>
                                    <?php foreach($usuarios as $usuario):?>
                                        <tr>
                                            <td><?php echo $usuario->id_usuario;?></td>
                                            <td><?php echo $usuario->nombre;?></td>
                                            <td><?php echo $usuario->estado;?></td>

                                            <td>
                                                <div class= "btn-group">
                                                    <button type="button" class="btn btn-info btn-view" data-toggle="modal" data-target="#modal-default" value="<?php echo $usuario->id_usuario; ?>">
               										    <span class="fa fa-search"></span>
             									    </button>
                                                    </span></a>
                                                    <a href="<?php echo base_url();?>Mantenimiento/Usuarios/edit/<?php echo $usuario->id_usuario;?>" class= "btn btn-warning"><span class="fa fa-pencil">
                                                    </span></a>
                                                    <a href="<?php echo base_url(); ?>Mantenimiento/usuarios/delete/<?php echo $usuario->id_usuario; ?>" class="btn btn-danger btn-remove"><span class="fa fa-remove"></span></a>                                                    </span></a>
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
        <h3 class="modal-title">Informacion del Usuario</h3>
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
<script type="text/javascript">

	var base_url= "<?php echo base_url();?>";
	$(".btn-view").on("click",function(){
        var id_usuario= $(this).val();
        $.ajax({
            url: base_url + "admin/Usuarios/view/" + id_usuario,
            type: "POST",
            success:function(resp){
              $("#modal-default .modal-body").html(resp);
              //alert(resp);
            }
        });
    });

</script>
