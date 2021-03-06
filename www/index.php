<?php
  #keeps users from requesting any file they want
  $safe_pages = array("home", "join", "mentor", "robots", "sponsor", "sponsoring_details","stuApply");

  #remove the directory path we don't want
  $request  = $_SERVER['REQUEST_URI'];
  $params = explode("/", $request); //get the page only

  #handle the page filtering for safe pages
  if(empty($params)){
    $page="home";
  }else{

    $pages = explode("?", $params[1]);
    $page = trim($pages[0], "/");

    if(!in_array($page, $safe_pages)){
      //$page="404";
      $page="home";
    }

  }


?>


<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

<!--[if lt IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
<link rel="stylesheet" href="/css/ie.css" type="text/css">
<![endif]-->

    <?php include_once("title.php"); ?>

    <!--<link rel='stylesheet' id='zerif_font-css' href=
    '//fonts.googleapis.com/css?family=Lato%3A300%2C400%2C700%2C400italic%7CMontserrat%3A700%7CHomemade+Apple&amp;subset=latin%2Clatin-ext'
    type='text/css' media='all'>
    <link rel='stylesheet' id='zerif_font_all-css' href=
    '//fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C300italic%2C400italic%2C600italic%2C600%2C700%2C700italic%2C800%2C800italic&amp;ver=4.3.1'
    type='text/css' media='all'>-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel='stylesheet' id='zerif_style-css' href='/css/style.css' type='text/css' media='all'>
    <link rel='stylesheet' id='zerif_responsive_style-css' href='/css/responsive.css' type='text/css' media='all'>
    <link rel='stylesheet' id='mtlcw_stle-css' href='/css/mtlcw_style.css' type='text/css' media='all'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="/js/appForm.js"></script>

    <link rel="icon" href="/img/cropped-logo4-32x32.png" sizes="32x32">
    <link rel="icon" href="/img/cropped-logo4-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="/img/cropped-logo4-180x180.png">
    <meta name="msapplication-TileImage" content="/img/cropped-logo4-270x270.png">
  </head>
  <body id="page-body"

  <? if ($page=="home"): ?>
    class="home blog custom-background group-blog"
  <? else: ?>
    class="page page-template page-template-template-fullwidth-no-title page-template-template-fullwidth-no-title-php group-blog"
  <? endif; ?>

  >
    <div id="mobilebgfix">
      <div class="mobile-bg-fix-img-wrap">
        <div class="mobile-bg-fix-img"></div>
      </div>
      <div class="mobile-bg-fix-whole-site">
<?php include_once("header.php"); ?>

<?php #display proper content based on page
  //echo "Request:".$request." + ParamsCount: ".count($params)." +Params: ".$params[1];
  include_once($page.".php");
?>


<script src='https://www.google.com/recaptcha/api.js'></script>
<?php
include_once("footer.php");
include_once("footerJavaScripts.php");
include_once("googleAnalytics.php");

?>

    </div><!-- mobile-bg-fix-whole-site -->
  </div><!-- .mobile-bg-fix-wrap -->
  </body>
</html>
