
<?php
//establishing an error variable
$error = NULL;
if(isset($_POST['submit'])){
    
    //Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
   
    if(strlen($name) < 5) {
        $error = "<p>Your username must be atleast 5 characters</p>";
    }else{
        //Form is valid
        //connect to the database
        $mysqli = mysqli_connect('localhost', 'root', '','veremail');
        
        //sanitize form data
        $name = $mysqli->real_escape_string($name);
        $email = $mysqli->real_escape_string($email);
        $message = $mysqli->real_escape_string($message);
        
        //Generate Vkey
        $vkey = md5(time().$name);
        
        //Insert account into the database
        $insert =$mysqli->query("INSERT INTO accounts(name,email,message,vkey) VALUES ('$name', '$email', '$message', '$vkey')");
        
        if($insert){ 
            //send Email
            $to =$e;
            $subject = "Email Verification and acknowledgement of your concern";
            $message = "<a href='http://localhost/life/verify.php?vkey=$vkey'>Thank you for feedback</a>";
            $headers= "From: joshuaabok62@gmail.com \r\n";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .="Content-type:text/html; charset=UTF-8" . "\r\n";
            mail($to,$subject,$message,$headers);
            header('location:index.php');
        }else{
            echo $mysqli->error;
        }
    }    
    
}

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>LIVE ON LAND BY DEPARTMENT OF AGRICULTURE</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/templatemo-main.css">
        <link rel="stylesheet" href="css/owl-carousel.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
