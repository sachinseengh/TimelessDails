<?php
include("./headerFooter/header.php")
?>

<!--==================== MAIN ====================-->
<main class="main">
    <!--==================== HOME ====================-->
    <div class="container">
        <div class="login__container">
            <div class="login-container">
                <form method="POST" class="login-form" action="../Backend/Controller/userOperations/registerProcess.php">
                    <h2 class="login-title">Register</h2>
                    <p class="login-subtitle">Please fill up the details to signup</p>
                    <div class="form-group">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="name" id="name" name="name" class="form-input" placeholder="Enter your email"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" id="email" name="email" class="form-input"
                            placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <div class="password-wrapper">
                            <input type="password" id="password" name="password" class="form-input"
                                placeholder="Enter your password" required>
                            <button type="button" class="password-toggle" onclick="togglePassword()">
                                <span id="toggle-icon" class="toggle-icon">⬜</span>
                            </button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="city" class="form-label">City</label>
                        <input type="city" id="city" name="city" class="form-input"
                            placeholder="Enter your city" required>
                    </div>
                    <div class="form-group">
                        <label for="address" class="form-label">Full Address</label>
                        <input type="address" id="address" name="address" class="form-input"
                            placeholder="Enter your address" required>
                    </div>

                    <div class="form-group">
                        <label for="number" class="form-label">Phone Number</label>
                        <input type="number" id="phone" name="phone" class="form-input"
                            placeholder="Enter your number" required>
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

<?php
include("./headerFooter/footer.php")
?>