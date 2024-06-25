<!-- app/Views/Home/loginform_view.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
</head>
<body>
    <div class="form-container">
        <img src="<?= base_url('logo.png') ?>" class="imglogo">
        <form method="post" action="login/process_login">
        <?= csrf_field() ?>
            <h3>Login Now</h3>
            <?php if (!empty($error)): ?>
                <span class="error-msg"><?= $error ?></span>
            <?php endif; ?>
                <input type="email" name="email" required placeholder="Enter your email">
                <input type="password" name="password" required placeholder="Enter your password">
                <input type="submit" name="submit" value="Login" class="form-btn">
           
            <p>Don't have an account? <a href="<?= base_url('register_form') ?>">Register Now</a></p>
            </form>
    </div>
</body>
</html>
