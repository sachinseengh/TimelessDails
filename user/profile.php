<?php
include("./headerFooter/header.php")
?>

<!--==================== MAIN ====================-->
<main class="main">
    <!--==================== HOME ====================-->
    <div class="profile__wrapper">
        <div class="profile-card">
            <h2>User Profile</h2>
            <p>Welcome to your profile page!</p>

            <div class="details">
                <div class="info name">
                    <span>Name:</span>
                    <div>John Doe</div>
                </div>
                <div class="info email">
                    <span>Email:</span>
                    <div>johndoe@example.com</div>
                </div>
                <div class="info phone">
                    <span>Phone:</span>
                    <div>+123 456 7890</div> 
                </div>
                <div class="info address">
                    <span>Address:</span>
                    <div>123 Main Street, City, Country</div>
                </div>
            </div>

            <a href="#" class="btn">Edit Profile</a>
            <a href="../backend/Controller/userOperations/logout.php" class="btn">Logout</a>
            <a href="../backend/Controller/userOperations/deleteProcess.php" class="btn btn-primary">Delete</a>
        </div>
    </div>

</main>




<?php
include("./headerFooter/footer.php")
?>