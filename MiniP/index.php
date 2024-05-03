<!DOCTYPE html>
<html lang="en">
<head>
  <title>Charity</title>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
 
 .logo {
  margin-left: 0px;
  margin-top: 0px; /* Add margin-top to position the logo */
  object-position: left;
}

.logo-txt {
  font-size: 28px;
  font-weight: bold;
}

#home {
  margin-right: 10px;
  color: #569bef;
  text-decoration: underline;
  text-decoration-color: #569bef;
  text-underline-offset: 12px;
  text-decoration-thickness: 3px;
}

.donate-now {
  float: right;
  padding: 15px;
  font-size: 16px;
  background-color: #1100ff;
  margin-top: 25px;
}

.nav-menu {
  font-size: 18px;
  font-weight: 600;
  margin-top: 25px; 
}

.navbar-nav a:hover {
  color: #569bef;
  text-decoration: underline;
  text-decoration-color: #569bef;
  text-underline-offset: 12px;
  text-decoration-thickness: 3px;
}

.navbar-nav .nav-item {
  margin-right: 20px; /* Adjust margin between navbar items */
  margin-top: 20px;
}

.demo {
  color: white;
}


.carousel-content {
      color: white;
      position: absolute;
      top: 50%;
      left: 35%;
      transform: translate(-50%, -50%);
      text-align: left;
      z-index: 2;
    }

    .slider-title {
      font-size: 70px;
      font-weight: bold;
      margin-bottom: 20px;
      font-family: Chela one;
    }

    .slider-txt {
      font-size: 30px;
      margin-bottom: 30px;
      font-family: inika;
    }

    .slider-ptag {
      font-size: 18px;
      margin-bottom: 30px;
    }

    .carousel-btns {
  margin-top: 30px;
  z-index: 2;
}

.carousel-btns a {
  display: inline-block;
  padding: 10px 20px;
  border: 2px solid white;
  border-radius: 5px;
  color: white;
  text-decoration: none;
  transition: background-color 0.3s, color 0.3s;
}

.carousel-btns a:hover {
  background-color: white;
  color: black;
}


    .carousel-container {
      position: relative;
    }

    .carousel-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5); /* Black color with 50% opacity */
      z-index: 1;
    }

.section6-img1-place {
  text-decoration: none;
  color: black;
  font-size: 14px;
  margin-left: -73px;
}

.donate-btn,
.read-btn {
  border-width: 2px;
  border-style: solid;
  border-color: #569bef;
  border-radius: 50px;
  padding: 15px;
  text-decoration: none;
  color: white;
  text-align: center;
  width: 150px;
  background-color: #569bef;
}

.read-btn:hover {
  color: #569bef;
  background-color: #569bef;
}

.section4-border1,
.section4-border2,
.section4-border3 {
  border-width: 2px;
  border-style: solid;
  border-color: #7c7c7c;
  border-radius: 10px;
  width: 350px;
}


.tittle,
.tittle1,
.tittle2 {
  color: rgb(0, 0, 0);
  text-align: center; 
  font-size: 25px;
  font-weight: bold;
}

.txt,
.txt1,
.txt2 {
  color: rgb(0, 0, 0);
  text-align: center;
  margin: 10px;
}

.section5 {
  position: relative;
  padding: 96px 0;
  background: url("https://www.ourlittleroses.org/wp-content/uploads/2021/11/larm-rmah-AEaTUnvneik-unsplash-scaled.jpg") no-repeat center;
  background-size: cover;
  z-index: 99;
}

.section5::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  width: 100%;
  height: 100%;
  background: rgba(21, 21, 21, 0.9);
}

.section5-tittle {
  font-size: 28px;
  color: white;
  margin-top: 99px;
  margin-left: 96px;
}

.underline {
  border-bottom: 3px solid #569bef;
  width: 10%;
  margin-left: 96px;
}

.section5-txt {
  color: #b7b7b7;
  margin-top: 54px;
  margin-left: 96px;
}

.section5-img {
  width: 100%;
  margin-top: 109px;
  height: 386px;
}

