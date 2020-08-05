<?php //debug($data) ?>
<section id="contentSection">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="left_content">
                <div class="single_page">
                    <ol class="breadcrumb">
                        <li><a href="/">Գլխավոր</a></li>
                        <li class="active"><?= $data['sport'][0]['sport_name'] ?></li>
                    </ol>
                    <h1><?= $data['post']['title'] ?></h1>
                    <div class="single_page_content"> <img style="margin: 0px 0px 20px 0px;" class="img-center" src="../../../images/<?= $data['post']['image'] ?>" alt="">
                        <p><?= $data['post']['text'] ?></p>
                        <?php if ($data['post']['video_link'] != null) : ?>
                            <div role="tabpanel" class="tab-pane" id="video">
                                <div class="vide_area">
                                    <?= $data['post']['video_link'] ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <p style="color: #ff7512"><b><?= $data['post']['post_date'] ?></b></p>
                    </div>
                    <div class="social_link">
                        <ul class="social_nav">
                            <li class="facebook"><a href="#"><img style="width: 28px;padding: 2px 2px 0px 1px;" src="../../../assets/css/images/facebook_logo.png" alt=""></a></li>
                            <li class="flickr"><a href="#"><img style="width: 28px;padding: 2px 2px 0px 1px;" src="../../../assets/css/images/600px-Instagram_icon.png" alt=""></a></li>
                            <li class="mail"><a href="#"><img style="width: 30px;padding: 5px 2px 0px 1px;" src="../../../assets/css/images/gmail-logo-3.png" alt=""></a></li>
                            <li class="youtube"><a href="#"><img style="width: 60px;padding: 6px 10px 0px 9px" src="../../../assets/css/images/800px-YouTube_Logo.svg.png" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="related_post">
                        <ul class="spost_nav wow fadeInDown animated">
                            <?php foreach($data['relatedPosts'] as $relatedPost) : ?>
                                <?php if ($relatedPost['country_id'] == $data['post']['country_id'] && $relatedPost['sport_id'] == $data['post']['sport_id']) : ?>
                                <li>
                                    <div class="media"> <a class="media-left" href="/<?= $relatedPost['slug'] ?>"> <img st src="../../../images/<?= $relatedPost['image'] ?>" alt="<?= $relatedPost['image'] ?>"> </a>
                                        <div class="media-body"> <a class="catg_title" href="/<?= $relatedPost['slug'] ?>"> <?= substr($relatedPost['title'],0,97).'...' ?></a> </div>
                                        <b style="color: #ff7512;"><?= $relatedPost['post_date'] ?></b>
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