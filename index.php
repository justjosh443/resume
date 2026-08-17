<!DOCTYPE html>
<?php require('data.php') ?>
<?php require('template.php') ?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?="$title"?></title>
  <?php requireFonts('Regular','Bold','Italic') ?>
  <?php requireCSS('reset.css', 'styles.css') ?>
</head>
<body>
  <div class="page">

    <ul class="section" id="contact"><?php listContact($contact)?></ul>

    <div class="section"><h1>Summary:</h1><p><?="$summary"?></p></div>

    <div class="section">
      <h1>Highlights:</h1>
      <ul id="highlights"><?php listHighlights($highlights)?></ul>
    </div>

    <div class="section">
      <h1>Experience:</h1>
      <ul class="experience"><?php listExperience($experience,0,2)?></ul>
    </div>

  </div>

  <div class="page">

    <div class="section">
      <ul class="experience"><?php listExperience($experience,2,-1)?></ul>
    </div>

    <div class="section">
      <p class="resume-footnote"><?=$resume_desc?>
        <a href="<?=$github?>" target="_blank"><?=$github?></a>
      </p>
    </div>

  </div>

</body>
</html>
