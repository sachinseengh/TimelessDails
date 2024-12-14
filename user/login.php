<?php
include("./headerFooter/header.php");
?>

<!--==================== MAIN ====================-->
<main class="main">
    <!--==================== HOME ====================-->
    <div class="container">
        <div class="login__container">
            <div class="login-container">
                <form id="login-form" method="POST" action="../backend/Controller/userOperations/loginProcess.php" class="login-form" novalidate>
                    <h2 class="login-title">Welcome Back</h2>
                    <p class="login-subtitle">Please log in to your account</p>
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" id="email" name="email" class="form-input" placeholder="Enter your email">
                        <small id="email-error" class="error-message"></small>
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <div class="password-wrapper">
                            <input type="password" id="password" name="password" class="form-input" placeholder="Enter your password">
                            <button type="button" class="password-toggle" onclick="togglePassword()" aria-label="Toggle password visibility">
                                <i id="toggle-icon" class="fas fa-eye"></i> <!-- Eye icon -->
                            </button>
                        </div>
                        <small id="password-error" class="error-message"></small>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="submit-button">Login</button>
                    </div>
                    <div class="register-link">
                        Not Registered?<a href="register.php" class=""> Register Here</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<script src="https://kit.fontawesome.com/70a872f898.js" crossorigin="anonymous"></script>
<script>
    // Function to toggle password visibility
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const toggleIcon = document.getElementById('toggle-icon');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleIcon.classList.remove('fa-eye');
            toggleIcon.classList.add('fa-eye-slash'); // Change to eye-slash
        } else {
            passwordInput.type = 'password';
            toggleIcon.classList.remove('fa-eye-slash');
            toggleIcon.classList.add('fa-eye'); // Change back to eye
        }
    }

    // Custom form validation
    document.getElementById('login-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        const emailInput = document.getElementById('email').value.trim();
        const passwordInput = document.getElementById('password').value.trim();
        const emailError = document.getElementById('email-error');
        const passwordError = document.getElementById('password-error');

        let isValid = true;

        // Reset error messages
        emailError.textContent = '';
        passwordError.textContent = '';
        emailError.style.display = 'none';
        passwordError.style.display = 'none';

        // Validate email
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(emailInput)) {
            emailError.textContent = 'Please enter a valid email address.';
            emailError.style.display = 'block';
            isValid = false;
        }

        // Validate password
        if (passwordInput.length < 8) {
            passwordError.textContent = 'Password must be at least 8 characters long.';
            passwordError.style.display = 'block';
            isValid = false;
        }

        if (isValid) {
            // If validation passes, allow form submission
            this.submit();
        }
    });
</script>

<?php
include("./headerFooter/footer.php");
?>