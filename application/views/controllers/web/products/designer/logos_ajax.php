
<?php

if (count($logos) > 0) {
    echo HTML::image('media/images/designer/left.png', array('width' => '50', 'class' => 'nav-lowbar-icons', 'nav' => 'left'));
    foreach ($logos as $logo) {
        echo HTML::image($logo->image,
                array('width' => '80',
                    'class' => 'lowbar-icons',
                    'unique' => $logo->id,
                    'type'=>$logo->type));
    }
    echo HTML::image('media/images/designer/right.png', array('width' => '50', 'class' => 'nav-lowbar-icons', 'nav' => 'right'));
}
else{
    echo '<p>Seleccione una categor&iacute;a</p>';
}
?>


