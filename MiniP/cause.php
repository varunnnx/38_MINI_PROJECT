<!DOCTYPE html>
<html lang="en">
<head>
    <title>Charity</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="cause.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div>
    <section class="section2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="collab.php" style="text-decoration: none;">
                        <img src="images/logo.png" class="logo">
                    </a>
                </div>
                <div class="col">
                    <nav class="navbar navbar-expand-sm">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a href="collab.php" class="nav-link" id="home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php" id="Events">Events</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="cause.php" id="Directory">Directory</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="resourcec.php">Resources</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="container mt-5">
    <h2 class="text-center mb-4">Community Directory</h2>
    <script>
    function toggleDetails(id) {
        const details = document.getElementById(`community-details-${id}`);
        if (details) {
            details.classList.toggle('d-none');
        } else {
            console.error(`Element with ID 'community-details-${id}' not found.`);
        }
    }
</script>

    <?php
 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "charity_db";
    


    $conn = new mysqli($servername, $username, $password, $dbname);
    

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
 
    $sql = "SELECT id, email, phone, address, website, focus_areas, geographical_scope, collaboration_interests, key_achievements, partnerships, created_at FROM users";
    $result = $conn->query($sql);
    

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
          echo '<div class="card mb-3">';
          echo '<div class="card-body">';
          echo '<p><strong>Email:</strong> ' . $row['email'] . '</p>';
          echo '<p><strong>Phone:</strong> ' . $row['phone'] . '</p>';
          echo '<p><strong>Address:</strong> ' . $row['address'] . '</p>';
          echo '<a href="#" class="btn btn-primary" onclick="toggleDetails(' . $row['id'] . ')">Read More</a>
          <a href="" class="btn btn-primary">Collab</a>';
          echo '</div>';
          echo '<div class="card-footer text-muted d-none" id="community-details-' . $row['id'] . '">';
          echo '<p><strong>Website:</strong> <a href="' . $row['website'] . '">' . $row['website'] . '</a></p>';
          echo '<p><strong>Focus Areas:</strong> ' . $row['focus_areas'] . '</p>';
          echo '<p><strong>Geographical Scope:</strong> ' . $row['geographical_scope'] . '</p>';
          echo '<p><strong>Collaboration Interests:</strong> ' . $row['collaboration_interests'] . '</p>';
          echo '<p><strong>Key Achievements:</strong> ' . $row['key_achievements'] . '</p>';
          echo '<p><strong>Partnerships:</strong> ' . $row['partnerships'] . '</p>';
          echo '<p><strong>Created At:</strong> ' . $row['created_at'] . '</p>';
          echo '<a href="#" onclick="toggleDetails(' . $row['id'] . ')">Hide Details</a>';

          echo '</div>';
          echo '</div>';
      }
  } else {
      echo "No communities found.";
  }
    
    // Close connection
    $conn->close();
    ?>
    

</div>

<section class="section9">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="section9-content">
                    <h2 class="section9-tittle">The Charity</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis
                        aliquam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum
                        mauris quis aliquam. Lorem ipsum dolo</p>
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

<p class="bg-dark"
