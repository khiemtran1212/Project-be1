<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
    <div class="container"><a class="navbar-brand logo" href="#">Brand</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link active" href="<?php echo BASE_URL ?>/">Trang Chủ</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL ?>/">Sản Phẩm</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL ?>/">Tin Tức</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL ?>/">Sự Kiện</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL ?>/">Khuyến mãi</a></li>
                <div class="box">
                    <form action="<?php echo BASE_URL ?>/tim-kiem" method="post" class="">
                        <div class="container-1">
                            <span class="icon"><i class="fa fa-search"></i></span>
                            <input type="search" id="search" placeholder="Search..." />
                    </form>


                </div>
                <form action="<?php echo BASE_URL ?>/gio-hang" method="post" class="d-flex">
                    <button id="cart">
                        <i class="material-icons">shopping_cart</i>

                    </button>

                    
                </form>
                <button id="user" > 
                <i class="material-icons">supervisor_account</i>
                
                </button>
                
            </ul>

        </div>
        </ul>
    </div>
    </div>
</nav>