<footer class="l-footer p-footer c-bg--yellow">
  <div>
    <?php
      wp_nav_menu([
        'theme_location' => 'main_nav',
        'menu_class'     => 'p-footer__gmenu c-font--nunito',
        'container'      => false,
        'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
      ]);
    ?>
    <p class="p-footer__copyright c-textSmall c-font--nunito">&copy;<?php echo esc_html(date('Y')); ?> ️Yoshino All Rights Reserved.</p>
  </div>
</footer>
  <?php wp_footer(); ?>
</body>
</html>