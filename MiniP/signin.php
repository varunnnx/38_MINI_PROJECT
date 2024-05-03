<?php
session_start(); // Start the session

// Check if the user is not logged in, or session is expired, redirect to sign-in page
if (!isset($_SESSION['email'])) {
    // Redirect the user to the sign-in page
    header("Location: signin.php");
    exit;
}

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "charity_db";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize user inputs
    $input_email = trim($_POST['email']);
    $input_password = trim($_POST['password']);

    // Create a PDO instance to connect to the database
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare SQL statement to fetch user from the database
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $input_email);
        $stmt->execute();

        // Check if user exists and password matches
        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch();
            if (password_verify($input_password, $user['password'])) {
                // Password is correct, set session variable and redirect to collab.php
                $_SESSION['email'] = $user['email'];
                header("Location: collab.php");
                exit;
            } else {
                $error_message = "Invalid password!";
            }
        } else {
            $error_message = "Email not found!";
        }
    } catch (PDOException $e) {
        // Print detailed error message for debugging
        $error_message = "Database error: " . $e->getMessage();
    } finally {
        // Close database connection
        $conn = null;
    }
}
?>


<!-- Your HTML code for the sign-in form goes here -->




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
      margin-left: 200px; 
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
      margin-left: 150px;
    
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
                <a href="" style="text-decoration:none;">
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
  <p class="section6-tittle">SIGN-IN</p>
  <br/><br/>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
    </div>
    <button type="submit" name="login" class="btn btn-primary">Sign-in</button>
  </form>
</div>


</div>
<br/><br/><br/>
<section class="section9">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
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
