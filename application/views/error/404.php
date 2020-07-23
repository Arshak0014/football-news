<!DOCTYPE html>
<html>
<head>
    <title>Not Found</title>
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

    <div align="center" class="main_error">
        <div id="notfound">
            <div class="notfound">
                <div class="notfound-404">
                    <h1>404</h1>
                </div>
                <h2>ՏՎՅԱԼ ԷՋԸ ՉԻ ԳՏՆՎԵԼ :(</h2>
            </div>
        </div>
    </div>

    <footer id="footer">
        <div class="footer_top">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="footer_widget wow fadeInLeftBig">
                        <h2>Flickr Images</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="footer_widget wow fadeInDown">
                        <h2>Tag</h2>
                        <ul class="tag_nav">
                            <li><a href="#">Games</a></li>
                            <li><a href="#">Sports</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Life &amp; Style</a></li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Photo</a></li>
                            <li><a href="#">Slider</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="footer_widget wow fadeInRightBig">
                        <h2>Contact</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <address>
                            Perfect News,1238 S . 123 St.Suite 25 Town City 3333,USA Phone: 123-326-789 Fax: 123-546-567
                        </address>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <p class="copyright">Copyright &copy; <script>document.write(new Date().getFullYear())</script> <b><a href="/">freekick.am</a></b></p>
            <p class="developer"> </p>
        </div>
    </footer>
</div>
<script src="../../../assets/js/jquery.min.js"></script>
<script src="../../../assets/js/wow.min.js"></script>
<script src="../../../assets/js/bootstrap.min.js"></script>
<script src="../../../assets/js/slick.min.js"></script>
<script src="../../../assets/js/jquery.li-scroller.1.0.js"></script>
<script src="../../../assets/js/jquery.newsTicker.min.js"></script>
<script src="../../../assets/js/jquery.fancybox.pack.js"></script>
<script src="../../../assets/js/custom.js"></script>
<script>
    var myVar = setInterval(function() {
        myTimer();
    }, 1000);

    function myTimer() {
        var d = new Date();
        document.getElementById("clock").innerHTML = d.toLocaleTimeString();
    }

</script>
</body>
</html>