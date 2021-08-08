
<!DOCTYPE html>
<html lang="en">
<title>BladeRunner</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="cssf1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
/* latin-ext */
</style>
<body>

<!-- Navbar -->
<div class="crs-top">
  <div class="crs-bar crs-black crs-card">
    <a href="#" class="crs-bar-item crs-button crs-padding-large">HOME</a>
    <a href="memory.php" class="crs-bar-item crs-button crs-padding-large crs-right">CPU Memory Data</a>
    <a href="system.php" class="crs-bar-item crs-button crs-padding-large crs-right">CPU System Informations</a>
    <a href="process.php" class="crs-bar-item crs-button crs-padding-large crs-right">CPU Processes Information</a>
    <a href="#contact" class="crs-bar-item crs-button crs-padding-large">REPORT</a>
  </div>
</div>

<!-- Page content -->
<div class="crs-content" style="max-width:1800px;max-height:1080px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides crs-display-container crs-center">
    <img src="ceva.jpg" style="width:100%">
    <div class="crs-display-bottommiddle crs-container crs-text-white crs-padding-32 crs-hide-small">
      <h3>The future is now.</h3>   
    </div>
  </div>
  <div class="mySlides crs-display-container crs-center">
    <img src="bg3.jpg" style="width:100%">
    <div class="crs-display-bottommiddle crs-container crs-text-white crs-padding-32 crs-hide-small">
    </div>
  </div>
  <div class="mySlides crs-display-container crs-center">
    <img src="poza.jpg" style="width:100%">
    <div class="crs-display-bottommiddle crs-container crs-text-white crs-padding-32 crs-hide-small">
      <h3>Aim for the moon, shoot for the stars.</h3>   
    </div>
  </div>

  <!-- The Info Section -->
  <div class="crs-container crs-content crs-center crs-padding-64" style="max-width:800px" id="band">
    <h1 class="crs-wide">BladeRunner.2021</h1>
  </div>
 
  <!-- The Contact Section -->
  <div class="crs-black" id="contact">
    <h2 class="crs-wide crs-center">REPORT</h2>
    <p class="crs-opacity crs-center"><i>Something going wrong? Report it here.</i></p>
    <div class="crs-row crs-padding-32">
      <div class="crs-col m6 crs-large crs-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Cluj-Napoca, RO<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +40 773 865 812<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: cristirusu1709@bladerunner.yahoo.com<br>
      </div>
      <div class="crs-col m6 crs-center">
        <form action="home.php" method="POST" autocomplete="">
          <div class="crs-row-padding" style="margin:0 -16px 8px -16px">
            <div class="crs-half">
              <input class="crs-input crs-border" type="text" name="name" placeholder="Name">
            </div>
            <div class="crs-half">
              <input class="crs-input crs-border" type="email" name="mail" placeholder="Email">
            </div>
          </div>
          <input class="crs-input crs-border" type="text" name="message" placeholder="Message" required name="Message">
          <button class="crs-button crs-white crs-section crs-center" type="submit" name="contact" value="Contact">SEND</button>
        </form>
      </div>
    </div>
  </div>
  
<!-- End Page Content -->
</div>


<script>
// automatic slideshow - change image every 4 seconds
var myIndex = 0;
schimbare_poze();

function schimbare_poze() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(schimbare_poze, 4000);    
}

</script>
</body>
</html>