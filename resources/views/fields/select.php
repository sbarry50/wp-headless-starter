<?php if (array_key_exists('label', $args['args'])) : ?>
    <label for="<?=$args['id']?>"><?=$args['args']['label'] ?></label>
<?php endif; ?>
<select id="<?=$args['id']?>" name="<?=$args['id']?>">
    <option value="">--Please choose an option--</option>
    <?php foreach ($args['args']['options'] as $options) : ?>
        <?php if (!is_array($options)) {
    continue;
} ?>
        <option 
            value="<?=$options['value']?>"
            <?php selected($args['value'], $options['value']); ?>
        >
        <?=$options['label']?>
        </option>
    <?php endforeach; ?>
</select>