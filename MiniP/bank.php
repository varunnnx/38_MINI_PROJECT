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
  margin-top: 0px;
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
  margin-right: 20px; 
  margin-top: 20px;
}

.form-container {
    background-color: white;
    border-radius: 15px;
    padding: 20px;
    width: 500px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align:center;
}


.form-container label,
.form-container input {
    display: block;
    margin-bottom: 10px;
    color: black;
    text-align: center; 
}

.form-container input[type="text"],
.form-container input[type="tel"],
.form-container input[type="number"],
.form-container input[type="password"],
.form-container select {
    width: 100%;
    padding: 10px 50px;
    border: 1px solid #569bef;
    border-radius: 5px;
    color: black;
}

.form-container input[type="date"] {
    width: calc(100% - 22px);
}

.form-container input[type="submit"] {
    background-color: #007BFF;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s, color 0.3s;
}

.form-container input[type="submit"]:hover {
    background-color: #0056b3;
}

.form-control:focus {
    border-color: #569bef;
    outline: 0;
    box-shadow: 0 0 0 0.25rem rgba(86, 155, 239, 0.25);
}

.form-group {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
}

.form-group label {
    margin-right: 10px;
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
    box-shadow: 0 0 0 0.25rem rgba(86, 155, 239, 0.5);
}

.section6-tittle {
  font-size: 38px;
  font-weight: bold;
  margin-top: 69px;
  margin-left: 96px;
}

.section6-tittle2 {
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
          
                
                
            </nav>
          </div>
        </div>
      </div>   
    </section>     
  </div>        
  </div>      
    <br/><br/><br/><br/>
    <div class="form-container" method="post" onsubmit="return validateForm()">
        <p class="form-group"><b>Payment gateway</b></p>
        <br/><br/>
        <form>
        <div class="form-group">
        <label for="cardName">Name on Card: </label>
        <input type="text" id="cardName" name="cardName" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="phone" class="form-label">Phone Number: </label>
            <input type="tel" class="form-control" id="phone">
        </div>
        <div class="form-group">
            <label for="cardNumber">Card Number: </label>
            <input type="text" id="cardNumber" name="cardNumber" class="form-control" required>
        </div>
        <div class="form-group">
                    <label for="expirationDate">Expiration Date</label>
                    <input type="date" id="expirationDate" name="expirationDate" class="form-control" required>
                </div>
        <div class="form-group">
            <label for="cvv">CVV: </label>
            <input type="password" id="cvv" name="cvv" class="form-control" required>
        </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      

    <br/><br/> <br/>
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
<script>
function validateForm() {
    const cardName = document.getElementById('cardName').value;
    const cardNumber = document.getElementById('cardNumber').value;
    const expirationDateStr = document.getElementById('expirationDate').value;
    const cvv = document.getElementById('cvv').value;
    const currentDate = new Date();
    const expirationDate = new Date(expirationDateStr);

    if (!/^\d{16}$/.test(cardNumber)) {
        alert("Please enter a valid 16-digit card number.");
        return false;
    }
    
    const phone = document.getElementById('phone').value;
    if (phone.length !== 10) {
        alert("Please enter a valid 10-digit phone number");
        return false;
    }
    if (cvv.length !== 3) {
        alert("Please enter a valid 10-digit phone number");
        return false;
    }
    if (!/^\d{3}$/.test(cvv)) {
        alert("Please enter a valid 3-digit CVV.");
        return false;
    }

    if (cardName === "" || cardNumber === "" || expirationDateStr === "" || cvv === "") {
        alert("Please fill in all fields.");
        return false;
    }

    if (expirationDate <= currentDate) {
        alert("Please enter a valid expiration date.");
        return false;
    }

    return true;
}


    </script>
