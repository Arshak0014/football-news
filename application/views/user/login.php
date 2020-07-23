<div  class="mt-4" style="padding: 20px;margin-top: 250px;">
    <?php if (isset($_SESSION['login_err'])) : ?>
        <ul style="list-style: none;padding: 0;margin-top: 20px;">
            <li style="color: red;">
                <div style="width: 50%" class="alert alert-danger" role="alert">
                    <?php echo $_SESSION['login_err']; ?>
                </div>
            </li>
        </ul>
    <?php endif; ?>
    <?php if (isset($data['errors']) && is_array($data['errors'])): ?>
        <ul style="list-style: none;padding: 0;margin-top: 20px;">
            <?php foreach ($data['errors'] as $error): ?>
                <li style="color: red;">
                    <div style="width: 50%" class="alert alert-danger" role="alert">
                        <?php echo $error; ?>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <form method="post">

        <label class="mt-4" for="">Login</label><br>
        <input class="create_page_inputs" placeholder="Write Film Name" type="text" name="username" value="<?= !empty($_POST['username']) ? $_POST['username'] : null ?>"/><br>

        <label for="">Password</label><br>
        <input class="create_page_inputs" placeholder="Write Film Name" type="password" name="password" value="<?= !empty($_POST['password']) ? $_POST['password'] : null ?>"/><br>

        <button class="mt-3 btn btn-success" name="submit" type="submit">Log In</button>
    </form>
    </div>


