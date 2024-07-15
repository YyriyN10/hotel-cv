<?php /* Site Branding */ if (!empty($site_branding = get_field('site_branding', 'options'))) : ?>
  <a class="site-branding" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
    <?php if (!empty($logo = $site_branding['site_logo'])) : ?>

      <img class="site-branding__logo" src="<?php echo $site_branding['site_logo']; ?>" />

    <?php else : ?>

      <span class="site-branding__name"><?php echo bloginfo('name'); ?></span>

    <?php endif; ?>
  </a>
<?php /* Site Branding End */ endif; ?>