<input 
    type="checkbox" 
    id="<?=$args['id'];?>" 
    name="<?=$args['id'];?>" 
    value="check" 
    <?php checked($args['value'], 'check'); ?>
>
<?php if (array_key_exists('label', $args['args'])) : ?>
    <label for="<?=$args['id'];?>"><?=$args['args']['label'];?></label>
<?php endif; ?>