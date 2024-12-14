<?php
include("./headerFooter/header.php")
?>

<!--==================== MAIN ====================-->
<main class="main">
    <!--==================== HOME ====================-->
    <div class="container">
        <div class="login__container">
            <div class="login-container">
                <form id="register-form" method="POST" class="login-form" action="../Backend/Controller/userOperations/registerProcess.php" novalidate>
                    <h2 class="login-title">Register</h2>
                    <p class="login-subtitle">Please fill up the details to signup</p>
                    <div class="form-grid">
                        <!-- Column 1 -->
                        <div class="form-group">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" id="name" name="name" class="form-input" placeholder="Enter your full name">
                            <small id="name-error" class="error-message"></small>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" id="email" name="email" class="form-input" placeholder="Enter your email">
                            <small id="email-error" class="error-message"></small>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="text" id="phone" name="phone" class="form-input" placeholder="Enter your phone number">
                            <small id="phone-error" class="error-message"></small>
                        </div>

                        <!-- Column 2 -->
                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <div class="password-wrapper">
                                <input type="password" id="password" name="password" class="form-input" placeholder="Enter your password">
                                <button type="button" class="password-toggle" onclick="togglePassword()">
                                    <i id="toggle-icon" class="fas fa-eye"></i>
                                </button>
                            </div>
                            <small id="password-error" class="error-message"></small>
                        </div>
                        <div class="form-group">
                            <label for="city" class="form-label">City</label>
                            <input type="text" id="city" name="city" class="form-input" placeholder="Enter your city">
                            <small id="city-error" class="error-message"></small>
                        </div>
                        <div class="form-group">
                            <label for="address" class="form-label">Full Address</label>
                            <input type="text" id="address" name="address" class="form-input" placeholder="Enter your address">
                            <small id="address-error" class="error-message"></small>
                        </div>
                    </div>

                    <div class="form-footer">
                        <button type="submit" class="submit-button">Signup</button>
                    </div>
                    <div class="register-link">
                        Already Registered?<a href="login.php" class=""> Login Here</a>
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
            toggleIcon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            toggleIcon.classList.remove('fa-eye-slash');
            toggleIcon.classList.add('fa-eye');
        }
    }

    // Custom validation for the registration form
    document.getElementById('register-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        // Input fields
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const password = document.getElementById('password').value.trim();
        const city = document.getElementById('city').value.trim();
        const address = document.getElementById('address').value.trim();
        const phone = document.getElementById('phone').value.trim();

        // Error elements
        const nameError = document.getElementById('name-error');
        const emailError = document.getElementById('email-error');
        const passwordError = document.getElementById('password-error');
        const cityError = document.getElementById('city-error');
        const addressError = document.getElementById('address-error');
        const phoneError = document.getElementById('phone-error');

        let isValid = true;

        // Reset error messages
        nameError.textContent = '';
        emailError.textContent = '';
        passwordError.textContent = '';
        cityError.textContent = '';
        addressError.textContent = '';
        phoneError.textContent = '';

        // Validate full name
        if (name.length < 3) {
            nameError.textContent = 'Full name must be at least 3 characters long.';
            isValid = false;
        }

        // Validate email
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            emailError.textContent = 'Please enter a valid email address.';
            isValid = false;
        }

        // Validate password
        if (password.length < 8) {
            passwordError.textContent = 'Password must be at least 8 characters long.';
            isValid = false;
        }

        // Validate city
        if (city === '') {
            cityError.textContent = 'City cannot be empty.';
            isValid = false;
        }

        // Validate address
        if (address.length < 5) {
            addressError.textContent = 'Address must be at least 5 characters long.';
            isValid = false;
        }

        // Validate phone number (Nepali format)
        const phoneRegex = /^(98|97)[0-9]{8}$/;
        if (!phoneRegex.test(phone)) {
            phoneError.textContent = 'Please enter a valid Nepali phone number starting with 98 or 97.';
            isValid = false;
        }

        if (isValid) {
            this.submit(); // Submit the form
        }
    });
</script>

<style>
    .error-message {
        color: red;
        font-size: 12px;
        display: block;
        margin-top: 5px;
    }

    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }

    .form-group {
        width: 100%;
    }

    .password-wrapper {
        display: flex;
        align-items: center;
    }

    .password-toggle {
        background: none;
        border: none;
        cursor: pointer;
    }
</style>

<?php
include("./headerFooter/footer.php")
?>