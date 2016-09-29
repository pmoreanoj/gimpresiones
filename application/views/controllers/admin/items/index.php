<?php //echo $total . "records found.<br/>"; ?>
<div class=" span-1">
    <div>
        <a href="<?php echo URL::site('admin/items/create')?>" >
                    <button class="btn btn-success">Crear nuevo item</button>
            </a>
    </div>
        <div class="headtitle">
            <h2>Lista de items</h2>
        </div>
  <div class="panel-body">
    <table class="table table-hover">
        <tr>
            <td><strong>Nombre</strong></td>
            <td><strong>Persona</strong></td>
            <td><strong>Tipo de prenda</strong></td>
            <td><strong>Talla</strong></td>
            <td><strong>Color primario</strong></td> 
            <td><strong>Color secundario</strong></td>
            <td><strong>Estado</strong></td>
            <td><strong>Imagen</strong></td>            
        </tr>
        <?php 
            foreach ($items as $item){
        ?>
        <tr>
            <td><?php echo $item->name; ?></td>
            <td><?php 
                        $cloth = ORM::factory('Cloths', $item->clothing_id);
                        echo $cloth->person_type; ?>
            </td>
            <td><?php echo $cloth->type_enum; ?></td>
            <td><?php echo $cloth->size; ?></td>
            <td><?php echo $item->first->name; ?>
            </td>
            <td><?php echo $item->second->name; ?></td>
            <td><?php echo $item->active; ?></td>
            <td><?php echo HTML::image($item->photo, array('class' => 'picture_img'));?></td>
            <td>                
                <a href="<?php echo URL::site('admin/items/edit')?>?item=<?php echo $item->id;?>">
                    <button class="btn btn-info">Editar</button>
                </a>
            </td>
            <td>
                <a href="<?php echo URL::site('admin/items')?>">
                    <button onClick="return confirm('Seguro desea eliminar este registro?')" class="btn btn-danger">Eliminar
                    </button>
                </a>
            </td>
        </tr>
  <?php  } ?>
    </table>
  </div>
</div>