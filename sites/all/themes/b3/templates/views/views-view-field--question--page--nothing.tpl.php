<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * @var $output : The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */

if ((arg(0) == 'node') && (is_numeric(arg(1)))
  && ($q_question = node_load(arg(1)))
  && ($q_question->type == 'question')) {
  $q_question->field_view_count[LANGUAGE_NONE][0]['value'] =
    isset($q_question->field_view_count[LANGUAGE_NONE][0]['value']) ? $q_question->field_view_count[LANGUAGE_NONE][0]['value'] + 1 : 1;
  node_save($q_question);
}
$url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//$url = mb_strtolower(explode('/', $_SERVER['HTTP_X_PROTOCOL'])[0]) . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>
<div class="row question-row">
  <?php print $output; ?>
  <div class="social-buttons-share">
    <script src="//yastatic.net/share2/share.js"></script>
    <div class="ya-share2" data-url="<?php print $url; ?>" data-title="<?php drupal_get_title(); ?>"
         data-services="vkontakte,facebook,twitter,reddit,lj"></div>
  </div>
</div>
</div>
