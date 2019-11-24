<?php
$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>

  
    <?= $this->Html->css('main_styles')?>
    <?= $this->Html->css('responsive')?>
    <?= $this->Html->css('login')?>
    <?= $this->Html->css('bootstrap-4.1.2/bootstrap.min')?>

    <?= $this->Html->css('plugins/font-awesome-4.7.0/css/font-awesome.min')?>
    <?= $this->Html->css('plugins/OwlCarousel2-2.2.1/owl.carousel.css')?>
    <?= $this->Html->css('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')?>
    <?= $this->Html->css('plugins/OwlCarousel2-2.2.1/animate.css')?>
    
    



    <?= $this->Html->meta('icon') ?>



    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <!-- Navbar from CakePHP Removed & added custom navbar -->
<div class="menu">


    <div class="menu_search">
        <form action="#" id="menu_search_form" class="menu_search_form">
            <input type="text" class="search_input" placeholder="Search Item" required="required">
            <button class="menu_search_button"><?= $this->Html->image('search.png', ['alt' => ''])?></button>
        </form>
    </div>
    <!-- Navigation -->
    <div class="menu_nav">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="products.html">Products</a></li>
            
        </ul>
    </div>
    <!-- Contact Info -->
    <div class="menu_contact">
        <div class="menu_phone d-flex flex-row align-items-center justify-content-start">
            <div><div><?= $this->Html->image('phone.svg', ['alt' => ''])?></div></div>
            <div>+1 912-252-7350</div>
        </div>
        <div class="menu_social">
            <ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</div>




