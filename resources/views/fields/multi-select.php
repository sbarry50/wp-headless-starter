<?php if (array_key_exists('label', $args['args'])) : ?>
    <label for="<?=$args['id']?>"><?=$args['args']['label'] ?>
<?php endif; ?>
<select id="<?=$args['id']?>" name="<?=$args['id']?>[]" multiple size="0" <?= (isset($args['args']['required']) && $args['args']['required'])  ? 'required' : ''; ?>>
    <?php foreach ($args['args']['options'] as $options) : ?>
        <?php if (!is_array($options)) {
    continue;
} ?>
        <option 
            value="<?=$options['value']?>"
            <?= in_array($options['value'], ($args['value'] ? $args['value'] : [])) ? 'selected' : ''; ?>
        ><?=$options['label']?></option>
    <?php endforeach; ?>
</select>
<?php if (array_key_exists('label', $args['args'])) : ?>
    </label>
<?php endif; ?>