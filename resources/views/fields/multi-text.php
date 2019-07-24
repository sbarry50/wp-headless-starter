<?php
    $count = isset($args['args']['num_inputs']) ? $args['args']['num_inputs'] : 1;
    for ($i = 0; $i < $count; $i++) :
?>
    <input 
        id="<?=$args['id'] . '-' . $count;?>" 
        class="regular-text ltr" 
        name="<?=$args['id'][$i];?>"
        type="text" 
        value="<?=$args['value'][$i];?>" 
        placeholder="<?=(isset($args['args']['placeholder']) && $args['args']['placeholder'])  ? $args['args']['placeholder'] : '';?>" 
        <?= (isset($args['args']['required']) && $args['args']['required'])  ? 'required' : ''; ?>
    />
<?php endfor; ?>