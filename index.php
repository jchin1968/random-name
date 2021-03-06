<?php
  $names = file('random-names.txt');
?>

<html>
  <head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
    <title>DrupalCamp Singapore 2014 Raffle</title>
    <link rel="stylesheet" href="random.css" type="text/css"/>
    <script src="./jquery-1.10.2.min.js"></script>
    <script src="./random.js"></script>
  </head>

<body>
  <div class="container">
    <div class="header">
      <img src="images/header-banner.jpg">
    </div>
    <div class="attendees-wrapper">
      <h2>Attendees</h2>
      <ul id="attendees">
      <?php foreach ($names as $name) { ?>
        <?php
          $nameId = preg_replace('/\s+/', '', $name);
        ?>
        <li id="<?php echo $nameId; ?>"><?php echo trim($name); ?></li>
      <?php } ?>
      </ul>
    </div>
    <div id="drumroll-image">
      <img src="images/drumroll.gif">
    </div>  
    <span id="draw-name">Pick a lucky winner</span>
    <div class="winner-container">
      <ol id="winners" reversed></ol>
    </div>

    <div class="sponsors">
      <ul>
        <li>Proudly sponsored by <a href="http://www.acquia.com"><img src="images/acquia-logo.png"></a></li>
      </ul>
    </div>
  </div>
</body>



