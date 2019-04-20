<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * @var $base_path : The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * @var $directory : The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * @var $is_front : TRUE if the current page is the front page.
 * @var $logged_in : TRUE if the user is registered and signed in.
 * @var $is_admin : TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * @var $front_page : The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * @var $logo : The path to the logo image, as defined in theme configuration.
 * @var $site_name : The name of the site, empty when display has been disabled
 *   in theme settings.
 * @var $site_slogan : The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * @var $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * @var $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * @var $breadcrumb : The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * @var $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * @var $title : The page title, for use in the actual HTML content.
 * @var $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * @var $messages : HTML for status and error messages. Should be displayed
 *   prominently.
 * @var $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * @var $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * @var $feed_icons : A string of all feed icons for the current page.
 * @var $node : The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup templates
 *
 * @var $navbar_classes
 * @var $container_class
 */

?>
<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
  <div class="<?php print $container_class; ?>">
    <div class="navbar-header">
      <?php if ($logo): ?>
        <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
        </a>
      <?php endif; ?>

      <?php if (!empty($site_name)): ?>
        <a class="name navbar-brand" href="<?php print $front_page; ?>"
           title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
      <?php endif; ?>

      <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
          <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <?php endif; ?>
    </div>

    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <div class="navbar-collapse collapse" id="navbar-collapse">
        <nav role="navigation" id="navigation-wrapper">
          <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($secondary_nav)): ?>
            <?php print render($secondary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
        </nav>
      </div>
    <?php endif; ?>
  </div>
</header>

<div class="main-container container-fluid pos-rel">
  <!--<div class="main-container --><?php //print $container_class; ?><!-- ">-->

  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#page-header -->

  <div class="row">
    <?php if (!empty($breadcrumb)) : ?>
      <section id="breadcrumb" class="col-sm-12 hidden-xs">
        <div class="col-sm-9 col-sm-offset-2">
          <?php print $breadcrumb; ?>
        </div>
      </section>
    <?php
    endif;
    ?>
    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-2 hidden-xs" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>
    <section class="col-sm-8 col-xs-12">
      <!--    <section--><?php //print $content_column_class; ?><!-- > -->
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <?php if (arg(0) != 'question'): ?>
          <h1 class="page-header"><?php print $title; ?></h1>
        <?php
        endif;
        ?>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-2 col-xs-12 pos-fix" id="sidebar_second" role="complementary">
          <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>

  <?php
  if ('question' == arg(0) && (!$is_admin)) {
    ?>
    <div class="container pos-fix" id="answer_form_container">
      <div class="row">
        <div class="col-sm-12">
          <?php
          $title = drupal_get_title();
          module_load_include('inc', 'node', 'node.pages');
          $form = node_add('answer');
          print drupal_render($form);
          drupal_set_title($title);
          ?>
        </div>
      </div>
    </div>
    <?php
  }
  ?>
</div>
<?php if (!empty($page['footer'])): ?>
  <footer class="footer container-fluid">
    <div class="<?php print $container_class; ?>">
      <?php print render($page['footer']); ?>
    </div>
  </footer>
<?php endif; ?>
<!-- /page -->
