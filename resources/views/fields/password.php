<input 
    id="<?=$args['id'];?>" 
    class="regular-text strong" 
    pattern=".{8,12}" 
    name="<?=$args['id'];?>" 
    type="password" 
    value="<?=$args['value'];?>"
    <?= (isset($args['args']['required']) && $args['args']['required'])  ? 'required' : ''; ?>
/>
