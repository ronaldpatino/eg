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
    unset($js['misc/jquery.js']);
    unset($js['misc/jquery.once.js']);
    unset($js['misc/drupal.js']);

}


