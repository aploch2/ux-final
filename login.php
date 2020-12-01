<?php
    $pageTitle = 'Login - TNT Events Inc.';
 
    include('includes/header.html.php');

    // session_start();
    $_SESSION['event-date-1'] = $_POST['event-date-1'];
    $eventDate = $_SESSION['event-date-1'];
    // echo $eventDate;
?>
<main>
    <div class="login-content">
        <div id="login-flex">
            <div id="login-left">
                <form action="registration.php" method="post" name="login-form" class="login-form">
                    <h2>Login</h2>
                    <label for="email" class="input-label">Email Address<br>
                        <input type="email" name="email" class="text-input" required>
                    </label>
                    <br>
                    <label for="password" class="input-label">Password<br>
                        <input type="password" name="password" class="text-input" required>
                    </label>
                    <!-- <br> -->
                    <div class="button-container">
                        <input type="checkbox" name="remember-me">
                        <label for="remember-me">Remember Me</label>
                    </div>
                    <!-- <br> -->
                    <div class="button-container">
                        <button class="button purple">Login</button>
                    </div>
                </form>
            </div>
            <div id="login-right">
                <h2>Register</h2>
                <p>Don't already have an account? Register for one!</p>
                <div class="button-container">
                    <a href="register.php" class="button purple">Register for an Account</a>
                </div>
            </div>
        </div>
    </div>
</main>
<?php 
    include('includes/footer.html.php');
?>