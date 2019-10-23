<?php
    $count = isset($args['args']['num_inputs']) ? $args['args']['num_inputs'] : 1;
    for ($i = 0; $i < $count; $i++) :
?>
    <input 
        id="<?=str_replace('_', '-', $args['id']) . '-' . ($i + 1);?>" 
        class="regular-text ltr" 
        name="<?=$args['id'] . '[]';?>"
        type="text" 
        value="<?=is_array($args['value']) ? $args['value'][$i] : '';?>" 
        <?= (isset($args['args']['required']) && $args['args']['required'])  ? 'required' : ''; ?>
    />
<?php endfor; ?>