<?php require_once('views/view.php'); ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<style>
  html, body {
    margin: 0;
    height: 100%;
    overflow: hidden;
    font-family: 'Open Sans', sans-serif;
  }
</style>
<script>
  $(function() {
    function resize() {
      window.parent.$('iframe.S3')
        .width($('.container').width())
        .height($('.container').height());
    }
    $('.container').resize(resize);
    resize();
  });
  function up(url) {
    console.log(url);
    window.parent.addImg(url);
  }
  <?php vecho('reply'); ?>
</script>
<div class="container">
  <div class="msg"><?php vecho('err'); ?></div>
  <form method="post" enctype="multipart/form-data">
    Image (< 10MB): <input type="file" name="upload" />
    <input type="submit" value="Upload" />
  </form>
</div>