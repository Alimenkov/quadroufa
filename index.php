<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Квадроциклы - Уфа, Экстрим</title>
<!--

Template 2084 Zipper

http://www.tooplate.com/view/2084-zipper

-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/tooplate-style.css">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>

    <body>

        <div class="container-fluid">
            <!-- Navigation -->        

            
            <!-- Section 2 -->
            <section class="tm-section tm-section-about" style="height: 1500px;" id="about">

                <div class="tm-page-content-width">
                    <div style="margin: 0;max-width: 700px" class="tm-bg-black-translucent tm-content-box tm-content-box-right tm-flex-center">
                        <div class="tm-content-box-inner">
                            <h2 class="tm-section-title">Сайт находится в разработке</h2>
                        </div>
                    </div>                    
                </div>
                
            </section>


            <section class="tm-section tm-section-contact" id="contact">

                <div class="tm-bg-black-translucent tm-copyright-div">
                    <p class="tm-copyright-text">Copyright &copy; <?=date('Y')?> Уфа.Прокат</p>
                </div>
            </section>
        </div>
        
        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>         <!-- jQuery (https://jquery.com/download/) -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap (http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h) -->
        <script src="js/bootstrap.min.js"></script>             <!-- Bootstrap js (v4-alpha.getbootstrap.com/) -->
        <script src="js/jquery.singlePageNav.min.js"></script>  <!-- Single page nav (https://github.com/ChrisWojcik/single-page-nav) -->
        
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
