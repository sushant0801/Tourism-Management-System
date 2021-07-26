<html>

<head>
    <link rel="stylesheet" href="newcss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Tourism Management System</title>
</head>

<body>

    <!--navigation bar-->

    <div id="abc">
    
        <nav>
            <ul>
            <div class="dropdown">
                <button class="dropbtn">PACKAGES</button>
                  <div class="dropdown-content">
                    <div class="row">
                      <div class="column">
                        Indian Tours
                        <a href="jaipur.html">Jaipur</a>
                        <a href="tajmahal.html">Delhi</a>
                        <a href="#">Pune</a>
                      </div>
                      <div class="column">
                        Foreign Tours
                        <a href="japan.html">Japan</a>
                        <a href="rome.html">Rome</a>
                        <a href="#">Italy</a>
                      </div>
                      <div class="column">
                        Special Tours
                        <a href="#">Meghalya</a>
                        <a href="#">Kedranath</a>
                        <a href="#">Kerala</a>
                      </div>
                     
                    </div>
                 
                     
                </div>
              </div>

                <li><a href="homepage.php">HOME</a></li>
                <li><a href="aboutus.html">ABOUT US</a></li>
                
                
                <li><a href="enquiry.html">ENQUIRY</a></li>
                <li><a href="signup.php">LOGIN</a></li>
                <li><a href="loginadmin.html">ADMIN</a></li>
            </ul>
        </nav>

        
    <br>
    <br>
    <!--slideshow-->
    <div class="slideshow-container">
        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="images/finalbeach.jpg" style="width:100%;height:80%;">
            <div class="text"><h1 style="font-size: 50px!important;padding-left: 20px ;padding-right:20px;float: right;">EXPLORE YOUR DREAM</h1> 
              <br><br><br><br><h1  style=" float:right ;color:black ">D&emsp;E&emsp;S&emsp;T&emsp;I&emsp;N&emsp;A&emsp;T&emsp;I&emsp;O&emsp;N&emsp;&emsp;</h1></div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="images/assam.jpg" style="width:100%;height:80%;">
            <div class="text"  style="text-align: right;padding-right:80px;margin-bottom:20px;"><h1 style="font-size:60px;">Mesmerizing</h1>
            <h1 style="font-family: cursive;padding-right: 80px;font-style:italic;">Landscapes</h1>

            </div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="images/maldives.jpg" style="width:100%;height:80%;">
            <div class="text" ><h1 style="float: center;font-size: 40px!important;">CUSTOMISE HOLIDAY</h1><center><hr style="height:5px; width:475px;color:white"></center> <h1 style="font-size: 25px!important;margin-bottom:50px!important;color:rgb(16, 58, 25);font-family:cursive;bottom: 80px!important;">AS YOU LIKE IT!</h1></div>
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
      <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
      </div>
    </div>
  </div>
<BR>
  <BR>
  <!--cards-->
  <div class="row">
    <div class="grid">
      <div class="grid-items">
        <div class="card">
          <a href="jaipur.html">
          <img class="card-img" src="images/hawa.png" alt="statue">
          </a>
          <div class="card-content">
            <h1 class="card-header">Rajasthan</h1>
            <p class="card-text">The renowned 'Palace Of The Winds', or Hawa Mahal, is one of the prominent tourist attractions in Jaipur city. Located in the heart of Jaipur </p>
            
          </div>
        </div>
      </div>

       <!--second card-->
      
      <div class="grid-items">
        
        <div class="card">
          <a href="tajmahal.html">
          <img class="card-img" src="images/TM1.jpg" alt="statue">
        </a>
          <div class="card-content">
            <h1 class="card-header">DELHI</h1>
            <p class="card-text ">The Taj is the beauty personified! The Taj displays its different moods through its varied shades.The Taj Mahal incorporates  on design traditions </p>
            
          </div>
        </div>
      </div>
    
      
      <!--third card-->
      <div class="grid-items">
        <div class="card">
          <a href="rome.html">
          <img class="card-img" src="images/ROME.jpg" alt="statue">
          </a>
          <div class="card-content">
            <h1 class="card-header">ROME</h1>
            <p class="card-text ">The Colosseum, also known as the Flavian Amphitheatre,a large artefact,structure in city of Rome.Oval amphitheatre in the centre of the city </p>
            
          </div>
        </div>
      </div>

      <!--fourth card-->
      <div class="grid-items">
        <div class="card">
          <a href="japan.html">
          <img class="card-img" src="images/mt.jpeg" alt="statue">
          </a>
          <div class="card-content">
            <h1 class="card-header">JAPAN</h1>
            <p class="card-text ">Mount Fuji is one of the iconic symbols of Japan and also an active volcano Mount Fuji is in Japan and it is an active volcano about 100 kilometers of Tokyo..</p>
            
          </div>
        </div>
      </div>
    </div>
     
      
    
  </div>
  <br>
  <br>
  
  </div>
</div>
<div class="footer">
  <center><p>Copyright © Lifestyle Store. All Rights
          Reserved|Contact Us: +91 90000 00000</p></center>
</div>
</body>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    }
  
  </script>
   <div class="foot" style="color:white;background-color:#0005;text-align: center;height:8%;font-size:18px;padding-top: 10px;">
    Copyright © World Tours. All Rights
           Reserved|Contact Us: +91 90000 00000
   </div> 
  
</html>