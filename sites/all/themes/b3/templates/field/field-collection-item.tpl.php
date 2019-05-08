<?php

/**
 * @file
 * Default theme implementation for field collection items.
 *
 * Available variables:
 * @var $content : An array of comment items. Use render($content) to print them
 *   all, or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * @var $title : The (sanitized) field collection item label.
 * @var $url : Direct url of the current entity if specified.
 * @var $page : Flag for the full page state.
 * @var $classes : String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity-field-collection-item
 *   - field-collection-item-{field_name}
 *
 * Other variables:
 * @var $classes_array : Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 * @var $attributes
 * @var $content_attributes
 */
?>
<?php
if (!isset($GLOBALS['first item on seo text'])) {
  ?>
  <div class="question-query visible-xs question-query-xs">
    <img src="/sites/default/files/theme-img/cat-shifter.svg" alt="query" class="cat-shifter">
    <img src="/sites/default/files/theme-img/query-sign.svg" alt="query" class="query-sign">
    <a href="/node/add/question?width=550&height=340" class="colorbox-node">Задать вопрос</a>
  </div>
  <div class="h2 hidden-xs">Статья</div>
  <?php
  $GLOBALS['first item on seo text'] = 1;
}
?>
<?php
$img = isset($content['field_seo_pictire']) ? image_style_url('medium', $content['field_seo_pictire'][0]['#item']['uri']) : '';
$rating = isset($content['field_seo_rating']) ? $content['field_seo_rating'][0]['#markup'] : '';
$text = isset($content['field_seo_bottom']) ? $content['field_seo_bottom'][0]['#markup'] : '';
?>
<div class="views-field-field-seo-rating field-collection">
  <div class="row">
    <div class="seo-mottom-text col-sm-9 col-xs-12"><?php print $text; ?></div>
    <div class="seo-img-rate col-xs-12 col-sm-3">
      <div class="seo-rate"><?php print $rating; ?><span class="of-teen">/10</span><span class="seo-rate-name">рейтинг</span></div>
      <div class="seo-picture"><?php
        if ($img){
        ?><img typeof="foaf:image" src="<?php print $img; ?>" alt/></div><?php
      }
      ?>
    </div>
  </div>
</div>
