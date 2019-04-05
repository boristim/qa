<?php
function dawn_form_system_theme_settings_alter(&$form, &$form_state) {

  drupal_add_css(drupal_get_path('theme', 'dawn'). '/css/dawn-appearance.css', array('weight' => 110, 'group' => CSS_THEME));

  $grids =  drupal_map_assoc(range (1,12));
  foreach($grids as $k => $v){
    $grids[$k] = t('!num Columns', array('!num'=>$v));
  }

  $form['fluid'] = array(
     '#type' => 'fieldset',
     '#title' => t('Fluid Regions'),
   );
  $form['fluid']['fluid_header'] = array(
    '#type' => 'checkbox',
    '#title' => t('Header'),
    '#default_value' => theme_get_setting('fluid_header'),
  );
  $form['fluid']['fluid_content'] = array(
    '#type' => 'checkbox',
    '#title' => t('Content'),
    '#default_value' => theme_get_setting('fluid_content'),
  );
  $form['fluid']['fluid_footer'] = array(
    '#type' => 'checkbox',
    '#title' => t('Footer'),
    '#default_value' => theme_get_setting('fluid_footer'),
  );
  $theme_name = arg(3);
  $theme_info = system_get_info('theme', $theme_name);

  $block_demo = l($theme_info['name'].' Block Demo','admin/structure/block/demo/'.$theme_name, array('attributes' => array('target' =>'_blank')));
  $form['grids'] = array(
   '#type' => 'fieldset',
   '#title' => t('@theme Content & Sidebar Grid Widths', array('@theme'=>$theme_info['name'])),
   '#description' => t(<<<EOF
<dl>
<dd class="block-demo-link">$block_demo</dd>
<dt>How to <q>Add Your Columns Up</q>:  </dt>
<dd>
<ul>
<li>Sidebar First and Content are within their own row (on page.tpl.php this is the <q>grid_main</q> row).  <strong>These TWO REGIONS should add up to 12 for each breakpoint </strong>.</li>
<li>As for Sidebar Second, it's width is used against <q>grid_main</q> width (which contains Sidebar First and Content regions).</li>
<li>XS Breakpoint will degrade to 12 for all columns.</li>
</ul>
</dd>
</dl>
EOF
),
  );

    $form['grids']['sm'] = array(
     '#type' => 'fieldset',
     '#title' => t('Breakpoint SM'),
    );
      $form['grids']['sm']['grid_sidebar_first_sm'] = array(
       '#type' => 'select',
       '#title' => t('Sidebar First'),
       '#default_value' => theme_get_setting('grid_sidebar_first_sm'),
       '#options' => $grids
      );
      $form['grids']['sm']['grid_content_sm'] = array(
       '#type' => 'select',
       '#title' => t('Content'),
       '#default_value' => theme_get_setting('grid_content_sm'),
       '#options' => $grids
      );
      $form['grids']['sm']['grid_sidebar_second_sm'] = array(
       '#type' => 'select',
       '#title' => t('Sidebar Second'),
       '#default_value' => theme_get_setting('grid_sidebar_second_sm'),
       '#options' => $grids
      );

    $form['grids']['md'] = array(
     '#type' => 'fieldset',
     '#title' => t('Breakpoint Medium'),
    );
      $form['grids']['md']['grid_sidebar_first_md'] = array(
       '#type' => 'select',
       '#title' => t('Sidebar First'),
       '#default_value' => theme_get_setting('grid_sidebar_first_md'),
       '#options' => $grids
      );
      $form['grids']['md']['grid_content_md'] = array(
       '#type' => 'select',
       '#title' => t('Content'),
       '#default_value' => theme_get_setting('grid_content_md'),
       '#options' => $grids
      );
      $form['grids']['md']['grid_sidebar_second_md'] = array(
       '#type' => 'select',
       '#title' => t('Sidebar Second'),
       '#default_value' => theme_get_setting('grid_sidebar_second_md'),
       '#options' => $grids
      );

    $form['grids']['lg'] = array(
     '#type' => 'fieldset',
     '#title' => t('Breakpoint Large'),
    );
      $form['grids']['lg']['grid_sidebar_first_lg'] = array(
       '#type' => 'select',
       '#title' => t('Sidebar First'),
       '#default_value' => theme_get_setting('grid_sidebar_first_lg'),
       '#options' => $grids
      );
      $form['grids']['lg']['grid_content_lg'] = array(
       '#type' => 'select',
       '#title' => t('Content'),
       '#default_value' => theme_get_setting('grid_content_lg'),
       '#options' => $grids
      );
      $form['grids']['lg']['grid_sidebar_second_lg'] = array(
       '#type' => 'select',
       '#title' => t('Sidebar Second'),
       '#default_value' => theme_get_setting('grid_sidebar_second_lg'),
       '#options' => $grids
      );

  $form['libraries'] = array(
    '#type' => 'fieldset',
    '#title' => t('Additional Tools'),
  );
  $form['libraries']['html_shim'] = array(
    '#type' => 'checkbox',
    '#title' => t('html5 Shim'),
    '#default_value' => theme_get_setting('html_shim'),
    '#description' => t('Add html5 shim to header. Uses CDN')
  );
  $rdf_status= module_exists('rdf');
  $rdf = t('RDF module is offline.  HTML tag outputing basic doctype.');
  if ($rdf_status){
      $rdf = t('RDF module is online. HTML tag outputing related information.');
  }
  $form['libraries']['doctype'] = array(
    '#type' => 'markup',
    '#markup' =>'<dl><dt>'. t('General Notice:').'</dt><dd>'.$rdf. '</dd></dl>'
  );

  $form['meta'] = array(
    '#type'  => 'fieldset',
    '#title' => t('Html Meta'),
    '#description' => '<small>'.t('Note:  empty fields will remove item from output.').'</small><br><br>'
  );
  $form['meta']['meta_httpequiv'] = array(
    '#type' => 'textfield',
    '#title' => t('http-equiv'),
    '#default_value' => theme_get_setting('meta_httpequiv'),
  );
  $form['meta']['meta_viewport'] = array(
    '#type' => 'textfield',
    '#title' => t('viewport'),
    '#default_value'=> theme_get_setting('meta_viewport'),
  );

 $form['#validate'][] = 'dawn_theme_settings_validate';

}

