<?php


/**
 * Override or insert variables into the node template.
 */
function dawn_preprocess_node(&$variables) {
  if ($variables['view_mode']) {
    $variables['classes_array'][] = 'viewmode-'.drupal_clean_css_identifier($variables['view_mode']);
  }

  if (isset($variables['view_mode'])) {
    $type = $variables['type'];
    $viewmode = $variables['view_mode'];
    $variables['theme_hook_suggestions'][] = 'node__' . $type;
    $variables['theme_hook_suggestions'][] = 'node__' . $type.'__' . $viewmode;
  }

}


/**
 * templete_preprocess_page(&$variables)
 * --> setup bootstrap grids
 */

function dawn_preprocess_page(&$variables) {
  $fluid = array();
  $fluid['header'] = theme_get_setting('fluid_header');
  $fluid['content'] = theme_get_setting('fluid_content');
  $fluid['footer'] = theme_get_setting('fluid_footer');
  $variables['fluid_header'] =  $fluid['header']==1 ? 'fluid-container' : 'container';
  $variables['fluid_content'] = $fluid['content']==1 ? 'fluid-container' : 'container';
  $variables['fluid_footer'] = $fluid['footer']==1 ? 'fluid-container' : 'container';

  $grid = array();
  $grid['sidebar_first']['sm'] = intval(theme_get_setting('grid_sidebar_first_sm'));
  $grid['content']['sm'] = intval(theme_get_setting('grid_content_sm'));
  $grid['sidebar_second']['sm'] = intval(theme_get_setting('grid_sidebar_second_sm'));

  $grid['sidebar_first']['md'] = intval(theme_get_setting('grid_sidebar_first_md'));
  $grid['content']['md'] = intval(theme_get_setting('grid_content_md'));
  $grid['sidebar_second']['md'] =  intval(theme_get_setting('grid_sidebar_second_md'));

  $grid['sidebar_first']['lg'] = intval(theme_get_setting('grid_sidebar_first_lg'));
  $grid['content']['lg'] = intval(theme_get_setting('grid_content_lg'));
  $grid['sidebar_second']['lg'] = intval(theme_get_setting('grid_sidebar_second_lg'));

  // enhance region overview page.
  global $theme;
  $theme_info = system_get_info('theme', $theme);
  $current = current_path();
  if ((strpos($current, 'admin/structure/block/demo/') !== false)){
    if ( drupal_strtolower($theme_info['name']) =='dawn' || (isset($theme_info['base theme']) && $theme_info['base theme']==drupal_strtolower('dawn'))){
      drupal_add_css(drupal_get_path('theme', 'dawn'). '/css/dawn-block-demo.css');
      $regions= system_region_list(str_replace(' ', '_', drupal_strtolower($theme_info['name'])));
      $grid_classes = array();
      foreach( $regions as $base => $human){
        $label = '<dl class="block-region block-grids">';
        switch($base){
          case 'content':
          case 'sidebar_first':
          case 'sidebar_second':
           $items = [
              'col-xs-12',
              'col-sm-' . $grid[$base]['sm'],
              'col-md-' . $grid[$base]['md'],
              'col-lg-' . $grid[$base]['lg'],
            ];
            $grid_classes[$base] = $items;
            $fluid_state = ($base=='content') ? ' — ' . $variables['fluid_content'] : NULL;
            $label .= '<dt>' . t($human) . $fluid_state . ' </dt><dd> '. theme('item_list',  ['items'=>$items]) . '</dd>';
         break;
         default:
           $fluid_state ='';
           if($base=='header') { $fluid_state = ' — ' . $variables['fluid_header'];}
           if($base=='footer') { $fluid_state = ' — ' . $variables['fluid_footer'];}
           $label .= '<dt>' . t($human) .  $fluid_state. ' </dt>';
        }
        $label .= '</dl">';
        $variables['page'][$base]['block_description']['#markup']  =  $label;
      }
    }
  }

  // add tpl suggestions for node type..
  if (isset($variables['node']->type)) {
    $nodetype = $variables['node']->type;
    $nodeviewmode = $variables['node']->view_mode;
    $variables['theme_hook_suggestions'][] = 'page__node__' . $nodetype;
    $variables['theme_hook_suggestions'][] = 'page__node__' . $nodetype.'__' . $nodeviewmode;
  }

  // compute grids from settings var.
  $variables['grid_main'] = ' col-xs-12'.
    ' col-sm-'.(($grid['content']['sm']+$grid['sidebar_first']['sm']) - $grid['sidebar_second']['sm']).
    ' col-md-'.(($grid['content']['md']+$grid['sidebar_first']['md']) - $grid['sidebar_second']['md']).
    ' col-lg-'.(($grid['content']['lg']+$grid['sidebar_first']['lg']) - $grid['sidebar_second']['lg']).
    ' ';
  $variables['grid_content'] = ' -- ';
  $variables['grid_sidebar_first'] = ' -- ';
  $variables['grid_sidebar_second'] = ' -- ';
  // setup basic first/second column width
  if(@$variables['page']['sidebar_first'] && @$variables['page']['sidebar_second']){
    $variables['grid_content'] = ' col-xs-12'.
      ' col-sm-push-' . $grid['sidebar_first']['sm'].' col-sm-' . $grid['content']['sm'].
      ' col-md-push-' . $grid['sidebar_first']['md'].' col-md-' . $grid['content']['md'].
      ' col-lg-push-' . $grid['sidebar_first']['lg'].' col-lg-' . $grid['content']['lg'].
      ' ';
    $variables['grid_sidebar_first'] = ' col-xs-12'.
      ' col-sm-' . $grid['sidebar_first']['sm'].' col-sm-pull-' . $grid['content']['sm'].
      ' col-md-' . $grid['sidebar_first']['md'].' col-md-pull-' . $grid['content']['md'].
      ' col-lg-' . $grid['sidebar_first']['lg'].' col-lg-pull-' . $grid['content']['lg'].
      ' ';
    $variables['grid_sidebar_second'] =' col-xs-12'.
      ' col-sm-' . $grid['sidebar_second']['sm'].
      ' col-md-' . $grid['sidebar_second']['md'].
      ' col-lg-' . $grid['sidebar_second']['lg'].
      ' ';
	} elseif(@$variables['page']['sidebar_first'] || @$variables['page']['sidebar_second']){
    if($variables['page']['sidebar_first']){
      //  has first, no second
      $variables['grid_content'] = ' col-xs-12'.
        ' col-sm-push-'. $grid['sidebar_first']['sm'] .' col-sm-' . $grid['content']['sm'].
        ' col-md-push-'. $grid['sidebar_first']['md'] .' col-md-' . $grid['content']['md'].
        ' col-lg-push-'. $grid['sidebar_first']['lg'] .' col-lg-' . $grid['content']['lg'].
        ' ';
      $variables['grid_sidebar_first'] =' col-xs-12'.
        ' col-sm-' . $grid['sidebar_first']['sm'].' col-sm-pull-' .  $grid['content']['sm'].
        ' col-md-' . $grid['sidebar_first']['md'].' col-md-pull-' .  $grid['content']['md'].
        ' col-lg-' . $grid['sidebar_first']['lg'].' col-lg-pull-' .  $grid['content']['lg'].
        ' ';
	    $variables['grid_main'] ='col-md-12';
    }
    if(@$variables['page']['sidebar_second']){
      // has second, no first
      $variables['grid_content'] = ' col-xs-12'.
        ' col-sm-' . ($grid['content']['sm'] + $grid['sidebar_first']['sm']) .
        ' col-md-' . ($grid['content']['md'] + $grid['sidebar_first']['md']) .
        ' col-lg-' . ($grid['content']['lg'] + $grid['sidebar_first']['lg']) .
        ' ';
      $variables['grid_sidebar_second'] =' col-xs-12'.
        ' col-sm-' . $grid['sidebar_second']['sm'].
        ' col-md-' . $grid['sidebar_second']['md'].
        ' col-lg-' . $grid['sidebar_second']['lg'].
        ' ';
    }
	} else{
    $variables['grid_content'] = ' col-md-12 ';
    $variables['grid_main'] =' col-md-12 ';
	}

}


