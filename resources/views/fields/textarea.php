<textarea 
    id="<?=$args['id'];?>" 
    class="regular-text ltr" 
    name="<?=$args['id'];?>" 
    rows='7' 
    cols='50' 
    placeholder="<?=(isset($args['args']['placeholder']) && $args['args']['placeholder'])  ? $args['args']['placeholder'] : '';?>" 
    <?= (isset($args['args']['required']) && $args['args']['required'])  ? 'required' : ''; ?>
>
<?=$args['value'];?>
</textarea>
