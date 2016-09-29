<div class="container" id="main-content">
    <div class="row">

        <div class="span3" id="sidebar">
            <div class="span3 align:left">
                <ul class="nav nav-list">
                    <li class="nav-header">
                        Conócenos
                    </li>
                    <li>
                        <a href="<?php echo URL::site('home/aboutus') ?>">Sobre Nosotros</a>
                    </li>
                    <li class="active">
                        <a href="#">Contáctenos</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="span9">
            <div class="pagebox">
                <div class="headtitle">
                    <h2>Contáctanos</h2>
                </div>

                <fieldset class="form">
                    <label for="name">Nombre</label>
                    <input type="text" id="name">
                    <label for="email">Dirección de correo electrónico</label>
                    <input type="text" id="email">
                    <label for="message">Mensaje</label>
                    <textarea id="message"></textarea>
                    <br/>
                    <?php echo Form::hidden('time', date('Y-m-d H:i:s'), array('id' => 'time')) ?>
                    <?php echo Form::button('submit', 'Enviar', array('id' => 'sendButton', 'class' => 'btn')) ?>
                </fieldset>


            </div>
        </div>
    </div>
</div>


<div id="dialog" title="Mensaje enviado"></div>

<style>
    .form input{
        height: 30px;
    }
</style>