/**
 * introduces #dawn_wrapper_attributes -- allow wrapping of form elements with more (classes)
 */
function dawn_form_element($variables) {
  $element = &$variables['element'];

  // This function is invoked as theme wrapper, but the rendered form element
  // may not necessarily have been processed by form_builder().
  $element += array(
    '#title_display' => 'before',
  );

  // Add element #id for #type 'item'.
  if (isset($element['#markup']) && !empty($element['#id'])) {
    $attributes['id'] = $element['#id'];
  }
  // Add element's #type and #name as class to aid with JS/CSS selectors.
  $attributes['class'] = array('form-item');
  if (!empty($element['#type'])) {
    $attributes['class'][] = 'form-type-' . drupal_clean_css_identifier($element['#type']);
  }
  if (!empty($element['#name'])) {
    $attributes['class'][] = 'form-item-' . drupal_clean_css_identifier($element['#name']);
  }
  // Add a class for disabled elements to facilitate cross-browser styling.
  if (!empty($element['#attributes']['disabled'])) {
    $attributes['class'][] = 'form-disabled';
  }

  $attributes = isset($element['#dawn_wrapper_attributes']) ? array_merge_recursive($attributes, $element['#dawn_wrapper_attributes']) : $attributes ;

  $output = '<div' . drupal_attributes($attributes) . '>' . "\n";

  // If #title is not set, we don't display any label or required marker.
  if (!isset($element['#title'])) {
    $element['#title_display'] = 'none';
  }
  $prefix = isset($element['#field_prefix']) ? '<span class="field-prefix">' . $element['#field_prefix'] . '</span> ' : '';
  $suffix = isset($element['#field_suffix']) ? ' <span class="field-suffix">' . $element['#field_suffix'] . '</span>' : '';

  switch ($element['#title_display']) {
    case 'before':
    case 'invisible':
      $output .= ' ' . theme('form_element_label', $variables);
      $output .= ' ' . $prefix . $element['#children'] . $suffix . "\n";
      break;

    case 'after':
      $output .= ' ' . $prefix . $element['#children'] . $suffix;
      $output .= ' ' . theme('form_element_label', $variables) . "\n";
      break;

    case 'none':
    case 'attribute':
      // Output no label and no required marker, only the children.
      $output .= ' ' . $prefix . $element['#children'] . $suffix . "\n";
      break;
  }
  if (!empty($element['#description'])) {
    $output .= '<div class="description">' . $element['#description'] . "</div>\n";
  }
  $output .= "</div>\n";
  return $output;
}


