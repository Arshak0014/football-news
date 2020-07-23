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
    <!--[if lt IE 9]>
    <script src="../../../assets/js/html5shiv.min.js"></script>
    <script src="../../../assets/js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div style="overflow: hidden;">
    <header id="header">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="header_top">
                    <div style="float: right" class="header_top_right">
                        <p class="date_main" id="clock"></p><p class="date_main"><?= date("d/m/Y") ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="header_bottom">
                    <div class="logo_area"><a href="/" class="logo"><img src="../../../images/logo.jpg" alt=""></a></div>
                    <div class="add_banner"><a href="#"><img src="../../../images/addbanner_728x90_V1.jpg" alt=""></a></div>
                </div>
            </div>
        </div>
    </header>
    <section id="navArea">
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div style="background: #014a46" id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav main_nav">
                    <li class="active"><a href="/"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
                    <?php foreach (\application\models\Sport::getSports() as $sport) : ?>
                        <?php if ($sport['id'] != '8') : ?>
                        <li><a href="/category/<?= $sport['id'] ?>"><?= $sport['sport_name'] ?></a></li>
                        <?php endif;?>
                    <?php endforeach; ?>
                    <li><a href="/category/<?= \application\models\Sport::getSports()[5]['id'] ?>"><?= \application\models\Sport::getSports()[5]['sport_name'] ?></a></li>
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
                            <li class="facebook"><a href="#"></a></li>
                            <li class="twitter"><a href="#"></a></li>
                            <li class="mail"><a href="#"></a></li>
                            <li class="googleplus"><a href="#"></a></li>
                            <li class="youtube"><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>