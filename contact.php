<?php
session_start();

$msg = "";
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $conn = mysqli_connect('localhost', 'root', '', 'test');
  $sql="INSERT INTO contact(name,email,message) values ('$name', '$email', '$message')";
  if (mysqli_query($conn,$sql)){
    $_SESSION['msg'] = "Submitted successfully !";
  }
  else{
    $_SESSION['msg'] = "Failed to submit !";
  }
  header("Location: ".$_SERVER['PHP_SELF']); // Redirect to prevent form resubmission on page refresh
  exit();
}

if(isset($_SESSION['msg'])) {
  $msg = $_SESSION['msg'];
  unset($_SESSION['msg']); // Clear the session variable
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="index.css">
    <!--Font family-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:wght@300;700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <title>My Portfolio</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="butterfly.webp">Suvedha Pillai<img src="butterfly.webp"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class=" sidebar offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header text-white border-bottom">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Suvedha</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="skills.php">Skills</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="project.php">Projects</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="education.php">Education</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                  </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
<div class="container">
    <div class="cnt">
        <center>
    <h1>Contact Me</h1>
    <h4>Feel free to reach out to me for any questions or opportunities !!!</h4>
    <div class="row">
        <div class="col">
            <br><br>
            <a target="_blank" href="https://www.linkedin.com/in/santhana-suvedha-pillai-3a3564268/"><img height=50 width=50 src="linkedin.png"></a>&emsp;
                    <a target="_blank" href="https://github.com/suvedha7"><img height=50 width=50 src="github.png"></a>&emsp;
                    <a target="_blank" href="https://www.instagram.com/suvedha_7/"><img height=50 width=50 src="insta.png"></a>&emsp;
                    <a target="_blank" href="https://twitter.com/SuvedhaPillai"><img height=50 width=50 src="twitter.png"></a>&emsp;
              <form action="#" method="POST">
              <?php if($msg): ?>
            <div id="msgs"><?php echo $msg; ?></div>
              <?php endif; ?>
              <br>
                <input type="text" name="name" placeholder="Your name ....." id="name" required autocomplete>
                <input type="email" name="email" placeholder="Your email ....." id="email" required>
                <textarea name="message" rows="5" placeholder="Message ....." id="message" required></textarea>
                <button name="submit" type="submit">Send</button>
            </form>
            
        </div>
    </div>
        </center>
        </div>
</div>

<footer>
    <center>
        <hr size="5" color="#fff">
            <div class="row justify-content-between">
                <div class="col f">
                    <a target="_blank" href="https://www.linkedin.com/in/santhana-suvedha-pillai-3a3564268/"><img height=50 width=50 src="linkedin.png"></a>
                    <a target="_blank" href="https://github.com/suvedha7"><img height=50 width=50 src="github.png"></a>
                    <a target="_blank" href="https://www.instagram.com/suvedha_7/"><img height=50 width=50 src="insta.png"></a>
                    <a target="_blank" href="https://twitter.com/SuvedhaPillai"><img height=50 width=50 src="twitter.png"></a>
                </div>
                <div class="col s">
                    <h2>Quick Link</h2>
                    <a href="index.php">About</a>
                    <a href="skills.php">Skills</a>
                    <a href="project.php">Projects</a>
                    <a href="education.php">Education</a>
                    <a href="contact.php">Contact</a>
                </div>
            </div>
            <div class="row">
                <div class="col">@ Made by Suvedha &#128154; </div>
            </div>
    </center>
</footer>
    
<script>
       
    window.addEventListener('scroll', function() {
    var navbar = document.querySelector('.navbar');
    if (window.scrollY > 0) {
        navbar.classList.add('scroll');
    } else {
        navbar.classList.remove('scroll');
    }
    });
    setTimeout(function(){
    document.getElementById('msgs').style.display = 'none';
}, 2000);
</script>
</body>
</html>