.section5-readmore-btn {
  border-width: 2px;
  border-style: solid;
  border-color: #569bef;
  border-radius: 50px;
  padding: 10px;
  text-decoration: none;
  color: white;
  text-align: center;
  width: 150px;
  background-color: #569bef;
  margin-left: 96px;
}

.section6-tittle {
  font-size: 38px;
  font-weight: bold;
  margin-top: 69px;
  margin-left: 96px;
}

.section6-img1 {
  margin-left: 96px;
}

.section6-img1-tittle {
  text-decoration: none;
  color: black;
}

.section6-img1-tittle:hover {
  text-decoration: underline;
}

.section6-img1-date {
  text-decoration: none;
  color: black;
  font-size: 14px;
}

.section6-img1-place {
  text-decoration: none;
  color: black;
  font-size: 14px;
}

.section6-img1-ptag {
  font-size: 13px;
  color: #9a9191;
}

.section6-img1-date:hover {
  text-decoration: underline;
}

.section6-img1-place:hover {
  text-decoration: underline;
}

.section6-donate-btn {
  border-width: 2px;
  border-style: solid;
  border-color: #569bef;
  border-radius: 50px;
  padding: 10px;
  text-decoration: none;
  color: white;
  text-align: center;
  width: 150px;
  background-color: #569bef;
}

.section6-tittle2 {
  font-size: 38px;
  font-weight: bold;
  margin-top: 69px;
  margin-left: 96px;
}

.section6-bg {
  background-color: #ecf2f5;
  height: 500px;
  padding-top: 40px;
  width: 85%;
  margin-left: 94px !important;
}

.section6-img2-tittle {
  text-decoration: none;
  color: black;
}

.section6-img2-tittle:hover {
  text-decoration: underline;
}

.section6-img2-date {
  text-decoration: none;
  color: black;
  font-size: 14px;
}

.section6-img2-place {
  text-decoration: none;
  color: black;
  font-size: 14px;
}

.section6-img2-date:hover {
  text-decoration: underline;
}

.section6-img2-place:hover {
  text-decoration: underline;
}

.section6-donate-btn2 {
  border-width: 2px;
  border-style: solid;
  border-color: #569bef;
  border-radius: 50px;
  padding: 10px;
  text-decoration: none;
  color: white;
  text-align: center;
  width: 150px;
  background-color: #569bef;
}

.section6-padding {
  padding-top: 60px;
}

.section7-tittle {
  font-size: 38px;
  font-weight: bold;
  margin-top: 69px;
  margin-left: 96px;
}

.section7-img1 {
  margin-left: 96px;
}

.section7-img1-tittle {
  text-decoration: none;
  color: black;
}

.section7-img1-tittle:hover {
  text-decoration: underline;
}

.section7-img1-date {
  text-decoration: none;
  color: black;
  font-size: 14px;
}

.section7-img1-place {
  text-decoration: none;
  color: black;
  font-size: 14px;
}

.section7-img1-date:hover {
  text-decoration: underline;
}

.section7-img1-place:hover {
  text-decoration: underline;
}

.section7-donate-btn {
  border-width: 2px;
  border-style: solid;
  border-color: #569bef;
  border-radius: 50px;
  padding: 10px;
  text-decoration: none;
  color: white;
  text-align: center;
  width: 150px;
  background-color: #569bef;
}

.section7-padding {
  padding-top: 60px;
}

.section8-tittle {
  font-size: 38px;
  font-weight: bold;
  margin-top: 69px;
  margin-left: 96px;
}

.section8 {
  background-color: #ecf2f5;
  padding-top: 40px;
  padding-bottom: 40px;
}

.section8-content {
  margin-bottom: 30px;
}

.section8-content h2 {
  line-height: 1.3;
  font-size: 36px;
  font-weight: 600;
}

.section8-underline {
  border-bottom: 3px solid #569bef;
  width: 10%;
  margin-top: 20px;
}

.section8-stat {
  text-align: center;
  margin-bottom: 30px;
}

.section8-stat h2 {
  font-size: 36px;
}

.section8-stat img {
  width: 100px;
  height: 100px;
  margin-bottom: 12px;
}

.section8-stat p {
  font-size: 16px;
  color: #9a9191;
}

