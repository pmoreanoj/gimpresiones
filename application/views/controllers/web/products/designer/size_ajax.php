<div class="span2"><center>Talla:</center></div>
<!--
<div class="span1">
    <select class="span1" >
        <option>0</option>
        <option>2</option>
        <option>4</option>
        <option>6</option>
        <option>8</option>
        <option>10</option>
        <option>12</option>
        <option>14</option>
        <option>16</option>
        <option>18</option>
        <option>S</option>
        <option>M</option>
        <option>L</option>
        <option>XL</option>
        <option>XXL</option>
    </select>
</div>
-->
<div class="span1">
    <?php if (count($rows)>0): ?>
        <select id='size_select' class="span1" >
            <option value="">Escoja talla</option>
            <?php foreach ($rows as $row): ?>
                <option value="<?php echo $row->clothing->size; ?>"><?php echo $row->clothing->size; ?></option>
            <?php endforeach; ?>
        </select>
    <?php else: ?>
    <p>No se encontraron tallas</p>
    <?php endif; ?>
</div>

