<?php //echo '<pre>'; var_dump($data['bannerPosts']); echo '</pre>'; ?>
<section id="sliderSection">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="slick_slider">
                <?php foreach ($data['bannerPosts'] as $bannerPost) : ?>
                <div class="single_iteam">
                    <a href="/<?= $bannerPost['slug'] ?>">
                        <img src="images/<?= $bannerPost['image'] ?>" alt="<?= $bannerPost['image'] ?>">
                    </a>
                    <div class="slider_article">
                        <h2><a class="slider_tittle" href="/<?= $bannerPost['slug'] ?>"><?= $bannerPost['title'] ?></a></h2>
                        <p><?= substr($bannerPost['text'],0,375) ?> ...</p>
                        <b style="color: lightgray;"><?= substr($bannerPost['post_date'], 0, -3)  ?></b>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <?php include 'application/views/layout/right_news.php'; ?>
        </div>
    </div>
</section>
<section id="contentSection">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="left_content">
                <?php if ($data['armenianNews'] != []) : ?>
                <div class="single_post_content">
                    <h2><span>Նորություններ Հայաստանից</span></h2>
                    <div class="single_post_content_left">
                        <ul class="business_catgnav  wow fadeInDown">
                            <li>
                                <figure class="bsbig_fig">
                                    <a href="/<?= $data['armenianNews'][0]['slug'] ?>" class="featured_img">
                                        <img alt="<?= $data['armenianNews'][0]['image'] ?>" src="images/<?= $data['armenianNews'][0]['image'] ?>">
                                        <span class="overlay"></span>
                                    </a>
                                    <figcaption>
                                        <a href="/<?= $data['armenianNews'][0]['slug'] ?>">
                                            <?= $data['armenianNews'][0]['title'] ?>
                                        </a>
                                    </figcaption>
                                    <p><?= substr($data['armenianNews'][0]['text'],0,125) ?> . . .</p>
                                    <span style="color: slategray"><?= substr($data['armenianNews'][0]['post_date'], 0, -3)  ?></span>
                                </figure>
                            </li>
                        </ul>
                    </div>
                    <div class="single_post_content_right">
                        <ul class="spost_nav">
                            <?php
                            array_shift($data['armenianNews']);
                            foreach ($data['armenianNews'] as $arm) : ?>
                            <li>
                                <div class="media wow fadeInDown"> <a href="/<?= $arm['slug'] ?>" class="media-left"> <img alt="<?= $arm['image'] ?>" src="images/<?= $arm['image'] ?>"> </a>
                                    <div class="media-body">
                                        <a href="/<?= $arm['slug'] ?>" class="catg_title"> <?= $arm['title'] ?></a><br>
                                        <span style="color: slategray"><?= substr($arm['post_date'], 0, -3)  ?></span>
                                    </div>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <?php endif; ?>
                <div class="fashion_technology_area">
                    <?php if ($data['footballNews'] != []) : ?>
                    <div class="fashion">
                        <div class="single_post_content">
                            <h2><span>Ֆուտբոլ</span></h2>
                            <ul class="business_catgnav wow fadeInDown">
                                <li>
                                    <figure style="margin-bottom: 20px" class="bsbig_fig">
                                        <a href="/<?= $data['footballNews'][0]['slug'] ?>" class="featured_img">
                                            <img alt="<?= $data['footballNews'][0]['image'] ?>" src="images/<?= $data['footballNews'][0]['image'] ?>">
                                            <span class="overlay"></span>
                                        </a>
                                        <figcaption>
                                            <a href="/<?= $data['footballNews'][0]['slug'] ?>">
                                                <?= $data['footballNews'][0]['title'] ?>
                                            </a>
                                        </figcaption>
                                        <p><?= substr($data['footballNews'][0]['text'],0,200) ?> . . .</p>
                                        <span style="color: slategray"><?= substr($data['footballNews'][0]['post_date'], 0, -3)  ?></span>
                                    </figure>
                                </li>
                            </ul>
                            <ul class="spost_nav">
                                <?php
                                array_shift($data['footballNews']);
                                foreach ($data['footballNews'] as $footNews) : ?>
                                <li>
                                    <div class="media wow fadeInDown"> <a href="/<?= $footNews['slug'] ?>" class="media-left"> <img alt="<?= $footNews['image'] ?>" src="images/<?= $footNews['image'] ?>"> </a>
                                        <div class="media-body">
                                            <a href="/<?= $footNews['slug'] ?>" class="catg_title"> <?= $footNews['title'] ?></a><br>
                                            <span style="color: slategray"><?= substr($footNews['post_date'], 0, -3)  ?></span>
                                        </div>
                                    </div>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if ($data['tennisNews'] != []) : ?>
                    <div class="technology">
                        <div class="single_post_content">
                            <h2><span>Թենիս</span></h2>
                            <ul class="business_catgnav wow fadeInDown">
                                <li>
                                    <figure style="margin-bottom: 20px" class="bsbig_fig">
                                        <a href="/<?= $data['tennisNews'][0]['slug'] ?>" class="featured_img">
                                            <img alt="<?= $data['tennisNews'][0]['image'] ?>" src="images/<?= $data['tennisNews'][0]['image'] ?>">
                                            <span class="overlay"></span>
                                        </a>
                                        <figcaption>
                                            <a href="/<?= $data['tennisNews'][0]['slug'] ?>">
                                                <?= $data['tennisNews'][0]['title'] ?>
                                            </a>
                                        </figcaption>
                                        <p><?= substr($data['tennisNews'][0]['text'],0,200) ?> . . .</p>
                                        <span style="color: slategray"><?= substr($data['tennisNews'][0]['post_date'], 0, -3)  ?></span>
                                    </figure>
                                </li>
                            </ul>
                            <ul class="spost_nav">
                                <?php
                                array_shift($data['tennisNews']);
                                foreach ($data['tennisNews'] as $tennNews) : ?>
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="/<?= $tennNews['slug'] ?>" class="media-left"> <img alt="<?= $tennNews['image'] ?>" src="images/<?= $tennNews['image'] ?>"> </a>
                                            <div class="media-body">
                                                <a href="/<?= $tennNews['slug'] ?>" class="catg_title"> <?= $tennNews['title'] ?></a><br>
                                                <span style="color: slategray"><?= substr($tennNews['post_date'], 0, -3)  ?></span>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="fashion_technology_area">
                    <?php if ($data['basketballNews'] != []) : ?>
                    <div class="fashion">
                        <div class="single_post_content">
                            <h2><span>Բասկետբոլ</span></h2>
                            <ul class="business_catgnav wow fadeInDown">
                                <li>
                                    <figure style="margin-bottom: 20px" class="bsbig_fig">
                                        <a href="/<?= $data['basketballNews'][0]['slug'] ?>" class="featured_img">
                                            <img alt="<?= $data['basketballNews'][0]['image'] ?>" src="images/<?= $data['basketballNews'][0]['image'] ?>">
                                            <span class="overlay"></span>
                                        </a>
                                        <figcaption>
                                            <a href="/<?= $data['basketballNews'][0]['slug'] ?>">
                                                <?= $data['basketballNews'][0]['title'] ?>
                                            </a>
                                        </figcaption>
                                        <p><?= substr($data['basketballNews'][0]['text'],0,200) ?> . . .</p>
                                        <span style="color: slategray"><?= substr($data['basketballNews'][0]['post_date'], 0, -3)  ?></span>
                                    </figure>
                                </li>
                            </ul>
                            <ul class="spost_nav">
                                <?php
                                array_shift($data['basketballNews']);
                                foreach ($data['basketballNews'] as $basketNews) : ?>
                                    <li>
                                        <div class="media wow fadeInDown">
                                            <a href="/<?= $basketNews['slug'] ?>" class="media-left">
                                                <img alt="<?= $basketNews['image'] ?>" src="images/<?= $basketNews['image'] ?>">
                                            </a>
                                            <div class="media-body">
                                                <a href="/<?= $basketNews['slug'] ?>" class="catg_title"> <?= $basketNews['title'] ?></a><br>
                                                <span style="color: slategray"><?= substr($basketNews['post_date'], 0, -3)  ?></span>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if ($data['otherNews'] != []) : ?>
                    <div class="technology">
                        <div class="single_post_content">
                            <h2><span>Այլ</span></h2>
                            <ul class="business_catgnav wow fadeInDown">
                                <li>
                                    <figure style="margin-bottom: 20px" class="bsbig_fig">
                                        <a href="/<?= $data['otherNews'][0]['slug'] ?>" class="featured_img">
                                            <img alt="<?= $data['otherNews'][0]['image'] ?>" src="images/<?= $data['otherNews'][0]['image'] ?>">
                                            <span class="overlay"></span>
                                        </a>
                                        <figcaption>
                                            <a href="/<?= $data['otherNews'][0]['slug'] ?>">
                                                <?= $data['otherNews'][0]['title'] ?>
                                            </a>
                                        </figcaption>
                                        <p><?= substr($data['otherNews'][0]['text'],0,200) ?> . . .</p>
                                        <span style="color: slategray"><?= substr($data['otherNews'][0]['post_date'], 0, -3)  ?></span>
                                    </figure>
                                </li>
                            </ul>
                            <ul class="spost_nav">
                                <?php
                                array_shift($data['otherNews']);
                                foreach ($data['otherNews'] as $othNews) : ?>
                                    <li>
                                        <div class="media wow fadeInDown"> <a href="/<?= $othNews['slug'] ?>" class="media-left"> <img alt="<?= $othNews['image'] ?>" src="images/<?= $othNews['image'] ?>"> </a>
                                            <div class="media-body">
                                                <a href="/<?= $othNews['slug'] ?>" class="catg_title"> <?= $othNews['title'] ?></a><br>
                                                <span style="color: slategray"><?= substr($othNews['post_date'], 0, -3)  ?></span>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <?php include 'application/views/layout/right_side.php'?>
        </div>

    </div>
</section>
