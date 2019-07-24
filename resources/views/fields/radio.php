<?php if (array_key_exists('label', $args['args'])) : ?>
    <p><?=$args['args']['label'] ?></p>
<?php endif; ?>
<?php foreach ($args['args']['options'] as $options) : ?>
    <?php if (!is_array($options)) {
    continue;
} ?>
    <div>
        <input 
            type="radio" 
            id="<?=$options['value'];?>" 
            name="<?=$args['id'];?>" 
            value="<?=$options['value'];?>" 
            <?php checked($args['value'], $options['value']); ?>
        >
        <label for="<?=$options['value'];?>"><?=$options['label'];?></label>
    </div>
<?php endforeach; ?>
<div>
    <input 
        type="radio" 
        id="none" 
        name="<?=$args['id'];?>" 
        value="none" 
        <?= (!$args['value'] || $args['value'] == 'none') ? 'checked' : ''; ?> 
    >
    <label for="none">None</label>
</div>