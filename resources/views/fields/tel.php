<input 
    id="<?=$args['id'];?>" 
    class="regular-text ltr phone" 
    name="<?=$args['id'];?>" 
    type="tel" 
    value="<?=$args['value'];?>"
    placeholder="<?=(isset($args['args']['placeholder']) && $args['args']['placeholder'])  ? $args['args']['placeholder'] : '';?>" 
    <?= (isset($args['args']['required']) && $args['args']['required'])  ? 'required' : ''; ?>
/>