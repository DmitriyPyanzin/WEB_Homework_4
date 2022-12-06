<?php
$resume = 'Резюме моего кота';
$userName = 'Пушок или просто Пуша';
$prof = 'Ситх (бывший Джедай)';
$city = 'Новомосковск';
$mail = 'kotoPuh@gmail.com';
$phone = 'Пошурши кормом, и я прийду';
$lang = 'Как со мной общаться?';
$education = 'Зачем вам мое образование? Вот мое фото, где я еще молод!';

$kills = [
	[
    	'name' => 'Милота',
        'level' => 100
    ],
	[
    	'name' => 'Тыгыдым по ночам',
        'level' => 35
    ],
	[
    	'name' => 'Кусь',
        'level' => 45
    ],
	[
    	'name' => 'Мурчать',
        'level' => 80
    ]
];

$language = [
	[
    	'name' => 'Сказать кис-кис',
        'level' => 50
	],
	[
    	'name' => 'Позвать Пуша, Пуша, Пуша...',
        'level' => 80
	],
	[
    	'name' => 'Кинуть тапок',
        'level' => 100
	]
];

$experience = [
	[
    	'name' => 'Жирная котлета!',
        'firstDate' => 'Июнь 2021 -',
        'secondDane' => 'по настояцее время',
        'discription' => 'Я вешу 7,5 кг. Меня кормили дорогими кормами для похудения, но не помогло. И теперь все забили и просто меня мучают!'
    ],
	[
    	'name' => 'Карате Катан!',
        'firstDate' => 'Ноябрь 2020 - ',
        'secondDane' => 'Февраль 2021',
        'discription' => 'Я постоянно дрался со своим корешом Яшкой. Веселое было время!'
    ],
	[
    	'name' => 'Маленький проказник!',
        'firstDate' => 'Декабрь 2019 - ',
        'secondDane' => 'Октябрь 2020',
        'discription' => 'Я был уличным котом и давно бы подох, если бы не мои хозяева. Меня отвели к ветеринару, вылечили и привили, и теперь я полноценный член общества! Однажды нагадил в момент, когда меня хозяин нес под курткой с ветеринарки)))))'
    ]
];


?>




<!DOCTYPE html>
<html>
  <head>
    <title><?=$resume?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: 'Jost', sans-serif;}
    </style>
  </head>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://sun9-13.userapi.com/impg/yVrvA07xvtpUgsXfQW8JjQRlcH2D33QKW3NgaQ/tVfOQ9w2rCg.jpg?size=864x1152&quality=96&sign=9955c622f4f00a64e5c6106895d4ac0d&type=album" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2 class="w3-text-white"><b><?=$userName?></b></h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><b><?=$prof?></b></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><b><?=$city?></b></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><b><?=$mail?></b></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><b><?=$phone?></b></p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
          
          <?php
          	for($i = 0; $i < count($kills); $i++):
          ?>
          
          <p><b><i><?=$kills[$i]['name']?></i></b></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?=$kills[$i]['level']?>%"><?=$kills[$i]['level']?>%</div>
          </div>
          
          <?php
          	endfor;
          ?>
          
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i><?=$lang?></b></p>
          
          <?php
          	for($i = 0; $i < count($language); $i++):
          ?>
          <p><b><?=$language[$i]['name']?></b></p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:<?=$language[$i]['level']?>%"></div>
          </div>
          
          <?php
          	endfor;
          ?>
         
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
        
        <?php
        	for($i = 0; $i < count($experience); $i++):
        ?>
        
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?=$experience[$i]['name']?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?=$experience[$i]['firstDate']?><span class="w3-tag w3-teal w3-round"><?=$experience[$i]['secondDate']?></span></h6>
          <p><?=$experience[$i]['discription']?></p>
          <hr>
          
          <?php
          	endfor;
          ?>
          
          <br>
        </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i><?=$education?></h2>
        <img src="https://sun9-14.userapi.com/impf/3ahe1koTECveW5TOojTaj16PHtqRS6hXnR5kdQ/3i8Tb6R5ALc.jpg?size=2304x1521&quality=96&sign=3661a15a8cb6a66c21f4083d5df2e00d&type=album" style="width:100%" alt="Avatar">
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
 <!-- End footer -->
 </footer>

</body>
</html>
