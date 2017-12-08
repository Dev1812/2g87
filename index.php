<!DOCTYPE html>
<html>
<head>
  <title>Title</title>
  <link rel="stylesheet" type="text/css" href="/css/common.css?<?=rand();?>">
  <script type="text/javascript">
if(!window.map) {
  window.map = {};
}
function ge(el) {
  return (typeof el=='string' || typeof el=='number') ? document.getElementById(el) : el;
}

  </script>
</head>
<body>
<div id="wrap1">
	<?php include 'application/templates/page_top.php'; ?>
  <div class="content">
<div id="index">
  <div class="about-block flex-block">
  	<div class="gray-layer"></div>
  	<div class="background-img-layer"></div>
  	<div class="body-layer">
  	  <div class="flex-block-wrap">
  	  	<div class="flex-block-wrap-title" style="text-align: center;font-size: 24px;">Проводите розыгрыши онлайн</div>
  	  	<div class="flex-block-wrap-body" style="text-align: center;    font-size: 15px;">
          Розышрыши, конкурсы лайков, гибкая настройка и множество полезных функций!
          <div style="text-align:center;margin-top:14px;">
            <a href="/" class="a">
              <button class="white-button">Начать сейчас</button>
            </a>
          </div>
  	  	</div>
  	  </div>
  	</div>
  </div>

</div>


  </div>
  <div class="footer">
	<a href="/" class="footer-link">Main</a>
	<a href="/" class="footer-link">Main</a>
	<a href="/" class="footer-link">Main</a>
	<a href="/" class="footer-link">Main</a>
	<a href="/" class="footer-link">Main</a>
  </div>
</div>
</body>
</html>