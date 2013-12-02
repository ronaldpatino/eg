<?php

function eg_css_alter(&$css) {
    unset($css[drupal_get_path('module','system').'/system.theme.css']);
    unset($css[drupal_get_path('module','system').'/system.base.css']);
    unset($css[drupal_get_path('module','system').'/system.menus.css']);
    unset($css[drupal_get_path('module','system').'/system.messages.css']);
    unset($css[drupal_get_path('module','system').'/comment.css']);
    unset($css[drupal_get_path('module','comment').'/comment.css']);
    unset($css[drupal_get_path('module','node').'/node.css']);
    unset($css[drupal_get_path('module','field').'/theme/field.css']);
    unset($css[drupal_get_path('module','search').'/search.css']);
    unset($css[drupal_get_path('module','user').'/user.css']);
}

function eg_js_alter(&$js) {
    unset($js['settings']);
    $js['themes/eg/js/bootstrap.js']['group'] = 'JS_SYSTEM';
    /*
    unset($js['misc/jquery.js']);
    unset($js['misc/jquery.once.js']);
    unset($js['misc/drupal.js']);

    $js['misc/ui/jquery.effects.core.min.js'] = JS_DEFAULT;
    $js['themes/eg/js/jquery.js']['group'] = JS_SYSTEM;
    $js['themes/eg/js/bootstrap.js']['group'] = JS_SYSTEM;
*/

}

function main_menu()
{
    $user_menu = menu_navigation_links('main-menu');
    print theme(
        'links', array(
        'links' => $user_menu,
        'attributes' => array(
            'id' => 'user-menu',
            'class' => array('nav', 'navbar-nav'),
        )

    ));
}
/*
function eg_block_view_alter(&$data, $block) {
    if (is_array($data['content'])) {
    $data['content']['#prefix'] = '<div class="my-class">';
    $data['content']['#suffix'] = '</div>';
    }
    else {
        $data['content'] = '<div class="my-class">' . $data['content'] . '</div>';
    }
}
*/