
<div class="categorybox">
    <div>
        <a href="<?php echo URL::site('admin/cloths/create')?>" >
                    <button class="btn btn-success">Crear nueva prenda</button>
            </a>
    </div>
        <div class="headtitle">
            <h2>Lista de Prendas</h2>
        </div>
  <div class="panel-body">
    <table class="table table-hover">
        <tr>
            <td><strong>Tipo persona</strong></td>
            <td><strong>Tipo prenda</strong></td>
            <td><strong>Precio ($)</strong></td>
            <td><strong>Talla</strong></td>
            <td><strong>Precio película térmica ($)</strong></td>
            <td><strong>Precio papel tránsfer ($)</strong></td>
            <td><strong>Precio logo personalizado ($)</strong></td>
        </tr>
        <?php 
            foreach ($clothes as $cloth){
        ?>
        <tr>
            <td><?php echo $cloth->person_type; ?></td>
            <td><?php echo $cloth->type_enum; ?></td>
            <td><?php echo number_format($cloth->price, 2); ?></td>        
            <td><?php echo $cloth->size; ?></td>
            <td><?php echo number_format($cloth->paper_termic, 2); ?></td>
            <td><?php echo number_format($cloth->paper_transfer, 2); ?></td>
            <td><?php echo number_format($cloth->custom_logo, 2); ?></td>
            <td>
                <a href="<?php echo URL::site('admin/cloths/edit')?>?cloth=<?php echo $cloth->id;?>">
                    <button class="btn btn-info">Editar</button>
                </a>
            </td>
            <td>
                <a href="<?php echo URL::site('admin/cloths')?>">
                    <button onClick="return confirm('Seguro desea eliminar este registro?')" class="btn btn-danger">Eliminar
                    </button>
                </a>
            </td>
        </tr>
  <?php  } ?>
    </table>
  </div>
</div>

