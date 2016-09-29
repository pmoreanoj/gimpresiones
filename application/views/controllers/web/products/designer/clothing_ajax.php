<?php foreach ($clothing as $cloth):?>
 <div>
        <div class="img-little-designer">
            <?php echo HTML::image($cloth->photo, 
                    array('class' => 'img-right-col',
                        'unique'=>$cloth->id,
                        'price'=>  number_format($cloth->clothing->price,2),
                        'price_termic'=>number_format($cloth->clothing->paper_termic,2),
                        'price_transfer'=>number_format($cloth->clothing->paper_transfer,2),
                        'price_custom'=>number_format($cloth->clothing->custom_logo,2),
                        'width' => '80')) ?> 
        </div>
    </div>

<?php endforeach;?>

