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
          <div class="sidebar offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
    <div class="space"></div>
      <div class="timeline">
        <div id="img1"><img src="butterfly.webp" alt="" srcset=""></div>
        <div class="container left">
            <div class="content f">
            <div class="info">
              <div class="img"><img src="tcsc.jpg" alt="" srcset=""></div>
              <div class="txt"><h5>Thakur College Of Scienec and Commerce, Kandivali</h5>
              <h6>Bachelor of Science - Computer Science</h6><h6>July 2022 - </h6></div>
              </div><br>
                <h6><b>Grade : </b></h6>
                <p>I am currently pursuing a Bachelor's degree in Computer Science at Thakur College. I have completed 4 semesters and have a SGPA of 9.90.</p>
            </div>
        </div>
        <div class="container right">
          <div class="content s">
            <div class="info">
              <div class="img"><img src="hsc.jpeg"  alt="" srcset=""></div>
              <div class="txt"><h5>Shri T.P. Bhatia College of Science, Kandivali</h5>
              <h6>HSC (XII)</h6><h6>June 2021 - March 2022</h6></div>
              </div><br>
                <h6><b>Grade : 83.17 %</b></h6>
                <p>I completed my class 12<sup>th</sup> at Shri T.P. Bhatia College of Science, where I studied Science with Information Technology.</p>
            </div>
        </div>
        <div class="container left">
          <div class="content t">
            <div class="info">
              <div class="img"><img src="school.jpeg" alt="" srcset=""></div>
              <div class="txt"><h5>Mother Teressa High School, Malad</h5>
              <h6>SSC (X)</h6><h6>june 2019 - March 2020</h6></div>
              </div><br>
                <h6><b>Grade : 92.20 %</b></h6>
                <p>I completed my class 10<sup>th</sup> at Mother Teressa High School.</p>
            </div>
          </div>
        </div><br><br><br><br>
        <div id="img2"><img src="butterfly.webp" alt="" srcset=""></div>
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
  </script>
</body>
</html>