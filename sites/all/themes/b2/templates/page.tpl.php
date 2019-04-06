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
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
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
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>
<?php if (!empty($page['menu'])): ?>
  <nav id="site-menu">
    <div class="container">
      <div class="row">
        <div class="column col-xs-12"><?php print render($page['menu']); ?></div>
      </div>
      <div>
  </nav>
<?php endif; ?>
<?php if (!empty($page['header'])): ?>
  <header class="header-content">
    <div class="<?php echo $fluid_header; ?>">
      <div class="container">
        <img src="<?php print $directory; ?>/img/logo-book.svg" alt="" height="40">
        <img src="<?php print $directory; ?>/img/logo-text.svg" alt="" height="40">
        <div class="row">
          <div class="column col-xs-12">
            <?php print render($page['header']); ?>
          </div>
        </div>
      </div>
    </div>
  </header>
<?php endif; ?>
<?php if ($breadcrumb): ?>
  <section id="breadcrumb" aria-label="Breadcrumb" class="container">
  <div class="row">
    <div class="column col-xs-12"><?php print $breadcrumb; ?></div>
  </div></section><?php endif; ?>
<?php if (!empty($page['leaderboard_top'])) {
  echo '<div class="container leaderboard leaderboard-top"><div class="row"><div class="column col-xs-12 center">' . render($page['leaderboard_top']) . '</div></div></div>';
} ?>

<section id="page-wrapper" class="<?php echo $fluid_content; ?> clearfix">
  <main id="main-wrapper" class="<?php echo $grid_main; ?> column">
    <?php if (!empty($page['content_top'])): ?>
      <div class="row">
      <div id="content-top" class="column col-md-12"><?php print render($page['content_top']); ?></div>
      </div><?php endif; ?>
    <div class="row">
      <div id="content" class="column <?php echo $grid_content; ?>">
        <?php if (!empty($page['highlighted'])): ?>
          <div id="highlighted"><?php print render($page['highlighted']); ?></div>
          <div class="clearfix"></div><?php endif; ?>
        <?php if ($tabs): ?>
          <div class="tabs"><?php print render($tabs); ?></div>
          <div class="clearfix"></div><?php endif; ?>
        <?php if (!empty($page['help'])) {
          print render($page['help']);
        } ?>
        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
          <div class="clearfix"></div><?php endif; ?>
        <div class="clearfix"></div>
        <a id="main-content"></a>
        <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
        <?php if ($messages): ?>
          <div class="messages-wrapper"><?php print $messages; ?></div><?php endif; ?>
        <?php print render($page['content']); ?>
      </div>
      <?php if (!empty($page['sidebar_first'])): ?>
        <aside id="sidebar-first"
               class="column <?php echo $grid_sidebar_first; ?>"><?php print render($page['sidebar_first']); ?></aside><?php endif; ?>
    </div>
  </main>
  <?php if (!empty($page['sidebar_second'])): ?>
    <aside id="sidebar-second"
           class="column <?php echo $grid_sidebar_second; ?>"><?php print render($page['sidebar_second']); ?></aside><?php endif; ?>
</section>

<?php if (!empty($page['leaderboard_bottom'])) {
  echo '<div class="container leaderboard leaderboard-bottom"><div class="row"><div class="column col-xs-12 center">' . render($page['leaderboard_bottom']) . '</div></div></div>';
} ?>
<?php if (!empty($page['footer'])): ?>
<footer class="<?php echo $fluid_footer; ?> ">
  <div class="container"><?php print render($page['footer']); ?></div></footer><?php endif; ?>