.section9 {
  background-color: #000;
  padding-top: 100px;
  padding-bottom: 50px;
}

.section9-content h2 {
  font-size: 38px;
  font-weight: bold;
  margin-top: 69px;
  margin-left: 96px;
}

.section9-content p {
  font-size: 16px;
  color: #9a9191;
}

.section9-social-icons {
  margin-top: 20px;
}

.section9-social-icons a {
  text-decoration: none;
  color: white;
  margin-right: 10px;
}

.section9-social-icons a:hover {
  text-decoration: underline;
}

.section9-links h5 {
  color: white;
  font-weight: lighter;
}

.section9-links ul {
  list-style: none;
  padding: 0;
}

.section9-links ul li {
  margin-bottom: 10px;
}

.section9-links ul li a {
  text-decoration: none;
  color: white;
}

.section9-links ul li a:hover {
  text-decoration: underline;
}

.section9-latest-news h5 {
  color: white;
  font-weight: lighter;
}

.section9-latest-news ul {
  list-style: none;
  padding: 0;
}

.section9-latest-news ul li {
  margin-bottom: 10px;
}

.section9-latest-news ul li a {
  text-decoration: none;
  color: white;
}

.section9-latest-news ul li a:hover {
  text-decoration: underline;
}

.section9-latest-news .section9-img1-date {
  color: #569bef;
  font-size: 14px;
}

.section9-contact h5 {
  color: white;
  font-weight: lighter;
}

.section9-contact p {
  font-size: 16px;
  color: white;
  margin-bottom: 10px;
}

.section9-contact form {
  margin-top: 20px;
}

.section9-contact .input-group {
  width: 100%;
  max-width: 300px;
}

.section9-contact .form-control {
  border-radius: 50px;
}

.section9-contact .btn {
  border-radius: 50px;
}

