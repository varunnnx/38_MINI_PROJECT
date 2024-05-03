<!DOCTYPE html>
<html lang="en">
<head>
  <title>Charity</title>
  <meta charset="utf-8">
  <link href="aboutus.css" rel="stylesheet">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
  <div>
    <section class="section2">
      <div class="container">
        <div class="row">
          <div class="col">
            <a href="collab.php" style="text-decoration: none;">
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
                      <a href="collab.php" class="nav-link" id="home">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="about.php" id="Events">Events</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="cause.php">Directory</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="resourcec.php">Resources</a>
                    </li>
                  </ul>
                </div>
            </nav>
          </div>
        </div>
      </div>   
    </section>     
  </div>        
  </div>      
    <br/><br/><br/><br/>
    <div class="form-container">
  <p class="section6-tittle">Post an Event</p>
  
  <form id="eventForm" onsubmit="return validateForm()">
    <div class="mb-3">
      <label for="eventTitle" class="form-label">Event Title</label>
      <input type="text" class="form-control" id="eventTitle" placeholder="Enter event title" required>
    </div>
    <div class="mb-3">
      <label for="eventDate" class="form-label">Date and Time</label>
      <input type="datetime-local" class="form-control" id="eventDate" required>
    </div>
    <div class="mb-3">
      <label for="eventVenue" class="form-label">Venue</label>
      <input type="text" class="form-control" id="eventVenue" placeholder="Enter event venue" required>
    </div>
    <div class="mb-3">
      <label for="eventDetails" class="form-label">Event Details</label>
      <textarea class="form-control" id="eventDetails" rows="3" placeholder="Enter event details" required></textarea>
    </div>
    <div class="mb-3">
      <label for="eventImage" class="form-label">Event Image</label>
      <input type="file" class="form-control" id="eventImage" accept="image/*">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<script>
  function validateForm() {
    const title = document.getElementById('eventTitle').value.trim();
    const date = document.getElementById('eventDate').value.trim();
    const venue = document.getElementById('eventVenue').value.trim();
    const details = document.getElementById('eventDetails').value.trim();
    
    if (!title || !date || !venue || !details) {
      alert('Please fill out all required fields.');
      return false;
    }

  

    return true;
  }
</script>


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
    <br/><br/> <br/>
    <section class="section9">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <!-- Content Column -->
            <div class="section9-content">
              <h2 class="section9-tittle">The Charity</h2>
              <p>Welcome to WeConnect, the global hub for organizations dedicated to fostering positive change for humanity and our planet. At WeConnect, we believe in the power of collaboration and collective action to address pressing social, environmental, and humanitarian challenges. Our platform serves as a vibrant community where like-minded organizations come together in friendly ways to share resources, ideas, and expertise, amplifying their impact on a global scale. Whether you're an NGO, grassroots movement, or social enterprise, WeConnect provides the tools, connections, and support needed to drive meaningful change and create a brighter future for all. Join us as we unite for a better world. Together, we can make a difference. Welcome to the WeConnect family.</p>
              <div class="section9-social-icons">
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-whatsapp"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-2">
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
</html>

