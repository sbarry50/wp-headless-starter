<iframe
  <?= !empty($args['width']) ? 'width="' . $args['width'] . '"' : 'style="width: 100%"'; ?>  
  height="<?=!empty($args['height']) ? $args['height'] : '450'; ?>"
  frameborder="0"
  style="border:0"
  src="<?=$args['url']?>"
  allowfullscreen>
</iframe>