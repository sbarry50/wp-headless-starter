<input 
    id="<?=$args['id'];?>" 
    class="regular-text ltr" 
    name="<?=$args['id'];?>" 
    pattern="(.+)@(.+){2,}\.(.+){2,}"
    type="email" 
    value="<?=$args['value'];?>"
    placeholder="<?=(isset($args['args']['placeholder']) && $args['args']['placeholder'])  ? $args['args']['placeholder'] : '';?>" 
    <?= (isset($args['args']['required']) && $args['args']['required'])  ? 'required' : ''; ?>
/>