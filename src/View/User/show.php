<div class="info_profile">
    <h1>My profile</h1>
    <p>NAME : <?php echo $_SESSION['name']; ?></p>
    <p>SURNAME : <?php echo $_SESSION['surname']; ?></p>
    <p>BIRTHDAY : <?php echo $_SESSION['birthday']; ?></p>
    <p>EMAIL : <?php echo $_SESSION['email']; ?></p>
    <p>ZIP CODE : <?php echo $_SESSION['zip_code']; ?></p>
    <p>CITY : <?php echo $_SESSION['city']; ?></p>
</div>
<div class="edit_profile">
    <h2 class="account_title">Edit profile information</h2>
    <?php 
    if (isset($message) && ($message != null)) {
        echo $message;
    }
    ?>
    <p>
        <h3 class="account_subtitle">Change password</h3>
        <form method="post" action="show">
            <label for="old_password">Current password : </label>
            <input type="password" name="old_password" required><br>
            <label for="password">New password : </label>
            <input type="password" name="password" required><br>
            <input type="submit" value="Modify">
        </form>
    </p>
    <p>
        <h3 class="account_subtitle">Change e-mail</h3>
        <form method="post" action="show">
            <label for="email">New e-mail : </label>
            <input type="text" name="email" required><br>
            <input type="submit" value="Modify">
        </form>
    </p>
    <p>
        <h3>Delete account</h3>
        <form method="post" action="delete">
            <input type="submit" value="Delete">
        </form>
    </p>
</div>
<div class="logout_profile">
    <p>
        <h2>Log Out</h2>
        <form method="post" action="show">
            <input id="button_logout" type="submit" name="logout" value="Log out">
        </form>
    </p>
</div>