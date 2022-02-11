<?php

session_start();
if(!isset($_SESSION['username'])){
    echo "you are logout";
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>R & B Restaurant</title>
  
    <link rel="stylesheet" href="css/bootstrap.min.css">
    

    <link rel="stylesheet" type="text/css" href="food.css">
    
</head>

<body>

    
    <header class="topbar fixed-top">
        <div class="container flex justify-between items-center">
             <div class="icons">
                 
                        <a href="https://www.facebook.com/bikramkesharilenka.lenka"><img src="./icons/facebook.svg" alt=""></a>
                        <a href="https://twitter.com/i/connect_people"><img src="./icons/twitter.svg" alt=""></a>
                        <a href="https://www.youtube.com/channel/UCsbJNA4CMbsYZuiyV4dQ25A"><img src="./icons/google.svg" alt=""></a>
                        <a href="https://www.instagram.com/bikramkesharilenkalenka/"><img src="./icons/instagram.svg" alt=""></a>
                        <a href="#"><img src="./icons/hmm.png" width="25" height="25" alt=""></a>
                </div>
              <div class="auth flex items-center">
              <div>
              <img src="./icons/user-icon.svg" alt="">
                   <?php echo $_SESSION['username'];  ?> 
              </div>
              <span class="divider">|</span>
            
            <div>
            <img src="./icons/edit.svg" alt="">
            <a href="logout.php">Logout</a>
           </div>
        <span class="divider">|</span>
      
           <div>
            <img src="./icons/cart.svg" alt="">
           <a href="mycart.php">my cart (0)</a>
          </div>
          <span class="divider">|</span>
         
        <div class="searchBox">

            <input class="searchInput"type="text" name="" placeholder="Search">
            <button class="searchButton" href="#">
                <i class="material-icons">
                    <img src="icons/search.svg" alt="">
                </i>
            </button>
        </div>

         </div>
        </div>

    </header>

    <header>

<nav>
    <div class="top">
        <div class="container flex justify-between">
            <div class="contact flex items-center">
                <img src="./icons/phone.svg" alt="">
                <div>
                    <h5>call us:(+91) 7064155716</h5>
                    <h6>E-mail : rbrestaurant8@gmail.com</h6>
                    </div>
            </div>
            <div class="branding">
                <img src="./images/logo.png" alt="">
            </div>
            <div class="time flex items-center">
                <img src="./icons/clock.svg" alt="">
                <div>
                    <h5>Working Hours:</h5>
                    <h6>Mon - sat(8.00am - 12.00pm)</h6>
            </div>
           
            </div>
    </div>

    
    <div class="navbar magic-shadow" id="myDIV">
        <div class="container flex justify-center">
            <a href="#hero" class="bkkk active" >HOME</a>
            <a href="#top-products" class="bkkk">POPULAR ITEMS</a>
            <a href="#menu" class="bkkk">MENU</a>
            <a href="#about-meal" class="bkkk">ABOUT</a>
            <a href="#our-services" class="bkkk">SERVICES</a>
            <a href="#latest-news" class="bkkk">BLOG</a>
            <a href="#contact-us" class="bkkk">CONTACT US</a>
         </div>
        </div>
        
            <marquee width="50%" height="50px" behaviour="alternate" direction="left" scrollamounr="12"><h3>
                In this corona pandemic our doctors, police and nurses have prove themself as super hero. So let say thank to all of them and appreciate for their help.<b> Thank You Our Super Hero </b></b></h3></marquee>
        
    </div>
    </nav>
</header>    

<section>
    <a name="hero">
    <header class="hero flex items-center">
        <div class="container">
            
            <div class="welcome flex items-center">
            <span>Welcome to</span>
            
            <div class="sign">
                <span class="fast-flicker">R & B</span><span class="flicker">Restaurant</span>
              </div>
              
            </div> 
              
            
              
            <img src="./images/baby.gif" class="bubu" alt="">
            <h3>A taste of home &nbsp;| <span>&nbsp;Eat. Drink. Love.&nbsp;</span> |&nbsp; Hasty and tasty!</h3>
            
            <div>
                <a href="#about-meal"><button class="btns btn-primary">Read More</button></a>
                <a href="#menu"><button class="btns btn-secondary">Order Now</button></a>
            </div>
            <div class="hero-image">
                
                    <img src="./images/ooo.gif" alt="">
                    
            </div> 


        
        </div>
        </header>
     </section>
    </a>
                   

                    <a name="top-products">
                    <section class="slideshow">
                        <div class="content">
                            <h1 class="section-heading">Top Foods</h1><br><br>
                            <div class="content-carrousel">
                                <figure class="shadow"><img src="./images/chicken lollipop.jpeg"></figure>
                                <figure class="shadow"><img src="./images/pizzu.jpg"></figure>
                                <figure class="shadow"><img src="./images/ice.jpg"></figure>
                                <figure class="shadow"><img src="./images/egg biriyani.jpeg"></figure>
                                <figure class="shadow"> <img src="./images/burger.jpg"></figure>
                                <figure class="shadow"> <img src="./images/suji kekera.jpeg"></figure>
                                <figure class="shadow"> <img src="./images/caku.jpg"></figure>
                                <figure class="shadow"><img src="./images/noodles.jpeg"></figure>
                                <figure class="shadow"><img src="./images/mix.jpg"></figure>
                            </div>
                            </div>
                          </section>
                        </a>

                        <a name="big-deal">
                    <section class="big-deal">
                        <div class="container">
                            <h1 class="section-heading text-pure">Category</h1>
                           
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                
                                    <a href="vegs.php"><img src="./images/vegg.jpg" width="450px" height="450px" alt="" ></a> &nbsp; &nbsp;&nbsp; &nbsp;
                                    <a href="non-vegs.php"><img src="./images/non-veg.jpg" width="450px" height="450px" alt="" ></a>
                                    <br><br> <br><br> <br><br>
                                        
                                

                           
                            
                        </div>
            
                    </section>
                    </a>
                 

                    <a name="menu">
                    <section class="menu py-5" id="menu">
                        <div class="container">
                            <div class="row">
                                <div class="col-10 mx-auto col-sm-6 text-center">
                            <h1 class="section-heading">Menu</h1>
                            </div>
                            </div>
                          <div class="row product-items" id="product-items">
                              <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                                  <div class="card single-item">
                                      <div class="img-container">
                                          <a href="./veggg/matar pannier.php"><img src="./images/matar.jpeg" alt="" 
                                          class="card-img-top product-img"></a>

                                      </div>
                                      <div class="card-body">
                                          <div class="card-text d-flex justify-content-between text-capitalize">
                                              <h5 id="item-name">MATAR PANNIER</h5>
                                              <span><i class="fas fa-dollar-sign"></i>Rs. 140</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                                  <div class="card single-item">
                                      <div class="img-container">
                                      <a href="./nonveggg/chicken lollipop.php"><img src="./images/chicken lollipop.jpeg" alt="" 
                                          class="card-img-top product-img"></a>

                                      </div>
                                      <div class="card-body">
                                          <div class="card-text d-flex justify-content-between text-capitalize">
                                              <h5 id="item-name">CHICKEN LALLIPOP</h5>
                                              <span><i class="fas fa-dollar-sign"></i>Rs. 190</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                                  <div class="card single-item">
                                      <div class="img-container">
                                      <a href="./veggg/allo kobi bhaja.php"><img src="./images/allo kobi bhaja.jpeg" alt="" 
                                          class="card-img-top product-img"></a>

                                      </div>
                                      <div class="card-body">
                                          <div class="card-text d-flex justify-content-between text-capitalize">
                                              <h5 id="item-name">KOBI BHAJA</h5>
                                              <span><i class="fas fa-dollar-sign"></i>Rs. 40</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                                  <div class="card single-item">
                                      <div class="img-container">
                                      <a href="./veggg/bitter chips.php"><img src="./images/bitter chips.jpeg" alt="" 
                                          class="card-img-top product-img"></a>

                                      </div>
                                      <div class="card-body">
                                          <div class="card-text d-flex justify-content-between text-capitalize">
                                              <h5 id="item-name">BITTER CHIPS</h5>
                                              <span><i class="fas fa-dollar-sign"></i>Rs. 30</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                                  <div class="card single-item">
                                      <div class="img-container">
                                      <a href="./nonveggg/chingudi.php"><img src="./images/chingudi.jpeg" alt="" 
                                          class="card-img-top product-img"></a>

                                      </div>
                                      <div class="card-body">
                                          <div class="card-text d-flex justify-content-between text-capitalize">
                                              <h5 id="item-name">CHINGUDI</h5>
                                              <span><i class="fas fa-dollar-sign"></i>Rs. 140</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                                  <div class="card single-item">
                                      <div class="img-container">
                                      <a href="./veggg/jeera rice.php"><img src="./images/jeera rice.jpeg" alt="" 
                                          class="card-img-top product-img"></a>

                                      </div>
                                      <div class="card-body">
                                          <div class="card-text d-flex justify-content-between text-capitalize">
                                              <h5 id="item-name">JEERA RICE</h5>
                                              <span><i class="fas fa-dollar-sign"></i>Rs. 40</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                                  <div class="card single-item">
                                      <div class="img-container">
                                      <a href="./nonveggg/morton curry.php"><img src="./images/morton.jpeg" alt="" 
                                          class="card-img-top product-img"></a>

                                      </div>
                                      <div class="card-body">
                                          <div class="card-text d-flex justify-content-between text-capitalize">
                                              <h5 id="item-name">MORTON</h5>
                                              <span><i class="fas fa-dollar-sign"></i>Rs. 180</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                                  <div class="card single-item">
                                      <div class="img-container">
                                      <a href="./veggg/noodles.php"><img src="./images/noodles.jpeg" alt="" 
                                          class="card-img-top product-img"></a>

                                      </div>
                                      <div class="card-body">
                                          <div class="card-text d-flex justify-content-between text-capitalize">
                                              <h5 id="item-name">NOODLES</h5>
                                              <span><i class="fas fa-dollar-sign"></i>Rs. 70</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                                  <div class="card single-item">
                                      <div class="img-container">
                                      <a href="./nonveggg/springroll.php"><img src="./images/springroll.jpeg" alt="" 
                                          class="card-img-top product-img"></a>

                                      </div>
                                      <div class="card-body">
                                          <div class="card-text d-flex justify-content-between text-capitalize">
                                              <h5 id="item-name">SPRINGROLL</h5>
                                              <span><i class="fas fa-dollar-sign"></i>Rs. 90</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                                  <div class="card single-item">
                                      <div class="img-container">
                                      <a href="./nonveggg/egg biriyani.php"><img src="./images/egg biriyani.jpeg" alt="" 
                                          class="card-img-top product-img"></a>

                                      </div>
                                      <div class="card-body">
                                          <div class="card-text d-flex justify-content-between text-capitalize">
                                              <h5 id="item-name">EGG BIRIYANI</h5>
                                              <span><i class="fas fa-dollar-sign"></i>Rs. 160</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                                  <div class="card single-item">
                                      <div class="img-container">
                                      <a href="./veggg/pannier finger.php"><img src="./images/pannier finger.jpeg" alt="" 
                                          class="card-img-top product-img"></a>

                                      </div>
                                      <div class="card-body">
                                          <div class="card-text d-flex justify-content-between text-capitalize">
                                              <h5 id="item-name">PANNIER</h5>
                                              <span><i class="fas fa-dollar-sign"></i>Rs. 120</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                                  <div class="card single-item">
                                      <div class="img-container">
                                      <a href="./veggg/pannier salad.php"><img src="./images/pannier salad.jpg" alt="" 
                                          class="card-img-top product-img"></a>

                                      </div>
                                      <div class="card-body">
                                          <div class="card-text d-flex justify-content-between text-capitalize">
                                              <h5 id="item-name">PANNIER SALAD</h5>
                                              <span><i class="fas fa-dollar-sign"></i>Rs. 110</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>


                              
                          </div>
                        </div>

                    </section>
                    </a>
                  
                  

                    <a name="our-services">
                    <section class="our-services">
                       <div class="container">
                           <h1 class="section-heading">Our services</h1>
                           <div class="card-wrapper flex">
                               <div class="service-card magic-shadow-sm">
                                   <img class="icon" src="./icons/transport.svg" alt="">
                                   <h2>Free Home delivery</h2>
                                   <p>we provides a dinner delivery service at your local residences.STAY HOME, STAY SAFE</p>
                                   <a href="homedelivery.php"><button class="btn btn-secondary">Order Now</button></a>
                               </div>
                               <div class="service-card magic-shadow-sm">
                                   <img class="icon" src="./icons/bag.svg" alt="">
                                   <h2 class="text-primary">Catering service</h2>
                                   <p>We will deliver and host at commercial locations for parties and special events.</p>
                                   <a href="catering.php"><button class="btn btn-primary">Reserve Now</button></a>
                               </div>
                               <div class="service-card magic-shadow-sm">
                                   <img class="icon" src="./icons/usd.svg" alt="">
                                   <h2>Survey Form</h2>
                                   <p>Thank u for agreeing 2 complete this imp. customer survey.</p>
                                   <a href="survey.php"><button class="btn btn-secondary">Fill Up</button></a>
                               </div>
                           </div>
           
                       </div>
                   </section>
                </a>

                      
                <a name="about-meal">
                    <section class="about-meal">
                        <div class="container">
                            <h1 class="section-heading">About Us</h1>
                            <div class="about-meal-wrap flex">
                                <div class="flex-1">
                                    <img src="./images/yogurt.png" class="foody-img" alt="">
                                </div>
                                <div class="flex-1">
                                    <h2>This is a long established fact that a reader will be distracted.</h2>
                                    <p>This shop has been successfully operated since 1984 and welcomes you to join us. We are located close to the beach in Berhampur, Odisha.

                                        Our goal is to offer great homemade food at a reasonable price while maintaining great quality and service. Enjoy a selection of appetizers, sandwiches, fresh seafood, steak, pastas, fresh salads, homemade desserts etc. We offer a full bar.
                                        
                                        Come join us for breakfast, lunch or dinner and dine on our outdoor patio or in the newly remodeled dining room.</p>
                                        <a href="#menu"><button class="btn btn-secondary">Order Now</button>
                                </div>
                            </div>
                        </div>
                    </section>
                </a>

                   
                    <a name="latest-news">
                    <section class="latest-news">
                        <div class="container">
                            <h1 class="section-heading">Latest News from Blog</h1>
                            <div class="article-wrapper">
                                <article class="card magic-shadow-sm">
                                    <div>
                                        <img src="./images/donut.jpg" alt="">
                                    </div>
                                    <div class="card-content">
                                        <div class="post-meta flex items-center justify-between">
                                            <span>Dec 04, 2020</span>
                                            <div>
                                                <span>Posted by <strong>R & B Restaurant</strong></span>
                                                <span class="comments-count">12 comments</span>
                                           </div>
                                        </div>
                                        <h2>Rahul Kumar Sahoo</h2>
                                        <p>Really good! Here's something else you could say instead of delicious. ...</p>
                                    </div>
                                </article>
                                <article class="card magic-shadow-sm">
                                    <div>
                                        <img src="./images/coffee.jpg" alt="">
                                    </div>
                                    <div class="card-content">
                                        <div class="post-meta flex items-center justify-between">
                                            <span>Dec 31, 2020</span>
                                            <div>
                                                <span>Posted by <strong>R & B Restaurant</strong></span>
                                                <span class="comments-count">22 comments</span>
                                           </div>
                                        </div>
                                        <h2>BKKK</h2>
                                        <p>This cake tastes different. I think I prefer to this chocolate cake. asw taste......wow</p>
                                    </div>
                                </article>
                            </div>
                            <div class="text-center btn-wrapper">
                                <button class="btn btn-secondary">View All</button>
                            </div>
                        </div>
                    </section>
                </a>
                    

                    <section class="subscribe">
                        <div class="container flex items-center">
                            <div>
                                <video autoplay muted loop id="myVideo">
                                    <source src="./images/sub.mp4" type="video/mp4">
                                    </video>
                            </div>
                            <div>
                                <h1>Subscribe to your newsletter</h1>
                                <p>People who love to eat are always the best people.</p>
                                <div class="input-wrap">
                                    <input type="email" placeholder="eg:xyz@gmail.com">
                                    <button>Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </section>



                    <a name="contact-us">
                    <section class="contact-us flex">
                        <div class="contact-info-wrapper">
                            <h1 class="section-heading">Contact us</h1>
                            <div class="contact-info">
                                <div>
                                    <div>
                                        <img src="./icons/phone-2.svg" alt="">
                                        <div>
                                            <span>Call us</span>
                                            <span>(+91)706 415 5716</span>
                                        </div>
                                    </div>
            
                                        <div>
                                        <img src="./icons/bag-2.svg" alt="">
                                        <div>
                                            <span>E-mail:</span>
                                            <span>rbrestaurant8@gmail.com</span>
                                        </div>
                                    </div>
            
                                     <div>
                                        <img src="./icons/clock-2.svg" alt="">
                                        <div>
                                            <span>Working Hours</span>
                                            <span>Mon - Sat (8.00am - 12.00pm)<span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2781.8465992735123!2d15.938858760120251!3d45.794300888258014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d6bbf46424f3%3A0x4595936ae331ae9a!2sR%20%26%20B%20Food!5e0!3m2!1sen!2sin!4v1611814961278!5m2!1sen!2sin" width="600"
                             height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </section>
                </a>


                    <footer>
                        <div class="container">
                            <div class="box">
                                <h3>About us</h3>
                                <p>Our goal is to offer great homemade food at a reasonable price. </p>
                                <a href="#about-meal"><button class="btn btn-secondary">Read More</button></a><br>
                                <img src="images/beer.gif" class="baby" alt="">
                            </div>
                            <div class="box">
                                <h3>Quik Links</h3>
                                <ul>
                                    <li>
                                        <a href="#home">Home</a>
                                    </li>
                                    <li>
                                        <a href="#top-products">Popular items</a>
                                    </li>
                                    <li>
                                        <a href="#menu">Menu</a>
                                    </li>
                                    <li>
                                        <a href="#about--meal">About us</a>
                                    </li>
                                    <li>
                                        <a href="#our-services">Services</a>
                                    </li>
                                    <li>
                                        <a href="#latest-news">Blog</a>
                                    </li>
                                    <li>
                                        <a href="#big-deal">Offers</a>
                                    </li>
                                    <li>
                                        <a href="#contact-us">Contact us</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="box">
                                <h3>Follow us</h3>
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/bikramkesharilenka.lenka">
                                            <img src="./icons/facebook.svg" alt="">
                                            <span>Facebook</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/i/connect_people">
                                            <img src="./icons/twitter.svg" alt="">
                                            <span>Twitter</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCsbJNA4CMbsYZuiyV4dQ25A">
                                            <img src="./icons/google.svg" alt="">
                                            <span>Google</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/bikramkesharilenkalenka/">
                                            <img src="./icons/instagram.svg" alt="">
                                            <span>Instagram</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="box instagram-api">
                                <h3>Instagram</h3>
                                <div class="post-wrap">
                                    <div>
                                        <img src="images/matar.jpeg" alt="">
                                    </div>
                                    <div>
                                        <img src="images/chingudi.jpeg" alt="">
                                    </div>
                                    <div>
                                        <img src="images/pannier finger.jpeg" alt="">
                                    </div>
                                    <div>
                                        <img src="images/bitter chips.jpeg" alt="">
                                    </div>
                                    <div>
                                        <img src="images/morton.jpeg" alt="">
                                    </div>
                                    <div>
                                        <img src="images/plate-2.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </footer>
                    <footer class="copyright">
                        <div>
                            Copyright &copy 2020 .All rights reserved by <a href="#">R&B Restaurant </a>
                        </div>
                    </footer>
                    

                  

                    
                    <script>
                    // Add active class to the current button (highlight it)
                        var header = document.getElementById("myDIV");
                        var btns = header.getElementsByClassName("bkkk");
                        for (var i = 0; i < btns.length; i++) {
                        btns[i].addEventListener("click", function() {
                        var current = document.getElementsByClassName("active");
                        current[0].className = current[0].className.replace(" active", "");
                        this.className += " active";
                        });
                        }
                        </script>
                    <script src="js/jQuery.js"></script>
                    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
  