</style>  
</head>
<body>
  <div>
    <section class="section2">
      <div class="container">
        <div class="row">
          <div class="col">
            <a href="index.php" style="text-decoration: none;">
              <img src="images/logo.png" class="logo" >
            </a>           
          </div>
           <div class="col">
            <nav class="navbar navbar-expand-sm">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a href="#" class="nav-link" id="home" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="event.php">Events</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="comdirectory.php">Directory</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="gallery.php">Resources</a>
                    </li>
                  </ul>
                </div>
                <a href="comdirectory.php" style="text-decoration:none;">
                  <p class="text-white donate-now">Donate Now</p>
                </a>
            </nav>
          </div>
        </div>
      </div>   
    </section>     
  </div>      
  <section class="section3">
    <div class="container-fluid carousel-container" style="padding-right:0px; padding-left: 0px;">
      <div id="demo" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-content">
          <h1 class="slider-title">About us</h1>
          
          <p class="slider-ptag">Welcome to WeConnect, the global hub for organizations dedicated to fostering positive change for humanity and our planet. At WeConnect, we believe in the power of collaboration and collective action to address pressing social, environmental, and humanitarian challenges. Our platform serves as a vibrant community where like-minded organizations come together in friendly ways to share resources, ideas, and expertise, amplifying their impact on a global scale. Whether you're an NGO, grassroots movement, or social enterprise, WeConnect provides the tools, connections, and support needed to drive meaningful change and create a brighter future for all. Join us as we unite for a better world. Together, we can make a difference. Welcome to the WeConnect family.</p>
          <div class="carousel-btns">
            <a href="enroll.php" type="button">ENROLL YOUR COMMUNITY</a>  
             <a href="signin.php" type="button">SIGN-IN</a>
          </div>
        </div>
        <div class="carousel-overlay"></div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="5000">
            <img src="images/Property 1=Frame 6.png" alt="Slide 1" class="d-block w-100">
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <img src="images/Property 1=Frame 7.png" alt="Slide 2" class="d-block w-100">
          </div>
          <div class="carousel-item" data-bs-interval="5000">
            <img src="images/Property 1=Frame 8.png" alt="Slide 3" class="d-block w-100">
          </div>
        </div>  
      </div>
    </div>
  </section>
    <br/><br/><br/><br/>
    <section class="section8">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <!-- Content Column -->
            <div class="section8-content">
              <h2>We love to help all the children that have problems in the world.</h2>
              <p>Dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Lorem ipsum dolor sit amet.</p>
              <div class="section8-underline"></div>
            </div>
          </div>
          <div class="col-md-6">
            <!-- Statistics Column -->
            <div class="row">
              <div class="col-md-4">
                <div class="section8-stat">
                  <img src="images/working-hands.jpg" alt="Children helped">
                  <h2><span class="purecounter">120</span>K</h2>
                  <p>Children helped</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="section8-stat">
                  <img src="images/helping-hand.jpg" alt="Water wells">
                  <h2><span class="purecounter">79</span></h2>
                  <p>Water wells</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="section8-stat">
                  <img src="images/dove.png" alt="Volunteers">
                  <h2><span class="purecounter">253</span></h2>
                  <p>Volunteers</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section6">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-6">
            <p class="section6-tittle">Upcoming Events</p>
            <div class="underline"></div>
            <br/><br/>
            <div class="row">
              <div class="col">                
              <img src="images/section6-img1.jpg" style="width:50%; /*height:152px;*/height: auto;" class="section6-img1">
              </div>
              <div class="col">
                <a href="index-php"  class="section6-img1-tittle"><h4 class="section6-img1-txt">Fundraiser for Kids</h4></a>
                <div class="row">
                  <div class="col">
                   <a href="index.php" style="text-decoration:none;"><p class="section6-img1-date">Aug 25, 2018 |</p></a>
                  </div>
                  <div class="col">
                   <a href="index.php" style="text-decoration:none"><p class="section6-img1-place"> Ball Room New York &nbsp;</p></a>
                  </div>
                </div>
                <p  class="section6-img1-ptag">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.<br/><br/>  <span style="font-size:14px;"><a href="index.php" style="text-decoration:none;color: #569bef;"> Read More</a></span></p>
              </div>
            </div>
            <div class="row">
              <div class="col">                
              <img src="images/section6-img1.jpg" style="width:50%; /*height:152px;*/height: auto;" class="section6-img1">
              </div>
              <div class="col">
                <a href="index-php"  class="section6-img1-tittle"><h4 class="section6-img1-txt">Bring water for Kids</h4></a>
                <div class="row">
                  <div class="col">
                   <a href="index.php" style="text-decoration:none;"><p  class="section6-img1-date">Aug 25, 2018 |</p></a>
                  </div>
                  <div class="col">
                   <a href="index.php" style="text-decoration:none"><p class="section6-img1-place"> Ball Room New York &nbsp;</p></a>
                  </div>
                </div>
                <p class="section6-img1-ptag">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.<br/><br/>  <span style="font-size:14px;"><a href="index.php" style="text-decoration:none;color: #569bef;"> Read More</a></span></p>
              </div>
            </div>
            <div class="row">
              <div class="col">                
              <img src="images/section6-img1.jpg" style="width:50%; /*height:152px;*/height: auto;" class="section6-img1">
              </div>
              <div class="col">
                <a href="index-php"  class="section6-img1-tittle"><h4 class="section6-img1-txt">Education for Kids</h4></a>
                <div class="row">
                  <div class="col">
                   <a href="index.php" style="text-decoration:none;"><p class="section6-img1-date">Aug 25, 2018 |</p></a>
                  </div>
                  <div class="col">
                   <a href="index.php"  style="text-decoration:none"><p class="section6-img1-place"> Ball Room New York &nbsp;</p></a>
                  </div>
                </div>
                <p class="section6-img1-ptag">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.<br/><br/>  <span style="font-size:14px;"><a href="index.php" style="text-decoration:none;color: #569bef;"> Read More</a></span></p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-6">
            <p class="section6-tittle2">Featured Cause</p>
            <div class="underline"></div>
            <br/>
            <div class="row section6-bg"  >
              <div class="col">                
              <img src="images/section6-img2.webp" style="width: 75%; /*height: 288px;*/height: auto;" class="section6-img2">
              </div>
              <div class="col" style="margin-left:-70px">
                <a href="index-php"  class="section6-img2-tittle"><h4>Fundraiser for Kids</h4></a>
                <div class="row">
                  <div class="col">
                   <a href="index.php" style="text-decoration:none;"><p class="section6-img2-date">Aug 25, 2018 |</p></a>
                  </div>
                  <div class="col">
                   <a href="index.php" style="text-decoration:none;"><p class="section6-img2-place"> Ball Room New York &nbsp;</p></a>
                  </div>
                </div>
                <p style="font-size:16px;color: #9a9191;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.<br/><br/>  <span style="font-size:14px;"></p>                
                <a href="index.php" class="section6-donate-btn" type="button">Donate Now</a>
              </div>
              <div class="progress" >              
                <div class="progress-bar" role="progressbar" style="width: 83%;background-color: #569bef; " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">83%</div>                                      
               </div>
                <div class="row">
                  <div class="col">
                    <p class="card-text" style="font-size:16px;color: #9a9191;">Raised: $56 880 </p> 
                  </div>
                  <div class="col">
                    <p class="card-text" style="font-size:16px;color: #9a9191; text-align: right;">Goal: $70 000 </p> 
                  </div>
                </div>
              </div> 
          </div>
        </div>
      </div>
    </section>
    <br/><br/><br/><br/><br/>
    <section class="section5">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-6">
            <p class="section5-tittle">Welcome to Our Charity</p>
            <div class="underline"></div>
            <p class="section5-txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempusvestib ulum mauris quis aliquam. Lorem ipsum dolor sit amet, consecteturadipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus velit ullamcorper id. Quisque at erat eu libero consequat tempus. Quisque molestie convallis tempus. Ut semperpurus metus, a euismod sapien sodales ac. Duis viverra eleifend fermentum.</p>
            <br/>
            <a href="index.php" class="section5-readmore-btn" type="button">Read More</a>            
          </div>
           <div class="col-sm-12 col-md-6 col-lg-6">
            <img src="images/section5-img.jpg" class="section5-img" >            
          </div>
        </div>
      </div>
    </section>
    
    <br/><br/>
    <section class="section4">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-md-6 col-lg-4">
            <div class="section4-border1">
              <img src="images/helping logo.png" style="width: 100px;height: 100px;
              margin-left:116px;margin-top: 24px;margin-bottom: 12px;">
              <p class="tittle">Become a Volunteer</p>
              <p class="txt">Lorem ipsum dolor sit amet, <br/>consectetur adipiscing elit. Mauris <br/>tempus vestib ulum mauris quis<br/> aliquam.</p>
            </div>            
          </div>
          <div class="col-sm-4 col-md-6 col-lg-4 ">
            <div class="section4-border2">
              <img src="images/helping logo.png" style="width: 100px;height: 100px;
              margin-left:116px;margin-top: 24px;margin-bottom: 12px;">
              <p class="tittle1">Dance & Music</p>
              <p class="txt1">Lorem ipsum dolor sit amet, <br/>consectetur adipiscing elit. Mauris <br/>tempus vestib ulum mauris quis<br/> aliquam.</p>
            </div>
          </div>
          <div class="col-sm-4 col-md-6 col-lg-4 ">
            <div class="section4-border3">
              <img src="images/helping logo.png" style="width: 100px;height: 100px;
              margin-left:116px;margin-top: 24px;margin-bottom: 12px;">
              <p class="tittle2">Become a Volunteer</p>
              <p class="txt2">Lorem ipsum dolor sit amet, <br/>consectetur adipiscing elit. Mauris <br/>tempus vestib ulum mauris quis<br/> aliquam.</p>
            </div>
          </div>
        </div>
      </div>      
    </section>
                    
            <div class="carousel-item " >
              <div class="card-wrapper container-sm d-flex  justify-content-around">
                    <div class="card shadow p-3 mb-5 bg-body rounded " style="width: 23rem; border: none;" >
                      <img src="images/section5-img.jpg" class="card-img-top" alt="architecture of TN" style="width:100%;    height: 190px;">
                      <div class="card-body">
                         <h5 class="card-title" style="font-weight: bold;">Bring Water to the Childrens1</h5>  
                        <p class="card-text" style="font-size:16px;color: #9a9191;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.  </p>    
                        <div class="progress" >              
                          <div class="progress-bar" role="progressbar" style="width: 83%;background-color: #569bef; " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">83%</div>
                        </div>  
                        <br/>
                        <div class="row">
                          <div class="col">
                            <p class="card-text" style="font-size:16px;color: #9a9191;">Raised: $56 880 </p> 
                          </div>
                          <div class="col">
                            <p class="card-text" style="font-size:16px;color: #9a9191; text-align: right;">Goal: $70 000 </p> 
                          </div>
                        </div> 
                      </div>
                    </div>
                    <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 23rem; border: none;">
                      <img src="images/section6-img2.webp" class="card-img-top" alt="Festivals of TN" style="width:100%;height:190px;">
                      <div class="card-body">
                        <h5 class="card-title" style="font-weight: bold;">Education for all</h5> 
                         <p class="card-text" style="font-size:16px;color: #9a9191;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.  </p>   
                         <div class="progress" >              
                          <div class="progress-bar" role="progressbar" style="width: 83%;background-color: #569bef; " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">83%</div>
                        </div> 
                        <br/>
                        <div class="row">
                          <div class="col">
                            <p class="card-text" style="font-size:16px;color: #9a9191;">Raised: $56 880 </p> 
                          </div>
                          <div class="col">
                            <p class="card-text" style="font-size:16px;color: #9a9191; text-align: right;">Goal: $70 000 </p> 
                          </div>
                        </div>      
                      </div>
                    </div>
                    <div class="card shadow p-3 mb-5 bg-body rounded"  style="width: 23rem; border: none;">
                      <img src="images/section6-img1.jpg" class="card-img-top" alt="food of TN" style="width:100%;height:190px;">
                      <div class="card-body">
                        <h5 class="card-title" style="font-weight: bold;">Bring Water to the Childrens</h5> 
                        <p class="card-text" style="font-size:16px;color: #9a9191;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.  </p>    
                        <div class="progress" >              
                          <div class="progress-bar" role="progressbar" style="width: 83%;background-color: #569bef; " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">83%</div>
                        </div> 
                        <br/>
                        <div class="row">
                          <div class="col">
                            <p class="card-text" style="font-size:16px;color: #9a9191;">Raised: $56 880 </p> 
                          </div>
                          <div class="col">
                            <p class="card-text" style="font-size:16px;color: #9a9191; text-align: right;">Goal: $70 000 </p> 
                          </div>
                        </div>    
                      </div>
                    </div>
                  </div>
                  </div>         
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" >
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
          </div>            
      </div>
    </section>
    <br/>
   
    
    <br/><br/> <br/>
    <section class="section9">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <!-- Content Column -->
            <div class="section9-content">
              <h2 class="section9-tittle">The Charity</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Lorem ipsum dolo</p>
              <div class="section9-social-icons">
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-whatsapp"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <!-- Links Column -->
            <div class="section9-links">
              <h5>Useful Links</h5>
              <ul>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Become a Volunteer</a></li>
                <li><a href="#">Donate</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Causes</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">News</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <!-- Latest News Column -->
            <div class="section9-latest-news">
              <h5>Latest News</h5>
              <ul>
                <li>
                  <a href="#">A new cause to help</a>
                  <span class="section9-img1-date">March 12, 2018</span>
                </li>
                <li>
                  <a href="#">We love to help people</a>
                  <span class="section9-img1-date">March 12, 2018</span>
                </li>
                <li>
                  <a href="#">The new ideas for helping</a>
                  <span class="section9-img1-date">March 12, 2018</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
          </div>
        </div>
      </div>
    </section>
    
  </div>  
  <p class="bg-dark " style="color:#9a9191; text-align: center; padding: 10px;" >Copyright ©2024 All rights reserved</p>
</body>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>

  <script>
    AOS.init({
       duration: 1600,
    });  
    new PureCounter({
       once: false,
    pulse: false,
    formater: "us-US",
    separator: true,
    decimals: 0,
    delay: 10, 
    }); 
  </script>
</html>

