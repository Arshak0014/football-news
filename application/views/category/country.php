<section id="contentSection">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="category">
                <div class="single_post_content">
                    <ol class="breadcrumb">
                        <li><a href="/">Գլխավոր</a></li>
                        <li><a href="/category/<?= $data['sport']['slug'] ?>"><?= $data['sport']['sport_name'] ?></a></li>
                        <li class="active"><?= $data['country']['country_name'] ?></li>
                    </ol>
                    <ul class="spost_nav">
                        <?php if (isset($data['posts'])) : ?>
                            <?php foreach ($data['posts'] as $post) : ?>
                                <li>
                                    <div class="media wow fadeInDown"> <a href="/<?= $post['slug'] ?>" class="category-main media-left"> <img alt="<?= $post['image'] ?>" src="../../../images/<?= $post['image'] ?>"> </a>
                                        <div class="media-body">
                                            <a href="/<?= $post['slug'] ?>" class="catg_title"><?= $post['title'] ?></a><br>
                                            <span style="color: slategray"><?= $post['post_date'] ?></span>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
<!--            <div align="left" style="margin: 13px 25px 33px 0px;">-->
<!--                --><?php
//                $url = trim($_SERVER['REQUEST_URI'],'/');
//                $arrUrl = explode('/', $url);
//                $post_sport_id = '';
//
//                foreach ($data['posts'] as $post){
//                    if (isset($post) && $post['sport_id'] == $data['sport']['id']){
//                        $post_sport_id = $post['sport_id'];
//                    }
//                    else{
//                        echo 'no result';
//                    }
//                }
//
//                $pagination = new \application\components\Pagination('/category/'.$arrUrl[1].'/','posts','30','30');
//                if ($post_sport_id != ''){
//                    $pagination->html('where sport_id = '.$post_sport_id);
//                }
//                else echo '<h2 align="center">Չի գտնվել որևէ արդյունք:</h2>';
//
//                ?>
<!--            </div>-->
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <?php include 'application/views/layout/right_news.php'; ?>
            <?php include 'application/views/layout/right_side.php'; ?>
        </div>
    </div>
</section>
