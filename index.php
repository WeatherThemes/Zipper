<?php get_header(); ?>
    <body>

        <div class="container-fluid">
            <!-- Navigation -->        
            <div class="tm-nav">
                <nav class="navbar">

                    <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar"></button> <!-- &#9776; ☰ -->
                    <div class="collapse navbar-toggleable-sm text-xs-center tm-navbar" id="tmNavbar">
                        <ul class="nav navbar-nav">
                            <li class="nav-item active selected">
                                <a class="nav-link current" href="#home">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#services">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#testimonials">Testimonials</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            
            <section class="tm-section tm-section-home tm-flex-center" id="home">                
                
                <div class="tm-hero">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="text-uppercase tm-hero-title">Zipper</h1>
                            <p class="tm-hero-subtitle">best destination to explore...</p>
                        </div>
                    </div>
                </div>                

            </section>
            
            <!-- Section 2 -->
            <section class="tm-section tm-section-about" id="about">

                <div class="tm-page-content-width">
                    <div class="tm-bg-black-translucent tm-content-box tm-content-box-right tm-flex-center">
                        <div class="tm-content-box-inner">
                            <h2 class="tm-section-title">Mauris quis odio id sapien</h2>
                            <p>Aliquam sollicitudin mi sollicitudin justo viverra, nec posuere lorem fringilla. Morbi quam arcu, dignissim ac rutrum vel, hendrerit feugiat tortor. Ut vulputate eros non ante lobortis viverra.</p>
                            <p>Vestibulum ut est lorem. Sed nec blandit lorem, eget iaculis quam. Mauris quis odio id sapien scelerisque mollis. Maecenas aliquet luctus erat sit amet aliquet. Vestibulum mattis porta tristique. Vivamus suscipit bibendum lorem, at efficitur enim hendrerit nec.</p>   
                        </div>                        
                    </div>                    
                </div>
                
            </section>
            
            <!-- Section 3 -->
            <section class="tm-section tm-section-services" id="services">

                <div class="tm-page-content-width">
                    <div class="tm-bg-black-translucent tm-content-box tm-flex-center">
                        <div class="tm-content-box-inner">
                            <h2 class="tm-section-title">Our Services</h2>
                            <p>Phasellus fringilla pharetra nunc sit amet fringilla. Vestibulum augue turpis, molestie sit amet odio eget, ornare mattis nisl.</p>
                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Integer ut justo arcu. Nullam a semper odio. Nam et conque libero, et placerat est.</p>
                            <p>Integer consectetur hendrerit dolor, quis scelerisque risus mattis quis. Pellentesque dapibus ornare nisl. Fusce facilisis pulvinar magna. Class aptent taciti sociosqu.</p>
                        </div>                        
                    </div> 
                </div>                
            </section>

            <!-- Section 4 -->
            <section class="tm-section tm-section-testimonials" id="testimonials">
                <div class="tm-page-content-width">
                    <h2 class="tm-section-title tm-section-title-big text-xs-center tm-text-black">Testimonials</h2>
                    <div class="row">
                        <div class="tm-3-col-container">                                        
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 tm-3-col-textbox">
                                <div class="text-xs-left tm-textbox tm-textbox-padding tm-bg-black-translucent tm-3-col-textbox-inner">
                                    <i class="fa fa-4x fa-pagelines tm-fa"></i>
                                                                               
                                    <p class="tm-text tm-margin-b-0">Ut vulputate eros non ante lobortis viverra. Vestibulum ut est lorem. Sed nec blandit lorem, eget iaculis quam. Mauris quis odio id sapien scelerisque mollis.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 tm-3-col-textbox">
                                <div class="text-xs-left tm-textbox tm-textbox-padding tm-bg-black-translucent tm-3-col-textbox-inner">
                                    <i class="fa fa-4x fa-thumbs-o-up tm-fa"></i>
                                    
                                    <p class="tm-text tm-margin-b-0">Nulla eget risus fringilla, fermentum arcu eu, vestibulum lorem. Aliquam imperdiet leo eget turpis ornare rhoncus. Sed tempor interdum sapien tempor.</p>
                                </div>          
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 tm-3-col-textbox">
                                <div class="text-xs-left tm-textbox tm-textbox-padding tm-bg-black-translucent tm-3-col-textbox-inner">
                                    <i class="fa fa-4x fa-tree tm-fa"></i>
                                    
                                    <p class="tm-text tm-margin-b-0">Aenean porttitor a sapien non venenatis. Curabitur quis ex eu tellus tristique vestibulum id ac arcu. Fusce eu suscipit massa. Lorem ipsum dolor sit amet.</p>
                                </div>          
                            </div>                                        
                        </div>
                    </div>
                </div>                
            </section>

            <!-- Section 5 -->
            <section class="tm-section tm-section-contact" id="contact">
                <div class="tm-page-content-width">
                    <div class="tm-bg-black-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact tm-content-box  tm-content-box-right">
                        <h2 class="tm-section-title">Contact Us</h2>
                        
                    <?php get_footer(); ?>