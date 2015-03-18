<?php // dpm($page); ?>

<table class="page">

  <!-- HEADER -->
  <tr class="w w-header">
    <td class="left">
      <div class="b b-switcher"><div class="block-inner"></div></div>

    </td>
    <td class="right">

      <div class="b b-switcher"><div class="block-inner"></div></div>

      <?php if ($logo): ?>
        <div class="b b-logo">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
            <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
          </a>
        </div>
      <?php endif; ?>
    </td>
  </tr>

  <!-- MAIN -->
  <tr class="w w-main">
    <td class="left">
      <?php print render($page["left"]); ?>
    </td>
    <td class="right">
      <?php if($is_front): ?>
        <div class="w w-slider">
          <div class="b b-slider">
            <div class="foo">
              Slider
            </div>
          </div>
        </div>
      <?php endif; ?>


      <div id="main" class="clearfix">

        <section id="content">

          <?php if ($breadcrumb || $title|| $messages || $tabs || $action_links): ?>
            <div id="content-header">

              <?php print $breadcrumb; ?>

              <?php if ($page['highlighted']): ?>
                <div id="highlighted"><?php print render($page['highlighted']) ?></div>
              <?php endif; ?>

              <?php print render($title_prefix); ?>

              <?php if ($title): ?>
                <h1 class="title"><?php print $title; ?></h1>
              <?php endif; ?>

              <?php print render($title_suffix); ?>
              <?php print $messages; ?>
              <?php print render($page['help']); ?>

              <?php if ($tabs): ?>
                <div class="tabs"><?php print render($tabs); ?></div>
              <?php endif; ?>

              <?php if ($action_links): ?>
                <ul class="action-links"><?php print render($action_links); ?></ul>
              <?php endif; ?>

            </div> <!-- /#content-header -->
          <?php endif; ?>

          <div id="content-area">
            <?php print render($page['content']) ?>
          </div>

          <?php print $feed_icons; ?>

          <div class="view">
            <div class="e">
              <div class="f"></div>
              <div class="f"></div>
            </div>
            <div class="e"></div>
            <div class="e"></div>
            <div class="e"></div>
            <div class="e"></div>
            <div class="e"></div>
            <div class="e"></div>
            <div class="e"></div>
            <div class="e"></div>
            <div class="e"></div>
            <div class="e"></div>
            <div class="e"></div>
            <div class="e"></div>
            <div class="e"></div>
            <div class="e"></div>
            <div class="e"></div>
            <div class="e"></div>
            <div class="e"></div>
            <div class="e"></div>
            <div class="e"></div>
            <div class="e"></div>
            <div class="e"></div>
            <div class="e"></div>
            <div class="e"></div>
          </div>


        </section> <!-- /content-inner /content -->

        <?php if ($page['sidebar_first']): ?>
          <aside id="sidebar-first" class="column sidebar first">
            <?php print render($page['sidebar_first']); ?>
          </aside>
        <?php endif; ?> <!-- /sidebar-first -->

        <?php if ($page['sidebar_second']): ?>
          <aside id="sidebar-second" class="column sidebar second">
            <?php print render($page['sidebar_second']); ?>
          </aside>
        <?php endif; ?> <!-- /sidebar-second -->


      </div> <!-- /main -->
    </td>
  </tr>

  <!-- FOOTER -->
  <tr class="w w-footer">
    <td class="left">
      <div class="b b-contacts">

      </div>
      <div class="b b-social">
        <div class="block-inner">
          <ul class="items" >
            <li class="item item-1"><a href="#"></a></li>
            <li class="item item-2"><a href="#"></a></li>
            <li class="item item-3"><a href="#"></a></li>
            <li class="item item-4"><a href="#"></a></li>
          </ul>
        </div>
      </div>
    </td>
    <td class="right">
      <div class="b b-map">
      <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=9gpaSAArhFaKzZPbP3wV9fRHeHOQJgc_&width=auto&height=335"></script>
      </div>

      <div class="b b-copyright">
        <p>
          © Миокерамика. Все права защищены.
        </p>
      </div>
    </td>
  </tr>
</table>





<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>

