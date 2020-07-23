<div class="latest_post">
    <h2><span>Լրահոս</span></h2>
    <div class="latest_post_container">
        <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
        <ul class="latest_postnav">
            <?php foreach (\application\models\Post::getPosts(100) as $post) : ?>
                <li>
                    <div class="media"> <a href="/<?= $post['slug'] ?>" class="media-left"> <img alt="<?= $post['image'] ?>" src="../../../images/<?= $post['image'] ?>"> </a>
                        <div class="media-body">
                            <a href="/<?= $post['slug'] ?>" class="catg_title"> <?= $post['title'] ?></a><br>
                            <span style="color: slategray"><?= substr($post['post_date'], 0, -3)  ?></span>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
        <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
    </div>
</div>