<?php 

include 'header.php';

?>

<section class="signup_container">
    <div class="main_signup">
        <h2>Sign Up</h2>
        <form class="signup-form" action="php/plswork.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="text" name="email" placeholder="Email">
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</section>
<?php 

include 'footer.php';

?>