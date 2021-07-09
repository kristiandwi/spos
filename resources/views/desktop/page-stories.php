<?php
/*
Template Name: Stories Page
*/
?>
<!DOCTYPE html>
<html lang="id-ID">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Solopos Stories</title>
  <link rel="stylesheet" href="<?php echo ASSETS_MOBILE; ?>css/stories.css">
</head>

<body>

  <div data-slide="slide" class="slide">
    <div class="slide-items">
      <img src="<?php echo ASSETS_MOBILE; ?>images/stories/img1.jpg" alt="Img 1">
      <img src="<?php echo ASSETS_MOBILE; ?>images/stories/.jpg" alt="Img 2">
      <img src="<?php echo ASSETS_MOBILE; ?>images/stories/img3.jpg" alt="Img 3">
      <img src="<?php echo ASSETS_MOBILE; ?>images/stories/img4.jpg" alt="Img 4">
    </div>
    <nav class="slide-nav">
      <div class="slide-thumb"></div>
      <button class="slide-prev">Anterior</button>
      <button class="slide-next">Próximo</button>
    </nav>
  </div>

  <script src="<?php echo ASSETS_MOBILE; ?>js/slide-stories.js"></script>
</body>

</html>