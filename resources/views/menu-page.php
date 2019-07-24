<div <?=isset($args['args']['vue_id']) ? 'id="' . $args['args']['vue_id'] . '"' : null; ?>  class="wrap">
    <h1><?=$args['page_title']?></h1>
    <?php settings_errors(); ?>

    <form method="POST" action="options.php">
        <?php settings_fields(str_replace('-', '_', $args['menu_slug'])); ?>
        <?php do_settings_sections($args['menu_slug']); ?>
        <?php submit_button(); ?>
    </form>
</div>