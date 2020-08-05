<!DOCTYPE html>
<html>
<head>
    <title><?= $this && $this->title != null ? $this->title : null ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:700,900" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/font.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/li-scroller.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/theme.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <link rel="stylesheet" href="../../../assets/error/css/style.css">
    <link rel="icon" type="image/png" href="../../../images/logo.png"/>
    <!--[if lt IE 9]>
    <script src="../../../assets/js/html5shiv.min.js"></script>
    <script src="../../../assets/js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<a style="border-radius: 30px" class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div style="overflow: hidden;">
    <header id="header">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="header_top">
                    <div style="float: right" class="header_top_right">
                        <p class="date_main" id="clock"></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="header_bottom">
                    <div class="logo_area"><a href="/" class="logo"><img src="../../../images/logo.png" alt=""></a></div>
                    <div class="add_banner"><a href=""><img src="../../../images/banner_1.png" alt=""></a></div>
                </div>
            </div>
        </div>
    </header>
    <section id="navArea">
        <nav class="navbar navbar-inverse" role="navigation">
            <div style="background: #ff7512;" class="navbar-header">
                <button style="background: #ff7512;border: ;" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div style="background: #014a46" id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav main_nav">
                    <li class="<?= \application\components\Router::getSegment('1') == '' ? 'active' : null ?>">
                        <a href="/"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Գլխավոր</span></a>
                    </li>
                    <li class="dropdown <?= \application\components\Router::getSegment('2') == \application\models\Sport::getSports()[0]['slug'] ? 'active' : null ?>">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-expanded="false">
                            <?= \application\models\Sport::getSports()[0]['sport_name'] ?>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <?php foreach (\application\models\Country::getCountries() as $country) : ?>
                            <li>
                                <a href="/category/football/<?= $country['slug'] ?>/1"><?= $country['country_name'] ?></a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <?php foreach (\application\models\Sport::getSports() as $sport) : ?>
                        <?php if ($sport['id'] != '8' && $sport['id'] != '1') : ?>
                        <li class="<?= \application\components\Router::getSegment('2') == $sport['slug'] ? 'active' : null ?>">
                            <a href="/category/<?= $sport['slug'] ?>/1"><?= $sport['sport_name'] ?></a>
                        </li>
                        <?php endif;?>
                    <?php endforeach; ?>
                    <li class="<?= \application\components\Router::getSegment('2') == \application\models\Sport::getSports()[4]['slug'] ? 'active' : null ?>">
                        <a href="/category/<?= \application\models\Sport::getSports()[4]['slug'] ?>/1"><?= \application\models\Sport::getSports()[4]['sport_name'] ?></a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>

    <section id="newsSection">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="latest_newsarea"> <span>LIVE</span>
                    <ul id="ticker01" class="news_sticker">
                        <?php foreach (\application\models\Post::getPosts(10) as $item) : ?>
                            <li><a href="/<?= $item['slug'] ?>"><img src="../../../images/<?= $item['image'] ?>" alt="<?= $item['image'] ?>"><?= $item['title'] ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="social_area">
                        <ul class="social_nav">
                            <li class="facebook"><a href="#"><img style="width: 28px;padding: 2px 2px 0px 1px;" src="../../../assets/css/images/facebook_logo.png" alt=""></a></li>
                            <li class="flickr"><a href="#"><img style="width: 28px;padding: 2px 2px 0px 1px;" src="../../../assets/css/images/600px-Instagram_icon.png" alt=""></a></li>
                            <li class="mail"><a href="#"><img style="width: 30px;padding: 5px 2px 0px 1px;" src="../../../assets/css/images/gmail-logo-3.png" alt=""></a></li>
                            <li class="youtube"><a href="#"><img style="width: 60px;padding: 6px 10px 0px 9px" src="../../../assets/css/images/800px-YouTube_Logo.svg.png" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>