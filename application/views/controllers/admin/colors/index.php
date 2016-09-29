<?php //echo $total . "records found.<br/>"; ?>
<div class="categorybox">
    <div>
        <a href="<?php echo URL::site('admin/colors/cloths_colors')?>" >
                    <button class="btn btn-success">Crear nuevo color</button>
            </a>
    </div>
        <div class="headtitle">
            <h2>Lista de colores</h2>
        </div>
  <div class="panel-body">
    <table class="table table-hover">
        <tr>
            <td><strong>Nombre Color</strong></td>
            <td><strong>Descripción</strong></td>
            <td><strong>URL Imagen</strong></td>
            <td><strong>Imagen</strong></td>            
        </tr>
        <?php 
            foreach ($colors as $color){
        ?>
        <tr>
            <td><?php echo $color->name; ?></td>
            <td><?php echo $color->description; ?></td>
            <td><?php echo $color->image?></td>
            <td><?php echo HTML::image($color->image, array('class' => 'picture_img'));?></td>
            <td>
                
                <a href="<?php echo URL::site('admin/colors/cloths_edit_colors')?>?color=<?php echo $color->id;?>">
                    <button class="btn btn-info">Editar</button>
                </a>
            </td>
            <td>
                <a href="<?php echo URL::site('admin/colors')?>">
                    <button onClick="return confirm('Seguro desea eliminar este registro?')" class="btn btn-danger">Eliminar
                    </button>
                </a>
            </td>
        </tr>
  <?php  } ?>
    </table>
  </div>
</div>

