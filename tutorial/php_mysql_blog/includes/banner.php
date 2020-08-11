<?php if (isset($_SESSION["user"]["username"])) : ?>
    <div class="logged_in_info">
        <span>welcome <?php echo $_SESSION["user"]["username"]; ?></span>
        |
        <span><a href="logout.php">log out</a></span>
    </div>
<?php else : ?>
    <div class="banner">
        <div class="welcome_msg">
            <h1>Today's Inspiration</h1>
            <p>
                One day your life <br>
                will flash before your eyes. <br>
                Make sure it's worth watching. <br>
                <span>~ Gerard Way</span>
            </p>
            <a href="register.php" class="btn">Join us!</a>
        </div>

        <div class="login_div">
            <form action="<?php echo BASE_URL . "/index.php"; ?>" method="post">
                <h2>Login</h2>
                <div style="width: 60%;margin: 0px auto;">
                    <?php include ROOT_PATH . '/includes/errors.php'; ?>
                </div>
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <button type="submit" class="btn" name="login_btn">Sign in</button>
            </form>
        </div>
    </div>
<?php endif; ?>