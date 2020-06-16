<h1>Login</h1>
<form method="post" action="login">
    <p>Email : <input type="text" name="email" placeholder="Enter your email" required></p>
    <p>Password : <input type="password" name="password" placeholder="Enter your password" required></p>
    <input type="submit" value="Log In">
</form>
<?php 
if (isset($message) && ($message != null)) {
    echo $message;
}
?>