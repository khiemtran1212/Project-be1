<!DOCTYPE html>
<html>
<!-- Header-->
<?php
    include_once './app/views/header.php';
?>

<body>
     <!-- Navbar-->
     <?php 
        include_once './app/views/navbar.php';
    ?>
    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Registration</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <form>
                    <div class="form-group"><label for="name">Name</label><input class="form-control item" type="text" id="name"></div>
                    <div class="form-group"><label for="password">Password</label><input class="form-control item" type="password" id="password"></div>
                    <div class="form-group"><label for="email">Email</label><input class="form-control item" type="email" id="email"></div><button class="btn btn-primary btn-block" type="submit">Sign Up</button>
                </form>
            </div>
        </section>
    </main>
 <!-- Footer-->
 <?php 
        include_once './app/views/footer.php';
    
    ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>