<!-- Super Container Starts Here -->
<div class="super_container">



            <!-- Here goes the Header section  -->
            <header class="header">
                <div class="header_overlay"></div>
                <div class="header_content d-flex flex-row align-items-center justify-content-start">
                    <div class="logo">
                        <a href="#" style="text-decoration: none;">
                            <div class="d-flex flex-row align-items-center justify-content-start">
                                <div><?= $this->Html->image('logo.png', ['alt' => ''])?></div>
                                <div>Nivea Contest</div>
                            </div>
                        </a>	
                    </div>
                    <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
                    <nav class="main_nav">
                        <ul class="d-flex flex-row align-items-start justify-content-start">
                            <li class="active"><a href="#">Women</a></li>
                            <li><a href="#">Men</a></li>
                            <li><a href="#">Kids</a></li>
                            <li><a href="#">Home Deco</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
                        <!-- Search -->
                        <div class="header_search">
                            <form action="#" id="header_search_form">
                                <input type="text" class="search_input" placeholder="Search Item" required="required">
                                <button class="header_search_button"><?= $this->Html->image('search.png', ['alt' => ''])?></button>
                            </form>
                        </div>
                        <!-- User -->
                        <div class="user"><a href="#" data-toggle="modal" data-target="#myModal"><div><?= $this->Html->image('user.svg', ['alt' => ''])?><div>1</div></div></a></div>
                        <!-- Cart -->
                        <div class="cart"><a href="cart.html"><div><?= $this->Html->image('cart.svg', ['alt' => ''])?></div></a></div>
                    </div>
                </div>
            </header>
            
            <!-- Super Container Inner -->
            <div class="super_container_inner">

                <!-- Super Overlay DIV -->
                <div class="super_overlay"></div>
                <!-- Super Overlay End -->



                <!-- Home Section -->
                <div class="home">
                    <!-- Home Slider -->
                    <div class="home_slider_container">
                        <div class="owl-carousel owl-theme home_slider">
                            
                            <!-- Slide -->
                            <div class="owl-item">
                            <div class="background_image"></div>
                                <div class="container fill_height">
                                    <div class="row fill_height">
                                        <div class="col fill_height">
                                            <div class="home_container d-flex flex-column align-items-center justify-content-start">
                                                <div class="home_content">
                                                    <div class="home_title">New Arrivals</div>
                                                    <div class="home_subtitle">Summer Wear</div>
                                                    <div class="home_items">
                                                        <div class="row">
                                                            <div class="col-sm-3 offset-lg-1">
                                                                <div class="home_item_side"><a href="product.html"><?= $this->Html->image('home_1.jpg', ['alt' => ''])?></div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
                                                                <div class="product home_item_large">
                                                                    <div class="product_tag d-flex flex-column align-items-center justify-content-center">
                                                                        <div>
                                                                            <div>from</div>
                                                                            <div>$3<span>.99</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product_image"><?= $this->Html->image('home_2.jpg', ['alt' => ''])?></div>
                                                                    <div class="product_content">
                                                                        <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                                                            <div>
                                                                                <div>
                                                                                    <div class="product_name"><a href="product.html">Cool Clothing with Brown Stripes</a></div>
                                                                                    <div class="product_category">In <a href="category.html">Category</a></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="ml-auto text-right">
                                                                                <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                                                                <div class="product_price text-right">$3<span>.99</span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product_buttons">
                                                                            <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                                                                <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                                                                                    <div><div><?= $this->Html->image('heart.svg', ['alt' => ''])?><div>+</div></div></div>
                                                                                </div>
                                                                                <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                                                                    <div><div><?= $this->Html->image('cart_2.svg', ['alt' => ''])?><div>+</div></div></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="home_item_side"><a href="product.html"><?= $this->Html->image('home_3.jpg', ['alt' => ''])?></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>	
                            </div>

                            <!-- Slide -->
                            <div class="owl-item">
                                <div class="background_image"><?= $this->Html->image('home.jpg', ['alt' => ''])?></div>
                                <div class="container fill_height">
                                    <div class="row fill_height">
                                        <div class="col fill_height">
                                            <div class="home_container d-flex flex-column align-items-center justify-content-start">
                                                <div class="home_content">
                                                    <div class="home_title">Popular</div>
                                                    <div class="home_subtitle">Summer Wear</div>
                                                    <div class="home_items">
                                                        <div class="row">
                                                            <div class="col-sm-3 offset-lg-1">
                                                                <div class="home_item_side"><a href="product.html"><?= $this->Html->image('home_1.jpg', ['alt' => ''])?></a></div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
                                                                <div class="product home_item_large">
                                                                    <div class="product_tag d-flex flex-column align-items-center justify-content-center">
                                                                        <div>
                                                                            <div>from</div>
                                                                            <div>$3<span>.99</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product_image"><?= $this->Html->image('product_1.jpg', ['alt' => ''])?></div>
                                                                    <div class="product_content">
                                                                        <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                                                            <div>
                                                                                <div>
                                                                                    <div class="product_name"><a href="product.html">Cool Clothing with Brown Stripes</a></div>
                                                                                    <div class="product_category">In <a href="category.html">Category</a></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="ml-auto text-right">
                                                                                <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                                                                <div class="product_price text-right">$3<span>.99</span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product_buttons">
                                                                            <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                                                                <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                                                                                    <div><div><?= $this->Html->image('heart.svg', ['alt' => ''])?><div>+</div></div></div>
                                                                                </div>
                                                                                <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                                                                    <div><div><?= $this->Html->image('cart_2.svg', ['alt' => ''])?><div>+</div></div></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="home_item_side"><a href="product.html"><?= $this->Html->image('home_3.jpg', ['alt' => ''])?></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>	
                            </div>

                            <!-- Slide -->
                            <div class="owl-item">
                                <div class="background_image" ><?= $this->Html->image('home.jpg', ['alt' => ''])?></div>
                                <div class="container fill_height">
                                    <div class="row fill_height">
                                        <div class="col fill_height">
                                            <div class="home_container d-flex flex-column align-items-center justify-content-start">
                                                <div class="home_content">
                                                    <div class="home_title">Trendsetters</div>
                                                    <div class="home_subtitle">Summer Wear</div>
                                                    <div class="home_items">
                                                        <div class="row">
                                                            <div class="col-sm-3 offset-lg-1">
                                                                <div class="home_item_side"><a href="product.html"><?= $this->Html->image('product_1.jpg', ['alt' => ''])?></a></div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
                                                                <div class="product home_item_large">
                                                                    <div class="product_tag d-flex flex-column align-items-center justify-content-center">
                                                                        <div>
                                                                            <div>from</div>
                                                                            <div>$3<span>.99</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product_image"><?= $this->Html->image('product_2.jpg', ['alt' => ''])?></div>
                                                                    <div class="product_content">
                                                                        <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                                                            <div>
                                                                                <div>
                                                                                    <div class="product_name"><a href="product.html">Cool Clothing with Brown Stripes</a></div>
                                                                                    <div class="product_category">In <a href="category.html">Category</a></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="ml-auto text-right">
                                                                                <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                                                                <div class="product_price text-right">$3<span>.99</span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product_buttons">
                                                                            <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                                                                <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                                                                                    <div><div><?= $this->Html->image('heart.svg', ['alt' => ''])?><div>+</div></div></div>
                                                                                </div>
                                                                                <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                                                                    <div><div><?= $this->Html->image('cart_2.svg', ['alt' => ''])?><div>+</div></div></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="home_item_side"><a href="product.html"><?= $this->Html->image('product_3.jpg', ['alt' => ''])?></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>	
                            </div>

                            <!-- Slide -->
                            <div class="owl-item">
                                <div class="background_image"><?= $this->Html->image('home.jpg', ['alt' => ''])?></div>
                                <div class="container fill_height">
                                    <div class="row fill_height">
                                        <div class="col fill_height">
                                            <div class="home_container d-flex flex-column align-items-center justify-content-start">
                                                <div class="home_content">
                                                    <div class="home_title">Premium Items</div>
                                                    <div class="home_subtitle">Summer Wear</div>
                                                    <div class="home_items">
                                                        <div class="row">
                                                            <div class="col-sm-3 offset-lg-1">
                                                                <div class="home_item_side"><a href="product.html"><?= $this->Html->image('home_1.jpg', ['alt' => ''])?></a></div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
                                                                <div class="product home_item_large">
                                                                    <div class="product_tag d-flex flex-column align-items-center justify-content-center">
                                                                        <div>
                                                                            <div>from</div>
                                                                            <div>$3<span>.99</span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product_image"><?= $this->Html->image('product_3.jpg', ['alt' => ''])?></div>
                                                                    <div class="product_content">
                                                                        <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                                                            <div>
                                                                                <div>
                                                                                    <div class="product_name"><a href="product.html">Cool Clothing with Brown Stripes</a></div>
                                                                                    <div class="product_category">In <a href="category.html">Category</a></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="ml-auto text-right">
                                                                                <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                                                                <div class="product_price text-right">$3<span>.99</span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product_buttons">
                                                                            <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                                                                <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                                                                                    <div><div><?= $this->Html->image('heart.svg', ['alt' => ''])?><div>+</div></div></div>
                                                                                </div>
                                                                                <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                                                                    <div><div><?= $this->Html->image('cart_2.svg', ['alt' => ''])?><div>+</div></div></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="home_item_side"><a href="product.html"><?= $this->Html->image('home_3.jpg', ['alt' => ''])?></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>	
                            </div>

                        </div>
                        <div class="home_slider_nav home_slider_nav_prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                        <div class="home_slider_nav home_slider_nav_next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>

                        <!-- Home Slider Dots -->
                        
                        <div class="home_slider_dots_container">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="home_slider_dots">
                                            <ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-center justify-content-center">
                                                <li class="home_slider_custom_dot active">01</li>
                                                <li class="home_slider_custom_dot">02</li>
                                                <li class="home_slider_custom_dot">03</li>
                                                <li class="home_slider_custom_dot">04</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>	
                        </div>

                    </div>
                </div>
                <!-- End of Home Section -->

                

                <?= $this->Flash->render() ?>
                <div class="container clearfix">
                    <?= $this->fetch('content') ?>
                </div>

                


                <!-- Footer -->
                <footer class="footer">
                    <div class="footer_content">
                        <div class="container">
                            <div class="row">
                                
                                <!-- About -->
                                <div class="col-lg-4 footer_col">
                                    <div class="footer_about">
                                        <div class="footer_logo">
                                            <a href="#">
                                                <div class="d-flex flex-row align-items-center justify-content-start">
                                                    <div class="footer_logo_icon"><?= $this->Html->image('logo_2.png', ['alt' => ''])?></div>
                                                    <div>Little Closet</div>
                                                </div>
                                            </a>		
                                        </div>
                                        <div class="footer_about_text">
                                            <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Fusce venenatis vel velit vel euismod.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Footer Links -->
                                <div class="col-lg-4 footer_col">
                                    <div class="footer_menu">
                                        <div class="footer_title">Support</div>
                                        <ul class="footer_list">
                                            <li>
                                                <a href="#"><div>Customer Service</div></a>
                                            </li>
                                            <li>
                                                <a href="#"><div>Return Policy</div></a>
                                            </li>
                                            <li>
                                                <a href="#"><div>Size Guide</div></a>
                                            </li>
                                            <li>
                                                <a href="#"><div>Terms and Conditions</div></a>
                                            </li>
                                            <li>
                                                <a href="#"><div>Contact</div></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Footer Contact -->
                                <div class="col-lg-4 footer_col">
                                    <div class="footer_contact">
                                        <div class="footer_title">Stay in Touch</div>
                                        <div class="newsletter">
                                            <form action="#" id="newsletter_form" class="newsletter_form">
                                                <input type="email" class="newsletter_input" placeholder="Subscribe to our Newsletter" required="required">
                                                
                                            </form>
                                        </div>
                                        <div class="footer_social">
                                            <div class="footer_title">Social</div>
                                            <ul class="footer_social_list d-flex flex-row align-items-start justify-content-start">
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer_bar">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="footer_bar_content d-flex flex-md-row flex-column align-items-center justify-content-start">
                                        <nav class="footer_nav ml-md-auto order-md-2 order-1">
                                            <ul class="d-flex flex-row align-items-center justify-content-start">
                                                <li><a href="category.html">Women</a></li>
                                                <li><a href="category.html">Men</a></li>
                                                <li><a href="category.html">Kids</a></li>
                                                <li><a href="category.html">Home Deco</a></li>
                                                <li><a href="#">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

                <!-- Modal Section -->
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                        <div class="modal-header">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                                </li>
                            </ul>
                        </div>
                        <div class="modal-body">        
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <fieldset>
                                        <?= $this->Form->create() ?>
                                        <?= $this->Form->control('email') ?>
                                        <?= $this->Form->control('password') ?>
                                        <?= $this->Form->button('Login') ?>
                                        <?= $this->Form->end() ?>
                                    </fieldset>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <fieldset>
                                        <?php
                                            echo $this->Form->control('email');
                                            echo $this->Form->control('password');
                                        ?>
                                    </fieldset>
                                        <?= $this->Form->button(__('Submit')) ?>
                                        <?= $this->Form->end() ?>
                                    </div>
                                </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                        </div>
                    </div>
                </div>
                <!-- End of Modal Section -->


                    
            </div> 
            <!-- End of Super Container Inner -->
            
            



</div> 
<!-- Super Container Ends here -->


            

<!-- The Script tags go here -->
<?=$this->Html->script(['jquery-3.2.1.min', 'custom','popper','bootstrap.min','TweenMax.min','TimelineMax.min',
'animation.gsap.min','ScrollToPlugin.min','ScrollMagic.min','owl.carousel','easing','progressbar.min','parallax.min'])?>
</body>
</html>
