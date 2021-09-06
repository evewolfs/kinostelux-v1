<?php


require __DIR__ . '/vendor/autoload.php';

require 'includes/i18n_init.php';

?>

<!doctype html>
<html lang="<?= str_replace('_','-', $locale) ?>">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./scss/style.css">

    <!-- Adobe -->
    <link rel="stylesheet" href="https://use.typekit.net/dtq7qfb.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
        <!-- Mikrono -->
      <link href="https://backup.mikrono.com/gxt/css/fontawesome.css" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="https://backup.mikrono.com/css/style-responsive.css">
      <link id="customerMikrono" type="text/css" rel="stylesheet" href="https://backup.mikrono.com/gxt/css/customerMikrono.css">
    <title>Marie-Catherine Lelling</title>
  </head>
  <body>
  <?php require './includes/navbar.php' ?>


<div class="container">
  <div class="column">

     

<img src="./img/doctor-picture.jpg" class="doctor-picture" alt="">
<div class="doctor-name">Marie-Catherine Lelling</div>
<div class="doctor-job"><?= __('Kinésithérapeute') ?></div>


 <div class="doctor-icons">
        <a href="https://goo.gl/maps/gYWE6ajmfqPt8Svv6" target="blank"><div class="doctor-icon-container"><div class="icon-box"><i class="bi bi-geo-alt"><h6><?= __('CABINET') ?></h6></div></i></a></div>
        <a href="mailto:lellingmariecatherine@gmail.com"><div class="doctor-icon-container"><div class="icon-box"><i class="bi bi-envelope"><h6>EMAIL</h6></div></div></i></a>
        <a href="tel:0032494275104"><div class="doctor-icon-container"><div class="icon-box"><i class="bi bi-telephone"><h6>+32 494 275 104</h6></div></div></i></a>
</div>

<br/>
 <div class="doctor-spec-title"><?= __('Langues') ?></div>
 <ul class="doctor-description">
     <li><?= __('Français, Anglais') ?></li>
 </ul>

 <div class="doctor-spec-title"><?= __('Spécialités') ?></div>
<ul class="doctor-description">
  <li><?= __('Kinésithérapie générale pour adultes et enfants') ?></li>
  <li><?= __('Rééducation uro-gynécologique féminine') ?></li>
  <li><?= __('Drainage lymphatique manuel') ?></li>
  <li><?= __("Rééducation des troubles de l'articulation temporo-mandibullaire") ?></li>
  <li><?= __('Rééducation post-chirurgicale') ?></li>
  <li><?= __('Rééducation orthopédique pour adultes et enfants') ?></li>
  <li><?= __('Rééducation neurologique pour adultes et enfants') ?></li>
  <li><?= __('Kinésithérapie respiratoire pour adultes et enfants') ?></li>
  <li><?= __('Kinésithérapie respiratoire pour adultes et enfants') ?></li>
</ul>

<div class="doctor-spec-title"><?= __('Formation') ?></div>
    <ul class="doctor-description">
        <li><?= __('Haute École Robert Schuman, Libramont (2016)') ?></li>
    </ul>
</div>

<div class="columntwo">
<div id="mikrono">
</div>
<script type="text/javascript" language="javascript" src="https://backup.mikrono.com/myagenda/myagenda.nocache.js"></script>
<script type="text/javascript" language="javascript" src="https://backup.mikrono.com/js/lz-string.min.js"></script>
<script type="text/javascript" language="javascript">
var owner_id="6123647b592f2052d5179be4";
</script>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </div>


<?php include("./includes/footer.php"); ?>
  </body>
</html>

