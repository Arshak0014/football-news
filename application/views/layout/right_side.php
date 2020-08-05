<aside class="right_content">
    <div class="single_sidebar">
        <h2 style="margin-bottom: 20px;"><span>Կարեվոր</span></h2>
        <ul class="spost_nav">
            <?php
            $where_important_post = 'WHERE is_important = 1';
            foreach (\application\models\Post::getPosts(4,$where_important_post) as $important) : ?>
                <li style="border-bottom: 1px solid #ff7512">
                    <div class="media wow fadeInDown"> <a href="/<?= $important['slug'] ?>" class="media-left"> <img alt="<?= $important['image'] ?>" src="../../../images/<?= $important['image'] ?>"> </a>
                        <div class="media-body">
                            <a href="/<?= $important['slug'] ?>" class="catg_title"> <b><?= $important['title'] ?></b></a><br>
                            <b style="color: #ff7512"><?= substr($important['post_date'], 0, -3)  ?></b>
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
                    <ul style="margin-top: 30px;">
                        <?php foreach (\application\models\Sport::getSports() as $sportLink) : ?>
                            <?php if ($sportLink['id'] != '8') : ?>
                                <li class="cat-item"><a href="/category/<?= $sportLink['slug'] ?>/1"><b>#<?=$sportLink['sport_name'] ?></b> </a></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <li class="cat-item"><a href="/category/<?= \application\models\Sport::getSports()[4]['slug'] ?>/1"><b>#<?= \application\models\Sport::getSports()[4]['sport_name'] ?></b></a></li>
                    </ul>
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
