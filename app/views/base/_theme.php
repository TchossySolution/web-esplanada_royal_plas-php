<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Herr+Von+Muellerhoff&family=Merriweather:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Philosopher:ital,wght@0,400;0,700;1,400&family=Roboto:wght@100;300;400;500;700;900&display=swap"
    rel="stylesheet">
  <!-- STYLES -->
  <link rel="stylesheet" href="<?=urlProject(FOLDER_BASE . "/src/public/styles/globalStyles.css")?>">


  <link rel="shortcut icon" href="<?=urlProject(FOLDER_BASE . BASE_IMAGES .  "/logo-royal.png")?>" type="image/x-icon">
  <title> <?= SITE ?> </title>
</head>

<body>
  <?php 
    if($this->section('removeHeader')):
      echo $this->section('removeHeader');
    else:
      require 'src/components/Header/index.php'; 
    endif;
  ?>
  <main>
    <?=$this->section('content')?>
  </main>

  <?php 
    if($this->section('removeFooter')):
      echo $this->section('removeFooter');
    else:
      require 'src/components/Footer/index.php';
    endif;
  ?>

  <script src="https://kit.fontawesome.com/0321c5e24c.js" crossorigin="anonymous"></script>

</body>

</html>