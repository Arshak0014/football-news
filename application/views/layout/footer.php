<footer id="footer">
    <div class="footer_top">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="footer_widget wow fadeInLeftBig">
                    <h2>FreeKick.am</h2>
                    <div style=" width: 102%;" class="logo_area">
                        <a href="/" class="logo"><img src="../../../images/logo.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="footer_widget wow fadeInDown">
                    <h2>Sports</h2>
                    <ul class="tag_nav">
                        <?php foreach (\application\models\Sport::getSports() as $sport) : ?>
                            <?php if ($sport['id'] != '8') : ?>
                            <li><a href="/category/<?= $sport['slug'] ?>"><?= $sport['sport_name'] ?></a></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <li><a href="/category/<?= \application\models\Sport::getSports()['5']['slug'] ?>"><?= \application\models\Sport::getSports()['5']['sport_name'] ?></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="footer_widget wow fadeInDown">
                    <h2>Countries</h2>
                    <ul class="tag_nav">
                        <?php foreach (\application\models\Country::getCountries() as $country) : ?>
                            <?php if ($country['id'] != '9') : ?>
                            <li><a href="#"><?= $country['country_name'] ?></a></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <li><a href=""><?= \application\models\Country::getCountries()['7']['country_name'] ?></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="footer_widget wow fadeInRightBig">
                    <h2>Contact</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <div>
                        <span style="font-size: 16px;">Էլ-հասցե: <i style="color: #ff7512;"><b>free_kick@gmail.com</i></b></span>
                        <span style="font-size: 16px;">Հեռախոսահամար: <i style="color: #ff7512;"><b>+37494930283</b></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <p style="margin: 0" class="copyright">Copyright &copy; <script>document.write(new Date().getFullYear())</script> <b><a href="/">freekick.am</a></b></p>
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