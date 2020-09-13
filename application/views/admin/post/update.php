<?php //debug($data['post']['is_important']) ?>
<div style="padding: 20px">
    <?php if (isset($data['validate']) && is_array($data['validate'])): ?>
        <ul style="list-style: none;padding: 0;margin-top: 20px;">
            <?php foreach ($data['validate'] as $error): ?>
                <li style="color: red; width: 50%">
                    <div  class="alert alert-danger" role="alert">
                        <?php echo $error; ?>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form method="post" enctype="multipart/form-data">

        <label for="">Select Sport *</label><br>
        <select class="create_page_inputs" name="selected_sport">
            <?php foreach($data['sports'] as $sport):  ?>
                <?php var_dump($sport['id']) ?>
                <option <?= $sport['id'] == $data['post']['sport_id'] ? 'selected' : null ?> value="<?= $sport['id']?>" ><?= $sport['sport_name']?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="">Select Country *</label><br>
        <select class="create_page_inputs" name="selected_country">
            <?php foreach($data['countries'] as $country):  ?>
                <option <?= $country['id'] == $data['post']['country_id'] ? 'selected' : null ?> value="<?= $country['id']?>" ><?= $country['country_name']?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="">Write Post Title *</label><br>
        <input class="create_page_inputs" placeholder="Write Post Title" type="text" name="post_title" value="<?= isset($data['post']['title']) ? $data['post']['title'] : null  ?>"/><br>

<!--        <label for="">Text *</label><br>-->
<!--        <textarea name="post_text" class="create_page_inputs"-->
<!--                  placeholder="Write Text" cols="30" rows="10">--><?//= isset($data['post']['text']) ? $data['post']['text'] : null  ?><!--</textarea><br>-->

        <label for="">Text *</label><br>
        <textarea name="post_text" class="create_page_inputs" placeholder="Write Text" id="post_text" cols="30" rows="10">
            <?= isset($data['post']['text']) ? $data['post']['text'] : null  ?>
        </textarea>

        <label for="">Is important news? *</label><br>
        <select class="create_page_inputs" name="selected_important_news">
            <option value="0" <?= $data['post']['is_important'] == '0' ? 'selected' : null ?> >No</option>
            <option value="1" <?= $data['post']['is_important'] == '1' ? 'selected' : null ?> >Yes</option>
        </select><br>

        <label for="">Is armenian news? *</label><br>
        <select class="create_page_inputs" name="selected_armenian_news">
            <option value="0" <?= $data['post']['is_armenian_news'] == '0' ? 'selected' : null ?> >No</option>
            <option value="1" <?= $data['post']['is_armenian_news'] == '1' ? 'selected' : null ?> >Yes</option>
        </select><br>

        <label for="">Is for banner? *</label><br>
        <select class="create_page_inputs" name="selected_for_banner">
            <option value="0" <?= $data['post']['is_for_banner'] == '0' ? 'selected' : null ?> >No</option>
            <option value="1" <?= $data['post']['is_for_banner'] == '1' ? 'selected' : null ?> >Yes</option>
        </select><br>

        <label for="">Video link</label><br>
        <textarea name="video_link" class="create_page_inputs"
                  placeholder="Write Video Link" cols="30" rows="10"><?= isset($data['post']['video_link']) ? $data['post']['video_link'] : null  ?></textarea><br>

        <label for="">Image</label><br>
        <input class="" type="file" name="post_image" value="<?= isset($_FILES["image"]["name"]) ? $_FILES["image"]["name"] : null  ?>"><br>

        <button class="mt-3 btn btn-success" name="submit" type="submit">UPDATE</button>

        <a style="color: #ffffff" class="mt-3 btn btn-info" href="/admin/post">TABLE</a>
    </form>
</div>