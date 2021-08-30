<!DOCTYPE html>
<html>



<body>
     <!-- Navbar-->
     <?php 
        include_once ROOT_URL. './app/views/navbar.php';
    ?>
    <main class="page gallery-page">
        <section class="clean-block clean-gallery dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Gallery</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 item"><a class="lightbox" href="assets/img/scenery/image1.jpg"><img class="img-thumbnail img-fluid image" src="assets/img/scenery/image1.jpg"></a></div>
                    <div class="col-md-6 col-lg-4 item"><a class="lightbox" href="assets/img/scenery/image4.jpg"><img class="img-thumbnail img-fluid image" src="assets/img/scenery/image4.jpg"></a></div>
                    <div class="col-md-6 col-lg-4 item"><a class="lightbox" href="assets/img/scenery/image6.jpg"><img class="img-thumbnail img-fluid image" src="assets/img/scenery/image6.jpg"></a></div>
                    <div class="col-md-6 col-lg-4 item"><a class="lightbox" href="assets/img/scenery/image5.jpg"><img class="img-thumbnail img-fluid image" src="assets/img/scenery/image5.jpg"></a></div>
                    <div class="col-md-6 col-lg-4 item"><a class="lightbox" href="assets/img/scenery/image1.jpg"><img class="img-thumbnail img-fluid image" src="assets/img/scenery/image1.jpg"></a></div>
                    <div class="col-md-6 col-lg-4 item"><a class="lightbox" href="assets/img/scenery/image4.jpg"><img class="img-thumbnail img-fluid image" src="assets/img/scenery/image4.jpg"></a></div>
                    <div class="col-md-6 col-lg-4 item"><a class="lightbox" href="assets/img/scenery/image6.jpg"><img class="img-thumbnail img-fluid image" src="assets/img/scenery/image6.jpg"></a></div>
                    <div class="col-md-6 col-lg-4 item"><a class="lightbox" href="assets/img/scenery/image5.jpg"><img class="img-thumbnail img-fluid image" src="assets/img/scenery/image5.jpg"></a></div>
                    <div class="col-md-6 col-lg-4 item"><a class="lightbox" href="assets/img/scenery/image1.jpg"><img class="img-thumbnail img-fluid image" src="assets/img/scenery/image1.jpg"></a></div>
                </div>
            </div>
        </section>
    </main>
   <!-- Footer-->
   <?php 
        include_once ROOT_URL. './app/views/footer.php';
    
    ?>
     <!-- js -->
     <?php
    include_once ROOT_URL . './app/views/js.php';
    ?>
</body>

</html>