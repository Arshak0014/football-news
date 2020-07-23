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
    <form method="post">

        <label for="">Write Sport Name *</label><br>
        <input class="create_page_inputs" placeholder="Write Sport Name" type="text" name="sport_name" value="<?= isset($_POST['sport_name']) ? $_POST['sport_name'] : null  ?>"/><br>

        <label for="">Icon-image *</label><br>
        <input class="create_page_inputs" placeholder="Icon-image" type="text" name="icon_image" value="<?= isset($_POST['icon_image']) ? $_POST['icon_image'] : null  ?>"/><br>

        <button class="mt-3 btn btn-success" name="submit" type="submit">CREATE</button>

        <a style="color: #ffffff" class="mt-3 btn btn-info" href="/admin/sport">TABLE</a>
    </form>
</div>