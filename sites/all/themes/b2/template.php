<?php
/**
 * Created by PhpStorm.
 * User: salem
 * Date: 06.04.2019
 * Time: 10:12
 */


function b2_menu_tree__menu_top_menu(&$variables) {

  dsm($variables);
  $variables['tree'] = '<ul>' . $variables['tree'] . '</ul>';
  return $variables['tree'];
}