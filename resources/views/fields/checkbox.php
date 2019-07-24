<input 
    type="checkbox" 
    id="<?=$args['id'];?>" 
    name="<?=$args['id'];?>" 
    value="<?=$args['args']['value'];?>" 
    <?php checked($args['value'], $args['args']['value']); ?>
>
<?php if (array_key_exists('label', $args['args'])) : ?>
    <label for="<?=$args['id'];?>"><?=$args['args']['label'];?></label>
<?php endif; ?>