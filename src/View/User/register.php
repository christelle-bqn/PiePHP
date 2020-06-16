<div class="form_register">
    <h1>Register</h1>
    <form method="post" action="register">
        <p>Surname : <input type="text" name="surname" placeholder="Enter your surname" required></p>
        <p>Name : <input type="text" name="name" placeholder="Enter your name" required></p>
        <p>Birthday : <input type="date" name="birthday" required></p>
        <p>Email : <input type="text" name="email" placeholder="Enter an email" required></p>
        <p>Password : <input type="password" name="password" placeholder="Enter a password" required></p>
        <p>Zip Code : <input type="text" name="zip_code" placeholder="Enter a zipcode" required></p>
        <p>City : <input type="text" name="city" placeholder="Enter a city" required></p>
        <input type="submit" value="Sign In">
    </form>
</div>
<?php 
if (isset($message) && ($message != null)) {
    echo $message;
}
?>