<!--
Vanilla Template
https://templatemo.com/tm-526-vanilla
-->
<body>

    <div class="fixed-side-navbar">
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link" href="#home"><span>Intro</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#services"><span>Services</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#portfolio"><span>Portfolio</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#our-story"><span>Our Story</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#contact-us"><span>Contact Us</span></a></li>
        </ul>
    </div>

    <div class="parallax-content baner-content" id="home">
        <div class="container">
            <div class="first-content">
                <h1>Agricultural Department</h1>
                <span><em>Creating awareness of the nature</em>Thinking bigger in connecting our agricultural department hand in hand with Vission 2030 Life On Land  </span>
                <div class="primary-button">
                    <a href="#services">Discover More</a>
                </div>
            </div>
        </div>
    </div>


    <div class="service-content" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="left-text">
                        <h4>More About Nature</h4>
                        <div class="line-dec"></div>
                        <p>PROTECT, RESTORE AND PROMOTE SUSTAINABLE USE OF TERRESTRIAL ECOSYSTEMS, SUSTAINABLY MANAGE FORESTS, COMBAT DESERTIFICATION, AND HALT AND REVERSE LAND DEGRADATION AND HALT BIODIVERSITY LOSS.<br/> 
                        Please share our <a rel="nofollow" href="https://NEMAgov.com">website</a> to your friends or collegues. Thank you.</p>
                        <ul>
                            <li>-  Protect Land</li>
                            <li>-  Promote and restore terestrial ecosystems</li>
                            <li>-  Sustainably manage forests</li>
                            <li>-  Compat Desertification</li>
                        </ul>
                        <div class="primary-button">
                            <a href="#portfolio">Learn More About Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="service-item">
                                <h4>Reverse Land Degradation</h4>
                                <div class="line-dec"></div>
                                <p>Humans and other animals rely on other forms of life on land for food, clean air, clean water, and as a means of combatting climate change. But the land and life on it are in trouble. Arable land is disappearing 30 to 35 times faster than it has historically. Deserts are spreading. Animal breeds are going extinct.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <h4>Halt &amp; Biodiversity</h4>
                                <div class="line-dec"></div>
                                <p>Plant life makes up 80% of the human diet. Forests, which cover 30% of the Earth’s surface, help keep the air and water clean and the Earth’s climate in balance. That’s not to mention they’re home to millions of animal species. </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <h4>Effective Team Work</h4>
                                <div class="line-dec"></div>
                                <p>We can turn these trends around by working as ateam. Fortunately, the Sustainable Development Goals aim to conserve and restore the use of terrestrial ecosystems such as forests, wetlands, drylands and mountains by 2030.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <h4>Fast Support 24/7</h4>
                                <div class="line-dec"></div>
                                <p>As NEMA, we are ready any time of the day to ensure we consider your ideas as far as land conservation is concerned and ensure we don't allow any form land degradation.</p>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>

    
    <div class="parallax-content projects-content" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="owl-testimonials" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="testimonials-item">
                                <a href="img/1st-big-item.jpg" data-lightbox="image-1"><img src="img/1st-item.jpg" alt=""></a>
                                <div class="text-content">
                                    <h4>Beautiful Bird</h4>
                                    <span>In Maasai mara national park</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-item">
                                <a href="img/2nd-big-item.jpg" data-lightbox="image-1"><img src="img/2nd-item.jpg" alt=""></a>
                                <div class="text-content">
                                    <h4>Tree Logs Cutting Technology</h4>
                                    <span>In Mau Forest</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-item">
                                <a href="img/6th-big-item.jpg" data-lightbox="image-1"><img src="img/6th-big-item.jpg" alt=""></a>
                                <div class="text-content">
                                    <h4>Chuka Forest</h4>
                                    <span>In Chuka </span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-item">
                                <a href="img/4th-big-item.jpg" data-lightbox="image-1"><img src="img/4th-item.jpg" alt=""></a>
                                <div class="text-content">
                                    <h4>Donkeys</h4>
                                    <span>In Kisumu,Impala</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-item">
                                <a href="img/5th-big-item.jpg" data-lightbox="image-1"><img src="img/5th-item.jpg" alt=""></a>
                                <div class="text-content">
                                    <h4>Wildlife</h4>
                                    <span>In Tsavo National park</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-item">
                                <a href="img/6th-big-item.jpg" data-lightbox="image-1"><img src="img/6th-item.jpg" alt=""></a>
                                <div class="text-content">
                                    <h4>Elephants</h4>
                                    <span>In Samburu</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-item">
                                <a href="img/2nd-big-item.jpg" data-lightbox="image-1"><img src="img/2nd-item.jpg" alt=""></a>
                                <div class="text-content">
                                    <h4>Tree Logs Cutting Technology</h4>
                                    <span>In Kakamega forest</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-item">
                                <a href="img/1st-big-item.jpg" data-lightbox="image-1"><img src="img/1st-item.jpg" alt=""></a>
                                <div class="text-content">
                                    <h4>Beautiful Bird</h4>
                                    <span>In Nairobi National Park</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="tabs-content" id="our-story">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="wrapper">
                    <section id="first-tab-group" class="tabgroup">
                      <div id="tab1">
                        <img src="img/6th-big-item.jpg" alt="">
                        <p>Humans and other animals rely on other forms of life on land for food, clean air, clean water, and as a means of combatting climate change. But the land and life on it are in trouble. Arable land is disappearing 30 to 35 times faster than it has historically. Deserts are spreading. Animal breeds are going extinct.</p>
                      </div>
                      <div id="tab2">
                        <img src="img/2nd-tab.jpg" alt="">
                        <p>Plant life makes up 80% of the human diet. Forests, which cover 30% of the Earth’s surface, help keep the air and water clean and the Earth’s climate in balance. That’s not to mention they’re home to millions of animal species.</p>
                      </div>
                      <div id="tab3">
                        <img src="img/3rd-tab.jpg" alt="">
                        <p>We can turn these trends around by working as ateam. Fortunately, the Sustainable Development Goals aim to conserve and restore the use of terrestrial ecosystems such as forests, wetlands, drylands and mountains by 2030.</p>
                      </div>
                      <div id="tab4">
                        <img src="img/4th-tab.jpg" alt="">
                        <p>As NEMA, we are ready any time of the day to ensure we consider your ideas as far as land conservation is concerned and ensure we don't allow any form land degradation.</p>
                      </div>
                    </section>
                    <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                      <li><a href="#tab1" class="active">2018 - 2019</a></li>
                      <li><a href="#tab2">2018 - 2019</a></li>
                      <li><a href="#tab3">2018 - 2019</a></li>
                      <li><a href="#tab4">2019 - Now</a></li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="parallax-content contact-content" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-form">
                        <div class="row">
                            <form id="contact" action="" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                      <fieldset>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                      </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                      <fieldset>
                                        <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required="">
                                      </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                      <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                      </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                      <fieldset>
                                        <button type="submit" name="submit" id="form-submit" class="btn">Send Message</button>
                                      </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map">
        
                        <img src="img/4th-item.jpg" width="250%" height="400" frameborder="0" style="border:0" ></img>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="primary-button">
                        <a href="#home">Back To Top</a>
                    </div>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/BarasaBriston"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                    <p>Copyright &copy; 2019 Agricultural Department
            
            		- Design: <a rel="nofollow noopener" href="https://twitter.com/BarasaBriston"><em>Elite Group</em></a></p>
                </div>
            </div>
        </div>
    </footer>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script>
        function openCity(cityName) {
            var i;
            var x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
               x[i].style.display = "none";  
            }
            document.getElementById(cityName).style.display = "block";  
        }
    </script>

    <script>
        $(document).ready(function(){
          // Add smooth scrolling to all links
          $(".fixed-side-navbar a, .primary-button a").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
              // Prevent default anchor click behavior
              event.preventDefault();

              // Store hash
              var hash = this.hash;

              // Using jQuery's animate() method to add smooth page scroll
              // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
              $('html, body').animate({
                scrollTop: $(hash).offset().top
              }, 800, function(){
           
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
              });
            } // End if
          });
        });
    </script>

</body>
</html>