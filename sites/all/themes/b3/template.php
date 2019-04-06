<?php
/**
 * Created by PhpStorm.
 * User: salem
 * Date: 06.04.2019
 * Time: 10:12
 */


/*function b3_menu_tree__menu_top_menu(&$variables) {
//  $variables['tree'] = '<ul>' . $variables['tree'] . '</ul>';
//  dsm($variables);
  return $variables['tree'];
}

function b3_menu_link(array &$variables) {
  $element = $variables['element'];
  $sub_menu = '';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}*/

function b3_links__locale_block(&$vars) {
  foreach($vars['links'] as $language => $langInfo) {
    $abbr = $langInfo['language']->language;
    $name = $langInfo['language']->name;
    $short_name = mb_substr($langInfo['language']->name,0,3);
    $vars['links'][$language]['title'] = '<abbr title="' . $name . '">' . $short_name . '</abbr>';
    $vars['links'][$language]['html'] = TRUE;
  }
  $content = theme_links($vars);
  return $content;
}
