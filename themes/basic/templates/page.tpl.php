<?php  // dpm($page); ?>

<table class="page">

  <!-- HEADER -->
  <tr class="w w-header">
    <td class="p p-left">
      <div class="b b-switcher"><div class="block-inner"></div></div>

    </td>
    <td class="p p-right">
    <div class="header-inner">

        <div class="b b-switcher"><div class="block-inner"></div></div>

        <?php if ($logo): ?>
          <div class="b b-logo">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
              <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
            </a>
          </div>
        <?php endif; ?>

        <div class="b b-feedback"></div>
        <div class="b b-search"></div>
        <?php print render($page['header']['system_main-menu']); ?>
      </div>


    </td>
  </tr>

  <!-- MAIN -->
  <tr class="w w-main">
    <td class="p p-left">
      <?php print render($page["left"]); ?>
    </td>
    <td class="p p-right">
      <?php if($is_front): ?>
        <div class="w w-slider">
          <div class="b b-slider">
            <div class="block-inner owl-carousel">
              <div class="slide slide-1"><img src="/sites/all/themes/basic/images/slide-1.jpg" alt=""></div>
              <div class="slide slide-2"><img src="/sites/all/themes/basic/images/slide-1.jpg" alt=""></div>
              <div class="slide slide-3"><img src="/sites/all/themes/basic/images/slide-1.jpg" alt=""></div>
            </div>

            <!-- <div class="foo"></div> -->
          </div>
        </div>
      <?php endif; ?>


      <div id="main" class="clearfix">

        <div class="b b-categories-elect clearfix">
          <div class="view">
            <div class="e"></div>
            <div class="e"></div>
            <div class="e"></div>
            <div class="e"></div>
            <div class="e"></div>
          </div>
        </div>
        
        <section id="content" class="clearfix">

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

          <div class="b b-features">
            <div class="block-innter">
              <div class="item item-1">
                <div class="title">Выгодные цены и скидки</div>
                <div class="body">Только у нас полные коллекций керамической плитки, мозаики и клинкерной плитки.</div>
              </div>
              <div class="item item-2">
                <div class="title">Полные коллекции</div>
                <div class="body">Только у нас полные коллекций керамической плитки, мозаики и клинкерной плитки. </div>
              </div>
              <div class="item item-3">
                <div class="title">3D визуализация</div>
                <div class="body">Только у нас полные коллекций керамической плитки, мозаики и клинкерной плитки.</div>
              </div>
            </div>
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
    <td class="p p-left">
      <?php print render($page['footer']['block_1']);?>

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
    <td class="p p-right">
      <div class="b b-map">
        <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=9gpaSAArhFaKzZPbP3wV9fRHeHOQJgc_&width=auto&height=335"></script>
      </div>

      <div class="b b-copyright">
        <p>
          © Миокерамика. Все права защищены.
        </p>
      </div>

<!--       <div class="b b-weblogika">
        <p><a href="http://weblogika.ru">Создание сайтов</a> - <img src="/sites/all/themes/custom/images/w.png" alt=""/>    Веб Логика</p>
      </div>
    -->
  </td>
</tr>
</table>





<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>

