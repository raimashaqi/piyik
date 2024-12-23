<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - PIYIK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="css/signin.css" rel="stylesheet">
</head>

<body>
    <div class="signin-container">
        <div class="row">
            <!-- Logo Section (Left Side) -->
            <div class="col-md-5">
                <div class="logo-wrapper">
                    <img src="img/Piyik.png" alt="Piyik Logo" class="logo-img">
                </div>
            </div>
            
            <!-- Form Section (Right Side) -->
            <div class="col-md-7">
                <h1>Sign In</h1>
                <form id="signinForm" onsubmit="return validateSigninForm(event)">
                    <div class="input-group">
                        <span class="input-icon">
                            <i class="fas fa-user"></i>
                        </span>
                        <input type="text" class="form-control" id="userInput" placeholder="Email atau Username" required>
                        <div class="invalid-feedback">Please enter your email or username</div>
                    </div>

                    <div class="input-group">
                        <span class="input-icon">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input type="password" class="form-control" id="password" placeholder="Password" required>
                        <div class="invalid-feedback">Please enter your password</div>
                    </div>

                    <div class="links">
                        <a href="#" class="forgot-link">Forgot Password</a>
                        <a href="signup.php" class="create-link">Create an Account</a>
                    </div>

                    <a href="index.php" type="submit" class="btn btn-login">Login</a>
                    
                    <div class="divider">
                        <span>Or</span>
                    </div>
                    
                    <button type="button" class="btn btn-google">Login With Google</button>
                </form>
            </div>
        </div>
    </div>

    <script>
    function validateSigninForm(event) {
        event.preventDefault();
        
        const userInput = document.getElementById('userInput');
        const password = document.getElementById('password');
        
        // Reset previous error states
        [userInput, password].forEach(input => {
            input.classList.remove('is-invalid');
        });
        
        let isValid = true;
        
        // User input validation
        if (userInput.value.trim() === '') {
            userInput.classList.add('is-invalid');
            isValid = false;
        }
        
        // Password validation
        if (password.value.trim() === '') {
            password.classList.add('is-invalid');
            isValid = false;
        }
        
        if (isValid) {
            // If form is valid, you can submit it
            document.getElementById('signinForm').submit();
        }
        
        return false;
    }
    </script>
</body>

</html>