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
    <main class="page blog-post">
        <section class="clean-block clean-post dark">
            <div class="container">
                <div class="block-content">
                    <div class="post-image" style="background-image:url(&quot;assets/img/scenery/image3.jpg&quot;);"></div>
                    <div class="post-body">
                        <h3>Lorem Ipsum dolor</h3>
                        <div class="post-info"><span>By John Smith</span><span>Jan 27, 2018</span></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <figure class="figure"><img class="rounded img-fluid figure-img" src="assets/img/scenery/image6.jpg" alt="A generic square placeholder image with rounded corners in a figure.">
                            <figcaption class="figure-caption">Lorem ipsum dolor</figcaption>
                        </figure>
                        <h4>Lorem Ipsum</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <figure class="figure"><img class="rounded img-fluid figure-img" src="assets/img/scenery/image4.jpg" alt="A generic square placeholder image with rounded corners in a figure.">
                                    <figcaption class="figure-caption">Lorem Ipsum dolor</figcaption>
                                </figure>
                            </div>
                            <div class="col">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.&nbsp;</p>
                            </div>
                        </div>
                        <h4>Lorem Ipsum dolor</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="row">
                            <div class="col">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="col-md-6">
                                <figure class="figure"><img class="rounded img-fluid figure-img" src="assets/img/scenery/image5.jpg" alt="A generic square placeholder image with rounded corners in a figure.">
                                    <figcaption class="figure-caption">Lorem Ipsum dolor</figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
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