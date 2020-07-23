<div style="padding: 20px">
    <?php if(isset($_SESSION['slug_error'])) : ?>
        <ul style="list-style: none;padding: 0;margin-top: 20px;">
            <li style="color: red; width: 50%">
                <div <?= $_SESSION['slug_error'] ? 'class="alert alert-danger" role="alert"' : '' ?>>
                    <?= $_SESSION['slug_error'] ?>
                </div>
            </li>
        </ul>
    <?php endif; ?>

    <?php if (isset($data['validate']) && is_array($data['validate'])): ?>
        <ul style="list-style: none;padding: 0;margin-top: 20px;">
            <?php foreach ($data['validate'] as $error): ?>
                <li style="color: red; width: 50%">
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error; ?>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form method="post" enctype="multipart/form-data">

        <label for="">Select Sport *</label><br>
        <select class="create_page_inputs" name="selected_sport">
            <option disabled selected>Select Sport</option>
            <?php foreach($data['sports'] as $sport):  ?>
                <option value="<?= $sport['id']?>" ><?= $sport['sport_name']?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="">Select Country *</label><br>
        <select class="create_page_inputs" name="selected_country">
            <option disabled selected>Select Country</option>
            <?php foreach($data['countries'] as $country):  ?>
                <option value="<?= $country['id']?>" ><?= $country['country_name']?></option>
            <?php endforeach; ?>
        </select><br>


        <label for="">Write Post Title *</label><br>
        <input class="create_page_inputs" placeholder="Write Post Title" type="text" name="post_title" value="<?= isset($_POST['post_name']) ? $_POST['post_name'] : null  ?>"/><br>

        <label for="">Write Post Slug *</label><br>
        <input class="create_page_inputs" placeholder="Write Post Slug" type="text" name="post_slug" value="<?= isset($_POST['post_slug']) ? $_POST['post_slug'] : null  ?>"/><br>


        <label for="">Text *</label><br>
        <textarea name="post_text" class="create_page_inputs"
                  placeholder="Write Text" cols="30" rows="10"><?= isset($_POST['post_text']) ? $_POST['post_text'] : null  ?></textarea><br>

        <label for="">Is important news? *</label><br>
        <select class="create_page_inputs" name="selected_important_news">
            <option value="0" >No</option>
            <option value="1" >Yes</option>
        </select><br>

        <label for="">Is armenian news? *</label><br>
        <select class="create_page_inputs" name="selected_armenian_news">
            <option value="0" >No</option>
            <option value="1" >Yes</option>
        </select><br>

        <label for="">Is for banner? *</label><br>
        <select class="create_page_inputs" name="selected_for_banner">
            <option value="0" >No</option>
            <option value="1" >Yes</option>
        </select><br>

        <label for="">Video link</label><br>
        <input class="create_page_inputs" placeholder="Write Video Link" type="text" name="video_link" value="<?= isset($_POST['video_link']) ? $_POST['video_link'] : null  ?>"/><br>

        <label for="">Image</label><br>
        <input class="" type="file" name="post_image" value="<?= isset($_FILES["image"]["name"]) ? $_FILES["image"]["name"] : null  ?>"><br>

        <button class="mt-3 btn btn-success" name="submit" type="submit">CREATE</button>

        <a style="color: #ffffff" class="mt-3 btn btn-info" href="/admin/sort">TABLE</a>
    </form>
</div>