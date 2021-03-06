<div class="container">
    <div class="page-header">
        <img src="<?php print base_path() . drupal_get_path('theme', 'EG'); ?>/img/logo-elecgal.png">
    </div>

    <div class="navbar navbar-top" role="navigation">
        <?php print render($page['bloque_main_menu']); ?>
    </div>
    <!-- Static navbar -->
    <div class="row centro">
        <div class="col-xs-8">
            <div class="noticias-main">
                <?php print render($page['content']); ?>
            </div>
        </div>
        <div class="col-xs-4">
            SUBMENU DEL CONTENIDO
        </div>
    </div>

    <div class="barra-main">
        <img src="<?php print base_path() . drupal_get_path('theme', 'EG'); ?>/img/mapa-sitio.png"><img src="<?php print base_path() . drupal_get_path('theme', 'EG'); ?>/img/actualize-datos.png"><img src="<?php print base_path() . drupal_get_path('theme', 'EG'); ?>/img/contacto.png"><img src="<?php print base_path() . drupal_get_path('theme', 'EG'); ?>/img/comentarios.png">
    </div>
    <br/>
    <div class="row">
        <div class="ble">
            <div class="col-xs-4">
                <?php if ($page['bloque_pie_izquierda']): ?>
                    <?php print render($page['bloque_pie_izquierda']); ?>
                <?php endif; ?>
            </div>
            <div class="col-xs-4">
                <?php if ($page['bloque_pie_centro']): ?>
                    <?php print render($page['bloque_pie_centro']); ?>
                <?php endif; ?>
            </div>
            <div class="col-xs-4 barra-renova">
                <?php if ($page['bloque_pie_derecha']): ?>
                    <?php print render($page['bloque_pie_derecha']); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <img src="<?php print base_path() . drupal_get_path('theme', 'EG'); ?>/img/ecuador-ama-la-vida.png"><img src="<?php print base_path() . drupal_get_path('theme', 'EG'); ?>/img/presidencia-ecuador.png"><img src="<?php print base_path() . drupal_get_path('theme', 'EG'); ?>/img/ministerio-energia.png"><img src="<?php print base_path() . drupal_get_path('theme', 'EG'); ?>/img/ministerio-coordinador.png"><img src="<?php print base_path() . drupal_get_path('theme', 'EG'); ?>/img/facebook.png"><img src="<?php print base_path() . drupal_get_path('theme', 'EG'); ?>/img/twitter.png">
        </div>
    </div>

</div> <!-- /container -->