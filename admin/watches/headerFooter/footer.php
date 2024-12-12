<footer class="main-footer">
    <div class="footer-left">
        Copyright &copy; 2024 <div class="bullet"></div> TilessDials
    </div>
</footer>
</div>
</div>

<!-- General JS Scripts -->
<script src="assets/modules/jquery.min.js"></script>
<script src="assets/modules/popper.js"></script>
<script src="assets/modules/tooltip.js"></script>
<script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="assets/modules/moment.min.js"></script>
<script src="assets/js/stisla.js"></script>

<!-- JS Libraies -->
<script src="assets/modules/simple-weather/jquery.simpleWeather.min.js"></script>
<script src="assets/modules/chart.min.js"></script>
<script src="assets/modules/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="assets/modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="assets/modules/summernote/summernote-bs4.js"></script>
<script src="assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>
<script src="assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
<script src="assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js"></script>

<!-- Image Preview -->
<script src="assets/js/page/features-post-create.js"></script>


<!-- Template JS File -->
<script src="assets/js/scripts.js"></script>
<script src="assets/js/custom.js"></script>
</body>


</html>


<script>
function handleImageSelection(event) {
    const fileInput = event.target;
    const oldImagePreview = document.getElementById('old-image-preview');
    const existingImgInput = document.getElementById('existing_img');
    const file = fileInput.files[0];

    // If a new file is selected, hide the old image and clear the existing image input
    if (file) {
        oldImagePreview.style.display = 'none'; // Hide the old image
        existingImgInput.value = ''; // Clear the existing image name
    } else {
        // If no file is selected, show the old image
        oldImagePreview.style.display = 'block'; // Show the old image
        existingImgInput.value = "<?php echo $item->featured_img; ?>"; // Set the existing image name
    }
}



</script>