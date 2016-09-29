

<?php

//echo count($colors);
if (count($colors) >0) {
    foreach ($colors as $color) {
        echo HTML::image($color->first->image,
                array('width' => '30',
                    'class' => 'color_item',
                    'unique' => $color->first->id,
                    'alt' => $color->first->name));
    }
} else {
    echo "<p>No se encontraron colores</p>";
}
?>
