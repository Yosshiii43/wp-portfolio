<footer class="l-footer p-footer c-bg--yellow">
  <div>
    <?php
      wp_nav_menu([
        'theme_location' => 'main_nav',
        'menu_class'     => 'p-footer__gmenu c-font--nunito200',
        'container'      => false,
        'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
      ]);
    ?>
    <p class="p-footer__copyright c-textSmall c-font--nunito200">&copy;2024 ️Yoshino Sumi</p>
  </div>
</footer>
  <?php wp_footer(); ?>
</body>
</html>