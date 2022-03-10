<?php 
require 'login.php';
require 'registration.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahendra Bhaiya ki Website</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    
</head>
<style media="screen">
  .carousel {
  background: #fff;
}

.carousel-cell {
  margin-right: 10px;
  background-color: #fff;
  counter-increment: carousel-cell;
}

/* cell number */
.carousel-cell:before {
  display: block;
}

</style>
<body>
    
    <!-- Navbar -->
    <header>
        <a href="#home_1" class="logo">Alpha Live</a>
        <div id="menu-icon" class="fas fa-bars"></div>
        <ul class="navbar">
         
          <li><a class="about_2" href="#about_2">About</a></li>
          <li><a class="servies_5" href="#servies_4">Services</a></li>
          <li><a class="servies_5" href="#servies_4">Store</a></li>
          <li><a class="products_3" href="#Testimonies_5">Testimonies</a></li> 
          <li><a class="contactus_7" href="#contact_6">Contact US</a></li>
          <li><a class="login_6" href="http://localhost:8080/hello/login_reg.php" target="_blank">Login</a></li>
          <!-- <li><a href="#certificate">Services</a></li> -->
        </ul>
      </header>
  
      <section class="home" id="home_1">
        <div class="home-text">
          <h1>Welcome To <span>Alpha Live Solutions</span></h1>
          <h2 class="company_intro"> Alpha Live Solutions is a leading end-to-end IT solutions provider in the country. Leveraging its relationship with world leaders in the IT space, Alpha Live has demonstrated expertise in a wide range of Technologies. </h2>
          <p></p>
          <a href="https://www.buymeacoffee.com/PreetOjha08" target="_blank" class="btn">Book A Meeting Now</a>
        </div>
      </section>


      <!-- About -->
    <section class="about" id="about_2">
      <div class="about-img">
        <!-- <img class="img_about" src="img/new_po.png" alt="" 
        <img class="img_about" src="Images/new_server.gif" alt="server_image" />/> -->

        <div class="about_icon">
          <img src="About/star.png" alt="">
        </div>
        <div class="about_icon_title">
            <h2>5-Star Rating</h2>
        </div>
        
        <div class="about_icon">
          <img src="About/truck.png" alt="">
        </div>
        <div class="about_icon_title">
            <h2>Fast Delivery</h2>
        </div>

        <div class="about_icon">
          <img src="About/support.png" alt="">
        </div>
        <div class="about_icon_title">
            <h2>Technical Support</h2>
        </div>
        
        
      </div>
      <div class="about-text">
        <h2>About Us</h2>
        <div class="about-name"><h1>Why We Are <span> Different</span></h1></div>
        
        <p></p>
        <h3 class="company_intro"> The Company is well positioned to provide advisory services to large and small enterprise that help them arrive at the right mix of technologies and the optimal way of deploying and managing them. </h3>
        <p></p>
        <h3 class="company_intro"> Cronic Technologies is an IT Company in the business of Software and Hardware products reselling, Integration, IT Consulting, Volume Software License Deployment & Training, Field Support Services and Networking. </h3>
        <p></p>
        <a href="https://www.buymeacoffee.com/PreetOjha08" target="_blank" ><h3><span>Read More..</span></h3></a>
        <p></p>
      </div>
      
    </section>

     <!-- Servies -->

    <section class="portfolio" id="servies_section">
      <div class="heading">
        <h1>Servies</h1>
      </div>

      <!-- Content -->
      <div class="portfolio-content">
        
        <div class="p-box_servies_1_new">
          <div class="services_image">
            <img src="Servies/1.png" alt="Images">
          </div>
          <div class="services_title">
            <h2 class="p-box_servies_h2">Network Security</h2>  
          </div>
          <div class="services_desc">
            <p>Network security consists of the policies, processes and practices adopted to prevent, detect and monitor unauthorized access, misuse, modification, or denial of a computer network and network-accessible.</p>
          </div>
          <div class="service_button">
            <a class="btn" href="">Know More</a>
          </div>
          
        </div>

        <div class="p-box_servies_1_new">
          <div class="services_image">
            <img src="Servies/2.png" alt="Images">
          </div>
          <div class="services_title">
            <h2 class="p-box_servies_h2">Firewall Installation</h2>  
          </div>
          <div class="services_desc">
            <p>Although they sound complex, firewalls are relatively easy to install, setup and operate. Most people think that a firewall is a of device that is installed on the network, and it controls the traffic that passes through the network segment.</p>
          </div>
          <div class="service_button">
            <a class="btn" href="">Know More</a>
          </div>
        </div>

        <div class="p-box_servies_1_new">
          <div class="services_image">
            <img src="Servies/3.png" alt="Images">
          </div>
          <div class="services_title">
            <h2 class="p-box_servies_h2">Server Configuration</h2>  
          </div>
          <div class="services_desc">
            <p>A server configuration defines a specific database as the repository for its data. To prevent corruption, that database can be associated with only one server configuration. However, that database can be used by other applications.</p>
          </div>
          <div class="service_button">
            <a class="btn" href="">Know More</a>
          </div>
          
        </div>
       
      </div>
    </section>


    <!-- Product part 2-->

    <section class="product" id="our_products">
      <div class="heading">
        <h1>Our <span>Products</span></h1>
      </div>

      <!-- Content -->
      <div class="product-content">
        
        <div class="p-box_product_1_new">

          <div class="product_main_title">
            <h2 class="p-box_servies_h2">Top Workstation</h2>  
          </div>

          <div class="product_image">
            <img src="Servies/1.png" alt="Images">
          </div>
          
          <hr class="line"></hr>
          <div class="product_title">
            <h2 class="p-box_servies_h2">Lenovo Workstation</h2>  
          </div>

          <hr class="line"></hr>
          <div class="product_title">
            <h2 class="p-box_servies_h2">Dell Workstation</h2>  
          </div>
          
          <hr class="line"></hr>
          <div class="product_title">
            <h2 class="p-box_servies_h2">HP Workstation</h2>  
          </div>
          
          <hr class="line"></hr>
          <div class="product_title">
            <h2 class="p-box_servies_h2">IBM Workstation</h2>  
          </div>
          
          <hr class="line"></hr>
          <div class="product_title">
            <h2 class="p-box_servies_h2">Tyan Workstation</h2>  
          </div>
          
          <br></br>
          
          <div class="service_button">
            <a class="btn" href="">Know More</a>
          </div>
        </div>

        <div class="p-box_product_1_new">

          <div class="product_main_title">
            <h2 class="p-box_servies_h2">Top Servers</h2>  
          </div>

          <div class="product_image">
            <img src="Servies/2.png" alt="Images">
          </div>

          <hr class="line"></hr>
          <div class="product_title">
            <h2 class="p-box_servies_h2">Lenovo Server</h2>  
          </div>

          <hr class="line"></hr>
          <div class="product_title">
            <h2 class="p-box_servies_h2">IBM Server</h2>  
          </div>
         
          <hr class="line"></hr>
          <div class="product_title">
            <h2 class="p-box_servies_h2">Cisco Server</h2>  
          </div>
          
          <hr class="line"></hr>
          <div class="product_title">
            <h2 class="p-box_servies_h2">HPE Server</h2>  
          </div>

          <hr class="line"></hr>
          <div class="product_title">
            <h2 class="p-box_servies_h2">Tyan Server</h2>  
          </div>
          
          <br></br>
          
          <div class="service_button">
            <a class="btn" href="">Know More</a>
          </div>
          
        </div>

        <div class="p-box_product_1_new">

           <div class="product_main_title">
            <h2 class="p-box_servies_h2">Top Harddisk</h2>  
          </div>

          <div class="product_image">
            <img src="Servies/3.png" alt="Images">
          </div>
          
          <hr class="line"></hr>
          <div class="product_title">
            <h2 class="p-box_servies_h2">Lenovo Harddisk</h2>  
          </div>

          <hr class="line"></hr>
          <div class="product_title">
            <h2 class="p-box_servies_h2">Seagate Harddisk</h2>  
          </div>
          
          <hr class="line"></hr>
          <div class="product_title">
            <h2 class="p-box_servies_h2">Sandisk Harddisk</h2>  
          </div>
         
          <hr class="line"></hr>
          <div class="product_title">
            <h2 class="p-box_servies_h2">Patanai Harddisk</h2>  
          </div>
          
          <hr class="line"></hr>
          <div class="product_title">
            <h2 class="p-box_servies_h2">Tyan Harddisk</h2>  
          </div>
          
          <br></br>
          
          <div class="service_button">
            <a class="btn" href="">Know More</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonies -->
    <section class="testimonies" id="Testimonies_5">
      <div class="heading">
        <h1>Top Testimonies</h1>
      </div>

      <!-- Testimonies Content -->

      <div class="carousel" data-flickity='{ "wrapAround": true, "autoPlay": true, "imagesLoaded":true, "groupCells": true }'>
        
        <!-- 1 -->
        <div class="carousel-cell">

          <div class="c-box">
            <div class="c-img">
            <img src="Images/Testimonies/microsoft.png" alt="images" />
            </div>

            <div class="c-box-content">
              <h2>Bill Gates 1</h2>
              <p>
                Microsoft Corporation, Technology company 
                <br></br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, aliquam error. Quisquam dolorum tenetur eius a aperiam, error ad autem accusamus nostrum pariatur minus odio beatae harum. Animi omnis deleniti voluptas, optio fuga aliquid ea. <br>
              </p>
            </div>
          </div>

        </div>

        <!-- 2 -->
        <div class="carousel-cell">

          <div class="c-box">
            <div class="c-img">
            <img src="Images/Testimonies/microsoft.png" alt="images" />
            </div>

            <div class="c-box-content">
              <h2>Bill Gates 2</h2>
              <p>
                Microsoft Corporation, Technology company
                <br></br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, aliquam error. Quisquam dolorum tenetur eius a aperiam, error ad autem accusamus nostrum pariatur minus odio beatae harum. Animi omnis deleniti voluptas, optio fuga aliquid ea. <br>
              </p>
            </div>
          </div>

        </div>

        <!-- 3 -->
        <div class="carousel-cell">

          <div class="c-box">
            <div class="c-img">
            <img src="Images/Testimonies/microsoft.png" alt="images" />
            </div>

            <div class="c-box-content">
              <h2>Bill Gates 3</h2>
              <p>
                Microsoft Corporation, Technology company
                <br></br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, aliquam error. Quisquam dolorum tenetur eius a aperiam, error ad autem accusamus nostrum pariatur minus odio beatae harum. Animi omnis deleniti voluptas, optio fuga aliquid ea. <br>
              </p>
            </div>
          </div>

        </div>

        <!-- 4 -->
        <div class="carousel-cell">

          <div class="c-box">
            <div class="c-img">
            <img src="Images/Testimonies/microsoft.png" alt="images" />
            </div>

            <div class="c-box-content">
              <h2>Bill Gates 4</h2>
              <p>
                Microsoft Corporation, Technology company
                <br></br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, aliquam error. Quisquam dolorum tenetur eius a aperiam, error ad autem accusamus nostrum pariatur minus odio beatae harum. Animi omnis deleniti voluptas, optio fuga aliquid ea. <br>
              </p>
            </div>
          </div>

        </div>

        <!-- 5 -->
        <div class="carousel-cell">

          <div class="c-box">
            <div class="c-img">
            <img src="Images/Testimonies/microsoft.png" alt="images" />
            </div>

            <div class="c-box-content">
              <h2>Bill Gates 5</h2>
              <p>
                Microsoft Corporation, Technology company
                <br></br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, aliquam error. Quisquam dolorum tenetur eius a aperiam, error ad autem accusamus nostrum pariatur minus odio beatae harum. Animi omnis deleniti voluptas, optio fuga aliquid ea. <br>
              </p>
            </div>
          </div>

        </div>

        <!-- 6 -->
        <div class="carousel-cell">

          <div class="c-box">
            <div class="c-img">
            <img src="Images/Testimonies/microsoft.png" alt="images" />
            </div>

            <div class="c-box-content">
              <h2>Bill Gates 6</h2>
              <p>
                Microsoft Corporation, Technology company
                <br></br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, aliquam error. Quisquam dolorum tenetur eius a aperiam, error ad autem accusamus nostrum pariatur minus odio beatae harum. Animi omnis deleniti voluptas, optio fuga aliquid ea. <br>
              </p>
            </div>
          </div>

        </div>

        <!-- 7 -->
        <div class="carousel-cell">

          <div class="c-box">
            <div class="c-img">
            <img src="Images/Testimonies/microsoft.png" alt="images" />
            </div>

            <div class="c-box-content">
              <h2>Bill Gates 7</h2>
              <p>
                Microsoft Corporation, Technology company
                <br></br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, aliquam error. Quisquam dolorum tenetur eius a aperiam, error ad autem accusamus nostrum pariatur minus odio beatae harum. Animi omnis deleniti voluptas, optio fuga aliquid ea. <br>
              </p>
            </div>
          </div>

        </div>

        <!-- 8 -->
        <div class="carousel-cell">

          <div class="c-box">
            <div class="c-img">
            <img src="Images/Testimonies/microsoft.png" alt="images" />
            </div>

            <div class="c-box-content">
              <h2>Bill Gates 8</h2>
              <p>
                Microsoft Corporation, Technology company
                <br></br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, aliquam error. Quisquam dolorum tenetur eius a aperiam, error ad autem accusamus nostrum pariatur minus odio beatae harum. Animi omnis deleniti voluptas, optio fuga aliquid ea. <br>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>


     <!-- Contact -->
     <section class="contact" id="contact_6">
      <div class="heading">
        <h1>Contact US</h1>
      </div>
      <!-- Content -->
      <div class="contact-content">
        <div class="contact-info">
          <div class="info-box">
            <i class="fas fa-phone-alt"></i>
            <p>+91 997 467 5848</p>
          </div>
          <div class="info-box">
            <i class="fas fa-envelope-open"></i>
            <p class="p_email">developer.preetojha08@gmail.com</p>
          </div>
          <div class="info-box">
            <i class="fas fa-map-marker-alt"></i>
            <p>Ahmedabad Gujarat, India</p>
          </div>
          <div class="info-box social">
            <a href="https://www.facebook.com/Preet.Ojha.3745/" target="blank"
              ><i class="fab fa-facebook"></i
            ></a>
            <a href="https://www.instagram.com/preet_ojha_/" target="blank"
              ><i class="fab fa-instagram"></i
            ></a>
            <a
              href="https://www.linkedin.com/in/developer-preet-ojha/"
              target="blank"
              ><i class="fab fa-linkedin"></i
            ></a>
            <a
              href="https://play.google.com/store/apps/developer?id=Creatures"
              target="blank"
              ><i class="fab fa-google-play"></i
            ></a>
          </div>
        </div>
        <!-- Contact Form -->
        <div class="contact-form">
          <form action="">
            <input type="text" placeholder="Your Name" />
            <input type="email" placeholder="Your Email" />
            <input type="subject" placeholder="Subject Here" />
            <textarea
              name=""
              id=""
              cols="30"
              rows="10"
              placeholder="Write your message here..."
            ></textarea>
            <input type="button" value="Send" class="contact-button" />
          </form>
        </div>
      </div>
    </section>

    <!-- Copyright -->
    <div class="copyright">
      <p>&#169; Creatures ♥ All Right Reserved</p>
    </div>



</body>
</html>