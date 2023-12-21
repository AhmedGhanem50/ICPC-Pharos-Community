<!-- The HTML document structure -->
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta information for character set and viewport -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title of the page -->
    <title>Sign Up</title>
    <!-- Link to Google Fonts and external stylesheet -->
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/Log_in_Sign-In.css">
</head>
<body>

<!-- Container for the sign-up content -->
<div class="signup-container">
    <!-- Image section -->
    <img src="img/login_signup.png" alt="Image" class="signup-image">
    <!-- Content section -->
    <div class="signup-content">
        <!-- Sign-up title and slogan -->
        <h2 id="title">Sign Up</h2>
        <p id="sentance-coding">Coding is not a skill, it’s a mindset</p>
        <!-- Sign-up form -->
        <form class="signup-form">
            <!-- Input fields for username, email, and password -->
            <div class="input-field">
                <input type="text" placeholder="Username">
            </div>
            <div class="input-field">
                <input type="email" placeholder="email@gmail.com">
            </div>
            <div class="input-field">
                <input type="password" placeholder="Password">
            </div>
            <!-- Sign-up button -->
            <button  type="submit" class="signup-button">Sign Up</button>
        </form>
        <!-- Login link -->
        <p class="login-link"><strong>Do you have an account?</strong><a class="link-hover" href="LogIn.html">Login</a></p>
        <!-- Social icons section -->
        <div class="social-icons">
            <a href="#" target="_blank" class="fa fa-facebook link-hover-icon"></a>
            <a href="#" target="_blank" class="fa fa-google link-hover-icon"></a>
            
        </div>
    </div>
</div>

</body>
</html>
