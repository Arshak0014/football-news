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

        <label for="">Sport Name *</label><br>
        <input class="create_page_inputs" placeholder="Write Sport Name" type="text" name="sport_name" value="<?= isset($data['sport']['sport_name']) ? $data['sport']['sport_name'] : null  ?>"/><br>

        <label for="">Icon-image *</label><br>
        <input class="create_page_inputs" placeholder="Icon-image" type="text" name="icon_image" value="<?= isset($data['sport']['icon_image']) ? $data['sport']['icon_image'] : null  ?>"/><br>

        <button class="mt-3 btn btn-success" name="submit" type="submit">UPDATE</button>

        <a style="color: #ffffff" class="mt-3 btn btn-info" href="/admin/sport">TABLE</a>
    </form>
</div>