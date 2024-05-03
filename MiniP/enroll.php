<!DOCTYPE html>
<html lang="en">
<head>
  <title>Charity</title>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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



.form-container {
  max-width: 500px; 
  margin: 0 auto;
  border: 1px solid #ced4da; 
  border-radius: 10px; 
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  padding: 20px;
}

.form-control {
  border: 1px solid #ced4da; 
  border-radius: .25rem; 
}

.form-control:focus {
  border-color: #569bef; 
  outline: 0; 
  box-shadow: 0 0 0 0.25rem rgba(86, 155, 239, 0.25);
}

.btn-primary {
  background-color: #569bef;
  border-color: #569bef; 
}

.btn-primary:hover {
  background-color: #ffffff; 
  color: #000000;
}

.btn-primary:focus {
  box-shadow: 0 0 0 0.25rem rgba(86, 155, 239, 0.5); /* Add box shadow on button focus */
}


.section6-tittle {
  font-size: 38px;
  font-weight: bold;
  margin-top: 69px;
  margin-left: 96px;
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
                      <a href="index.php" class="nav-link" id="home">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="about.php" id="Events">Events</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="cause.php">Directory</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="gallery.php">Resources</a>
                    </li>
                  </ul>
                </div>
                <a href="cause.php" style="text-decoration:none;">
                  <p class="text-white donate-now">Donate Now</p>
                </a>
            </nav>
          </div>
        </div>
      </div>   
    </section>     
  </div>        
  </div>      
    <br/><br/><br/><br/>
    <div class="form-container">
  <p class="section6-tittle">Enroll Your Community</p>
  <form id="enrollForm" action="submit_form.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email Address</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
    </div>
    <div class="mb-3">
      <label for="phone" class="form-label">Phone Number</label>
      <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter phone number" required>
    </div>
    <div class="mb-3">
      <label for="address" class="form-label">Mailing Address</label>
      <input type="text" class="form-control" id="address" name="address" placeholder="Enter mailing address" required>
    </div>
    <div class="mb-3">
      <label for="website" class="form-label">Website Link</label>
      <input type="url" class="form-control" id="website" name="website" placeholder="Enter website link">
    </div>
    <div class="mb-3">
      <label for="socialMedia" class="form-label">Social Media Links</label>
      <input type="text" class="form-control" id="socialMedia" name="socialMedia" placeholder="Enter social media links">
    </div>
    <div class="mb-3">
      <label for="focusAreas" class="form-label">Focus Areas</label>
      <input type="text" class="form-control" id="focusAreas" name="focusAreas" placeholder="Enter focus areas">
    </div>
    <div class="mb-3">
      <label for="geographicalScope" class="form-label">Geographical Scope</label>
      <input type="text" class="form-control" id="geographicalScope" name="geographicalScope" placeholder="Enter geographical scope">
    </div>
    <div class="mb-3">
      <label for="collaborationInterests" class="form-label">Collaboration Interests</label>
      <textarea class="form-control" id="collaborationInterests" name="collaborationInterests" rows="3" placeholder="Enter collaboration interests"></textarea>
    </div>
    <div class="mb-3">
      <label for="keyAchievements" class="form-label">Key Achievements</label>
      <textarea class="form-control" id="keyAchievements" name="keyAchievements" rows="3" placeholder="Enter key achievements"></textarea>
    </div>
    <div class="mb-3">
      <label for="partnerships" class="form-label">Partnerships</label>
      <textarea class="form-control" id="partnerships" name="partnerships" rows="3" placeholder="Enter partnerships"></textarea>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
    </div>
    <div class="mb-3">
      <label for="confirmPassword" class="form-label">Confirm Password</label>
      <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm password" required>
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Upload PDF (PDF only, max 5MB)</label>
      <input type="file" class="form-control" id="image" name="image" accept=".pdf" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<script>
  function validateForm() {
    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value.trim();
    const confirmPassword = document.getElementById('confirmPassword').value.trim();
    const email = document.getElementById('email').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const image = document.getElementById('image');

    if (!username || !password || !confirmPassword || !email || !phone || !image.files.length) {
      alert('Please fill out all required fields.');
      return false;
    }

    if (password !== confirmPassword) {
      alert('Passwords do not match. Please confirm your password.');
      return false;
    }

    // Validate file size and type
    const maxSize = 5 * 1024 * 1024; // 5 MB in bytes
    if (image.files[0].size > maxSize) {
      alert('File size exceeds 5MB limit.');
      return false;
    }

    // Only allow PDF files
    const allowedTypes = ['application/pdf'];
    if (!allowedTypes.includes(image.files[0].type)) {
      alert('Only PDF files are allowed.');
      return false;
    }

    // You can add more complex validation logic here, e.g., email format validation

    return true;
  }
</script>



      </div>
      

    <br/><br/> <br/>
    <section class="section9">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
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

