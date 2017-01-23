<!-- contact form -->
<footer>
                        <form action="index.html" method="post" class="tm-contact-form">

                            <div class="form-group">
                                <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Your Name"  required/>
                            </div>
                
                            <div class="form-group">                                                        
                                <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Your Email"  required/>
                            </div>                                                        
                            
                            <div class="form-group">
                                <textarea id="contact_message" name="contact_message" class="form-control" rows="5" placeholder="Message" required></textarea>
                            </div> 

                            <button type="submit" class="tm-submit-btn">Submit</button>  
                        
                        </form>  
                    </div>
                </div>
                <div class="tm-bg-black-translucent tm-copyright-div">
                    <p class="tm-copyright-text">Copyright &copy; 2016 Your Company - Design: Tooplate</p>
                </div>                
            </section>

        </div>
        <?php wp_footer(); ?>
        </footer>
        
        <!-- load JS files -->
        <script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.11.3.min.js"></script>         <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap (http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h) -->
        <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>             <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
        <script src="<?php bloginfo('template_directory'); ?>/js/jquery.singlePageNav.min.js"></script>  <!-- Single page nav (https://github.com/ChrisWojcik/single-page-nav) -->
        
        <script>     
          
            // Check scroll position and add/remove background to navbar
            function checkScrollPosition() {
                
                if($(window).width() < 767) {
                    $(".tm-nav").removeClass("scroll");
                    return;
                }

                if($(window).scrollTop() > 50) {
                  $(".tm-nav").addClass("scroll");
              } else {        
                  $(".tm-nav").removeClass("scroll");
              }
            }

            $(document).ready(function () {   
                // Single page nav
                $('.tm-nav').singlePageNav({
                    offset: 57,
                    filter: ':not(.external)',
                    updateHash: true        
                });

                checkScrollPosition();

                // navbar
                $('.navbar-toggle').click(function(){
                    $('.main-menu').toggleClass('show');
                });

                $('.main-menu a').click(function(){
                    $('.main-menu').removeClass('show');
                });
            });

            $(window).on("scroll", function() {
                checkScrollPosition();    
            });

            $('#tmNavbar a').click(function(){
                $('#tmNavbar').collapse('hide');
            });

        </script>             

</body>
</html>