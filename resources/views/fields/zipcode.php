<input 
    id="<?=$args['id'];?>" 
    class="regular-text ltr zipcode" 
    name="<?=$args['id'];?>" 
    type="text" 
    value="<?=$args['value'];?>"
    placeholder="<?=(isset($args['args']['placeholder']) && $args['args']['placeholder'])  ? $args['args']['placeholder'] : '';?>" 
    <?= (isset($args['args']['required']) && $args['args']['required'])  ? 'required' : ''; ?>
/>