/**
 * Uses RDFa attributes if the RDF module is enabled
 *
 */
function dawn_preprocess_html(&$vars) {
  $meta_viewport = trim(theme_get_setting('meta_httpequiv'));
  if ($meta_viewport!=NULL){
    $viewport = array(
      '#tag' => 'meta',
      '#weight' => -1001,
      '#attributes' => array(
        'name' => 'viewport',
        'content' => theme_get_setting('meta_viewport'),
      ),
    );
    drupal_add_html_head($viewport,'viewport');
  }
  $meta_httpequiv = trim(theme_get_setting('meta_httpequiv'));
  if ($meta_httpequiv!=NULL){
    $httpequiv = array(
      '#tag' => 'meta',
      '#weight' => -1001,
      '#attributes' => array(
        'http-equiv' => 'X-UA-Compatible',
        'content' => theme_get_setting('meta_httpequiv'),
      ),
    );
    drupal_add_html_head($httpequiv,'x-ua-compatible');
  }

  // Ensure that the $vars['rdf'] variable is an object.
  if (!isset($vars['rdf']) || !is_object($vars['rdf'])) {
    $vars['rdf'] = new StdClass();
  }
  if (module_exists('rdf')) {
    $vars['doctype'] = '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML+RDFa 1.1//EN">' . "\n";
    $vars['rdf']->version = 'version="HTML+RDFa 1.1"';
    $vars['rdf']->namespaces = $vars['rdf_namespaces'];
    $vars['rdf']->profile = ' profile="' . $vars['grddl_profile'] . '"';
  } else {
    $vars['doctype'] = '<!DOCTYPE html>' . "\n";
    $vars['rdf']->version = '';
    $vars['rdf']->namespaces = '';
    $vars['rdf']->profile = '';
  }

 // use the $html5shiv variable in their html.tpl.php
 $shimset = theme_get_setting('html_shim');
 //If the theme setting for adding the html5shim is checked, set the variable.
 if ($shimset == 1) {
  $element = array(
    'element' => array(
      '#tag' => 'script',
      '#value' => '',
      '#attributes' => array(
        'src' => '//html5shiv.googlecode.com/svn/trunk/html5.js',
      ),
    ),
  );
  $script = theme('html_tag', $element);
  $vars['html5shim'] = "<!--[if lt IE 9]>" . PHP_EOL . $script . "<![endif]-->" . PHP_EOL;
 }

}
