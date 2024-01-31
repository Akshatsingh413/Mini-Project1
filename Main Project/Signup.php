<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="index.css">
    <title>Sign Up</title>
</head>

<body>
    <div id="header" class="intro-bg">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="" alt="No Image">
                </div>
                <div class="col-7">
                    <div class="nav justify-content-center">
                        <div class="nav">
                            <a href="index.php" class="nav-link white pt-3">Home</a>
                            <a href="" class="nav-link white pt-3">Services</a>
                            <a href="" class="nav-link white pt-3">About Us</a>
                            <a href="" class="nav-link white pt-3">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <button class="mt-2 login-btn white"><a href="login.php" id="mlogin">Log in</a></button>
                    <button class="mt-2 login-btn white"><a href="Signup.php" id="mlogin">Sign Up</a></button>
                </div>
            </div>
            <div class="form">
                <form action="process.php" method="post">
                    <h4 class="Sign-up-heading">Sign Up</h4>
                    <label id="Signup-label">First Name*</label>
                    <input id="Signup-input" type="text" name="fname" placeholder="First Name" required>
                    <label id="Signup-label">Last Name</label>
                    <input id="Signup-input" type="text" name="lname" placeholder="Last Name">
                    <label id="Signup-label">E-Mail Address*</label>
                    <input id="Signup-input" type="email" name="email" placeholder="Enter E-mail " required>
                    <label id="Signup-label">Mobile Number*</label>
                    <input id="Signup-input" type="tel" name="number" placeholder="Mobile Number" required>
                    <label id="Signup-label">Password*</label>
                    <input id="Signup-input" type="password" name="password" class="password" placeholder="Password" required>
                    <i class="fa-solid fa-eye" id="show1-password"></i>
                    <div>
                        <input id="Signup-input" type="checkbox" name="terms">
                        <p id="terms">I agree to the <a href="">Terms & Conditions</a></p>
                    </div>
                    <button id="signup" name="signup" type="submit">Sign Up</button>
                    <p id="sin">Already have a account? <a href="login.php">Sign in</a></p>
                </form>
            </div>
        </div>
    </div>
    <div id="footer" class="black-bg footer-height">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="" alt="LOGO">
                </div>
                <div class="col">
                    <h5 class="test-head-height white footer-font-h">COMPANY</h5>
                    <a href="" class="nav-link white footer-font-l">About</a>
                    <a href="" class="nav-link white footer-font-l">Blog</a>
                    <a href="" class="nav-link white footer-font-l">Services</a>
                    <a href="" class="nav-link white footer-font-l">Appointment</a>
                </div>
                <div class="col">
                    <h5 class="test-head-height white footer-font-h">QUICK LINKS</h5>
                    <a href="login.html" class="nav-link white footer-font-l">Login</a>
                    <a href="Signup.html" class="nav-link white footer-font-l">Sign up</a>
                    <a href="" class="nav-link white footer-font-l">Forget</a>
                    <a href="" class="nav-link white footer-font-l">Members</a>
                </div>
                <div class="col">
                    <h5 class="test-head-height white footer-font-h">HELP</h5>
                </div>
            </div>
        </div>
    </div>
    <script>
        const showPassword = document.querySelector('#show1-password')
        const passwordField = document.querySelector('.password')

        showPassword.addEventListener("click", function() {
            this.classList.toggle("fa-eye-slash");
            const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
            passwordField.setAttribute("type", type);
        })
    </script>
</body>

</html>