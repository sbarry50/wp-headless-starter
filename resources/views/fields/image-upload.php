<div class="upload">
    <?php if (!empty($args['args']['label'])) : ?>
        <p><?=$args['args']['label']?></p>
    <?php endif; ?>
    <img data-src="<?=$args['default_image'];?>" src="<?=$args['src'];?>" width="<?=$args['args']['admin_width'];?>" height="<?=$args['args']['admin_height'];?>" />
    <div>
        <input type="hidden" name="<?=$args['id'];?>" id="<?=$args['id'];?>" value="<?=$args['value'];?>" />
        <button type="button" class="upload_image_button button-primary">Upload Image</button>
        <button type="button" class="remove_image_button button-primary">&times;</button>
    </div>
</div>