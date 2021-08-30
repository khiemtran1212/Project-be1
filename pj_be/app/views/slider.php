<!DOCTYPE html>
<html>

<!-- Header-->
<?php
    include_once ROOT_URL. './app/views/header.php';
?>
<body>
     <!-- Navbar-->
     <?php 
        include_once ROOT_URL. './app/views/navbar.php';
    ?>
    <main class="page">
        <section class="clean-block slider">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Slider</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <div class="carousel slide" data-ride="carousel" id="carousel-1">
                    <div class="carousel-inner">
                        <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/scenery/image1.jpg" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/scenery/image4.jpg" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/scenery/image6.jpg" alt="Slide Image"></div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                    </ol>
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