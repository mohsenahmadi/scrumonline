<?php
include "config.php";
include "templates/templates.php";
include "sponsors.php";

$templates = Template::getAll();

// Find all templates with their own navigation item
$navItems = [];
foreach($templates as $index=>$template)
{
  if ($template->isNavigation)
    $navItems[$index] = $template;
}
?>
<!doctype html>
<html class="no-js" lang="fa-IR">
<head>
  <meta charset="utf-8">
  <base href="/">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>اسکرام پوکر آنلاین</title>
  <meta name="description" content="اسکرام پوکر آنلاین، ابزاری برای تیم‌های اسکرام است که در جلسات برنامه‌ریزی اسپرینت می‌توانند از آن به رایگان استفاده کنند.">  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" href="apple-touch-icon.png">
    
  <script src="/js/modernizr-2.8.3.min.js"></script>
  
  <!-- Style sheets -->
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/bootstrap-rtl.min.css?version=3.3.6">

  <link rel="stylesheet" href="/css/iransans.css">


  <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="/css/normalize.css">
  <link rel="stylesheet" href="/css/scrumonline.css">

  <!-- Pretty cookie consent and styling -->
  <?php include("templates/cookie_notice.php") ?>
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-W59VHQV');</script>
</head>
<body ng-app="scrum-online">
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W59VHQV"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!--[if lt IE 8]>
   <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Top navigation bar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    	<a class="navbar-brand" href="/">اسکرام پوکر</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
      <?php foreach($navItems as $navItem): ?>
        <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="<?php echo $navItem->link ?>"><?php echo $navItem->navigationTag ?></a></li>
        <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="https://fa.ahmadi.pm">یادداشت‌های فارسی</a></li>
        <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="https://fa.ahmadi.pm/reading-list">خواندنی‌های پیشنهادی</a></li>
      <?php endforeach; ?>
      </ul>
    </div> <!--/.nav-collapse -->
  </div>
</nav>

<!-- Add your site or application content here -->
<div class="container-fluid main" ng-view></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-cookies.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-sanitize.min.js"></script>
<script src="https://cdn.rawgit.com/showdownjs/showdown/1.8.6/dist/showdown.min.js"></script>
<script src="/js//bootstrap.min.js"></script>
<script src="/js/J2M.js"></script>
<script type="text/javascript">
  var cardSets = [
<?php foreach($cardSets as $key=>$cardSet) { ?>
    { set: <?= $key ?>, cards: <?= json_encode($cardSet) ?>  },
<?php } ?>
  ];
</script>
<script src="/js/main.js"></script>
<?php foreach($plugins as $plugin) {?>
<script src="/js/<?= strtolower($plugin) ?>-plugin.js"></script>
<?php } ?>
  
<!-- Templates of the page -->
<?php
  foreach($templates as $template)
  {
     $template->render();
  }
?>
</body>
</html>
