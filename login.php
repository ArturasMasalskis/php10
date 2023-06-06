<?php 

include 'header.php';

?>

<section class="signup_container">
    <div class="main_login">
        <h2>Log In</h2>
        <form class="login-form" action="login.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" name="submit">Log In</button>
        </form>
        <button class="signup-button">
            <a href="signup.php">Sign Up</a>
        </button>
    </div>
</section>

<?php 

include 'footer.php';

?>





