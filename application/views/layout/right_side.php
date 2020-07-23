<aside class="right_content">
    <div class="single_sidebar">
        <h2><span>Կարեվոր Նորություններ</span></h2>
        <ul class="spost_nav">
            <?php
            $where_important_post = 'WHERE is_important = 1';
            foreach (\application\models\Post::getPosts(4,$where_important_post) as $important) : ?>
                <li>
                    <div class="media wow fadeInDown"> <a href="/<?= $important['slug'] ?>" class="media-left"> <img alt="<?= $important['image'] ?>" src="../../../images/<?= $important['image'] ?>"> </a>
                        <div class="media-body">
                            <a href="/<?= $important['slug'] ?>" class="catg_title"> <?= $important['title'] ?></a><br>
                            <span style="color: slategray"><?= substr($important['post_date'], 0, -3)  ?></span>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="single_sidebar">
        <ul style="margin-bottom: 30px" class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">Հղումներ</a></li>
            <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab">Վիդեոբաժին</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="category">
                <div class="single_sidebar wow fadeInDown">
                    <h2><span>Ըստ Սպորտի Տեսակի</span></h2>
                    <ul style="margin-top: 30px;">
                        <?php foreach (\application\models\Sport::getSports() as $sportLink) : ?>
                            <?php if ($sportLink['id'] != '8') : ?>
                                <li class="cat-item"><a href="#">#<?=$sportLink['sport_name'] ?> </a></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <li class="cat-item"><a href="#">#<?= \application\models\Sport::getSports()[5]['sport_name'] ?></a></li>
                    </ul>
                </div>
                <div class="single_sidebar wow fadeInDown">
                    <h2><span>Ըստ Երկրի</span></h2>
                    <ul style="margin-top: 30px;">
                        <?php foreach (\application\models\Country::getCountries() as $countryLink) : ?>
                            <?php if ($countryLink['id'] != '9') : ?>
                                <li class="cat-item"><a href="#">#<?= $countryLink['country_name'] ?></a></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <li class="cat-item"><a href="#">#<?= \application\models\Country::getCountries()[7]['country_name'] ?></a></li>
                    </ul>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="video">
                <div class="vide_area">
                    <iframe width="100%" height="250" src="https://www.youtube.com/embed/fmqEFZUvyqM" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="single_sidebar wow fadeInDown">
        <h2><span>Գործընկեր</span></h2>
        <a class="sideAdd" href="#"><img src="../../../images/add_img.jpg" alt=""></a>
    </div>
</aside>
