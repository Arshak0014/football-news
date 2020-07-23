<section id="contentSection">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="left_content">
                <div class="single_page">

                    <h1><?= $data['post']['title'] ?></h1>
                    <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i>Wpfreeware</a> <span><i class="fa fa-calendar"></i>6:49 AM</span> <a href="#"><i class="fa fa-tags"></i>Technology</a> </div>
                    <div class="single_page_content"> <img style="margin: 0px 0px 20px 0px;" class="img-center" src="../../../images/<?= $data['post']['image'] ?>" alt="">
                        <p><?= $data['post']['text'] ?></p>
                        <?php if ($data['post']['video_link'] != null) : ?>
                            <div role="tabpanel" class="tab-pane" id="video">
                                <div class="vide_area">
                                    <iframe width="100%" height="600px" src="<?= $data['post']['video_link'] ?>" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        <?php endif; ?>
                        <p style="color: #ff7512"><b><?= $data['post']['post_date'] ?></b></p>
                    </div>
                    <div class="social_link">
                        <ul class="social_nav">
                            <li class="facebook"><a href="#"></a></li>
                            <li class="twitter"><a href="#"></a></li>
                            <li class="mail"><a href="#"></a></li>
                            <li class="googleplus"><a href="#"></a></li>
                            <li class="youtube"><a href="#"></a></li>
                        </ul>
                    </div>
                    <div class="related_post">
                        <ul class="spost_nav wow fadeInDown animated">
                            <?php foreach($data['relatedPosts'] as $relatedPost) : ?>
                                <?php if ($relatedPost['country_id'] == $data['post']['country_id'] && $relatedPost['sport_id'] == $data['post']['sport_id']) : ?>
                                <li>
                                    <div class="media"> <a class="media-left" href="/<?= $relatedPost['slug'] ?>"> <img src="../../../images/<?= $relatedPost['image'] ?>" alt="<?= $relatedPost['image'] ?>"> </a>
                                        <div class="media-body"> <a class="catg_title" href="/<?= $relatedPost['slug'] ?>"> <?= substr($relatedPost['title'],0,97).'...' ?></a> </div>
                                        <p style="color: #ff7512;"><?= $relatedPost['post_date'] ?></p>
                                        <hr>
                                    </div>
                                </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4">
            <aside class="right_content">
                <?php include 'application/views/layout/right_news.php'; ?>
            </aside>
            <?php include "application/views/layout/right_side.php"; ?>
        </div>

    </div>
</section>