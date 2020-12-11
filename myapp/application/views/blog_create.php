<!doctype html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="<?= base_url('statics/plugins/ckeditor/ckeditor.js'); ?>"></script>
</head>
<body>
<?= form_open('blog/register') ?>

<div>
<?php foreach($categories as $key =>$category) { ?>
<?= form_radio('category',$category['id']) ?><?= $category['name'] ?>
<?php } ?>
</div>
<div>
<?php foreach($tags as $key2 =>$tag) { ?>
<?= form_radio('tags',$tag['id']) ?> <?= $tag['name'] ?>
<?php } ?><br>
タイトル<?= form_input('title') ?>
<br>
本文<br>
<textarea name="body1" id="editor1"></textarea>


<textarea name="body2" id="editor2"></textarea>


</div>
<?= form_submit('','登録') ?>


<?= form_close()  ?>
<script>

  CKEDITOR.replace('editor1', {
  });
  CKEDITOR.replace('editor2', {
  });
</script>
</body>
</html>
