<?php

/**
 * @file
 * Default theme implementation to display a block.
 *
 * Available variables:
 * @var $block->subject: Block title.
 * @var $content: Block content.
 * @var $block->module: Module that generated the block.
 * @var $block->delta: An ID for the block, unique within each module.
 * @var $block->region: The block region embedding the current block.
 * @var $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - block: The current template type, i.e., "theming hook".
 *   - block-[module]: The module generating the block. For example, the user
 *     module is responsible for handling the default user navigation block. In
 *     that case the class would be 'block-user'.
 * @var $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * @var $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Helper variables:
 * @var $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * @var $block_zebra: Outputs 'odd' and 'even' dependent on each block region.
 * @var $zebra: Same output as $block_zebra but independent of any block region.
 * @var $block_id: Counter dependent on each block region.
 * @var $id: Same output as $block_id but independent of any block region.
 * @var $is_front: Flags true when presented in the front page.
 * @var $logged_in: Flags true when the current user is a logged-in member.
 * @var $is_admin: Flags true when the current user is an administrator.
 * @var $block_html_id: A valid HTML ID and guaranteed unique.
 *
 * @see template_preprocess()
 * @see template_preprocess_block()
 * @see template_process()
 *
 * @ingroup themeable
 * @var $attributes
 * @var $content_attributes
 */
?>
<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <?php /* print render($title_prefix); ?>
<?php if ($block->subject): ?>
  <h2<?php print $title_attributes; ?>><?php print $block->subject ?></h2>
<?php endif;?>
  <?php print render($title_suffix); */?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php print $content ?>
  </div>
</div>