function dawn_theme_settings_validate($form, $form_state){
	$grid_sidebar_first_sm = intval($form_state['values']['grid_sidebar_first_sm']);
	$grid_content_sm = intval($form_state['values']['grid_content_sm']);
  if ( ($grid_sidebar_first_sm+$grid_content_sm) !=12){
    form_set_error('grid_sidebar_first_sm', t('Sidebar First SM: total is not equal to 12'));
    form_set_error('grid_content_sm', t('Content SM: total is not equal to 12'));
  }

	$grid_sidebar_first_md = intval($form_state['values']['grid_sidebar_first_md']);
	$grid_content_md = intval($form_state['values']['grid_content_md']);
  if ( ($grid_sidebar_first_md+$grid_content_md) !=12){
    form_set_error('grid_sidebar_first_md', t('Sidebar First MD:  total is not equal to 12'));
    form_set_error('grid_content_md', t('Content MD: total is not equal to 12'));
  }

	$grid_sidebar_first_lg = intval($form_state['values']['grid_sidebar_first_lg']);
	$grid_content_lg = intval($form_state['values']['grid_content_lg']);
  if ( ($grid_sidebar_first_lg+$grid_content_lg) !=12){
    form_set_error('grid_sidebar_first_lg', t('Sidebar First LG: total is not equal to 12'));
    form_set_error('grid_content_lg', t('Content LG: total is not equal to 12'));
  }
}
