<iframe
  <?= !empty($args['admin_width']) ? 'width="' . $args['admin_width'] . '"' : 'style="width: 100%"'; ?>  
  height="<?=!empty($args['admin_height']) ? $args['admin_height'] : '450'; ?>"
  frameborder="0"
  style="border:0"
  src="<?=$args['url']?>"
  allowfullscreen>
</iframe>