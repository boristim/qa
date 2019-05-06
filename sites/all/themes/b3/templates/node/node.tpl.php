<?php

/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * @var $title: the (sanitized) title of the node.
 * @var $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * @var $user_picture: The node author's picture from user-picture.tpl.php.
 * @var $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * @var $name: Themed username of node author output from theme_username().
 * @var $node_url: Direct URL of the current node.
 * @var $display_submitted: Whether submission information should be displayed.
 * @var $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * @var $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * @var $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * @var $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * @var $node: Full node object. Contains data that may not be safe.
 * @var $type: Node type; for example, story, page, blog, etc.
 * @var $comment_count: Number of comments attached to the node.
 * @var $uid: User ID of the node author.
 * @var $created: Time the node was published formatted in Unix timestamp.
 * @var $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * @var $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * @var $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * @var $view_mode: View mode; for example, "full", "teaser".
 * @var $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * @var $page: Flag for the full page state.
 * @var $promote: Flag for front page promotion state.
 * @var $sticky: Flags for sticky post setting.
 * @var $status: Flag for published status.
 * @var $comment: State of comment settings for the node.
 * @var $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * @var $is_front: Flags true when presented in the front page.
 * @var $logged_in: Flags true when the current user is a logged-in member.
 * @var $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 *
 * @var $attributes
 * @var $title_attributes
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup templates
 */
?>
<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php if ((!$page && !empty($title)) || !empty($title_prefix) || !empty($title_suffix) || $display_submitted): ?>
  <header>
    <?php print render($title_prefix); ?>
    <?php if (!$page && !empty($title)): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if ($display_submitted): ?>
    <span class="submitted">
      <?php print $user_picture; ?>
      <?php print $submitted; ?>
    </span>
    <?php endif; ?>
  </header>
  <?php endif; ?>
  <?php
    // Hide comments, tags, and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_tags']);
    print render($content);
  ?>
  <?php
    // Only display the wrapper div if there are tags or links.
    $field_tags = render($content['field_tags']);
    $links = render($content['links']);
    if ($field_tags || $links):
  ?>
   <footer>
     <?php print $field_tags; ?>
     <?php print $links; ?>
  </footer>
    <?php endif; ?>
  <?php print render($content['comments']); ?>
</article>
