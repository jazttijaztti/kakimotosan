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
<?php show_ctg($categories); ?>
</div>
<div>

<?php show_tags($tags) ?>

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
