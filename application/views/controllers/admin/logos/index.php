<?php //echo $total . "records found.<br/>"; ?>
<div class="categorybox">
    <div>
        <a href="<?php echo URL::site('admin/logos/create')?>" >
            <button class="btn btn-success">Crear nuevo logo</button>
        </a>
    </div>
    <div class="headtitle">
        <h2>Lista de logos</h2>
    </div>
    <div class="panel-body">
        <table class="table table-hover">
            <tr>
                <td><strong>Nombre Logo</strong></td>
                <td><strong>Tipo de logo</strong></td>
                <td><strong>Categoria de logo</strong></td>
                <td><strong>Descripción de logo</strong></td>
                <td><strong>Imagen</strong></td>            
            </tr>
            <?php 
                foreach ($logos as $logo){
            ?>
            <tr>
                <td><?php echo $logo->name; ?></td>
                <td><?php echo $logo->type; ?></td>
                <td><?php echo $logo->category; ?></td>
                <td><?php echo $logo->description; ?></td>
                <td><?php echo HTML::image($logo->image, array('class' => 'picture_img','width'=>'50'));?></td>
                <td>                
                    <a href="<?php echo URL::site('admin/logos/edit')?>?logo=<?php echo $logo->id;?>" >
                        <button class="btn btn-info">Editar</button>
                    </a>
                </td>
                <td>
                    <a href="<?php echo URL::site('admin/logos')?>">
                        <button onClick="return confirm('Seguro desea eliminar este registro?')" class="btn btn-danger">Eliminar
                        </button>
                    </a>
                </td>
            </tr>
            <?php  } ?>
        </table>
    </div>
</div>