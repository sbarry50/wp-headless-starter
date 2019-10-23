<fieldset>
    <?php if (array_key_exists('label', $args['args'])) : ?>
        <p><legend><?=$args['args']['label'] ?></legend></p>
    <?php endif; ?>
    <?php foreach ($args['args']['options'] as $options) : ?>
        <?php if (!is_array($options)) {
    continue;
} ?>
        <div>
            <input 
                type="checkbox" 
                id="<?=$options['value'];?>" 
                name="<?=$args['id'];?>[]" 
                value="<?=$options['value'];?>" 
                <?= in_array($options['value'], $args['value'] ? $args['value'] : []) ? 'checked' : ''; ?>
            >
            <label for="<?=$options['value'];?>"><?=$options['label'];?></label>
        </div>
    <?php endforeach; ?>
</fieldset>