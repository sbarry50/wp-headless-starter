<input 
    id="<?=$args['id'];?>" 
    class="regular-text ltr date" 
    name="<?=$args['id'];?>" 
    type="date" 
    value="<?=$args['value'];?>"
    <?= (isset($args['args']['required']) && $args['args']['required'])  ? 'required' : ''; ?>
>
