<?php
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('home.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body class="home">

<header class="row">
    <div class="header-image"><?= $this->Html->image('cake.logo.svg') ?></div>
    <div class="header-title">
        <h1>Welcome to CakePHP Red Velvet. Build fast. Grow solid.</h1>
    </div>
    <div class="header-menu">
      <nav class="main-memu">
        <ul>
          <li>
            <a href="/">home</a>
          </li>
        </ul>
      </nav>
    </div>
</header>

<div class="row">

</div>



</body>
</html>
