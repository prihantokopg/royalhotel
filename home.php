<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Royal Hotel </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link href="style1.css" rel="stylesheet">
  </head>
  <body>
   <!--NAVBAR-->
   <nav>
    <ul>
      <a href="home.php">
      <img class="logomain" src="logohotel-white.png" width="170">
      </a>
      <a href="home.php">Home</a>
      <a href="fasilitas.php">Facility</a>
      <a href="booking.php">Reservation</a>
    </ul>
   </nav>
   
  <script>
      window.onscroll = function() {stickyNavbar()};

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function stickyNavbar() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }
    </script>


    <!--IMAGE MAIN-->
        <div class="text-main">
        <div class="hero-image">

        <div class="hero-text">
          <h1>I am John Doe</h1>
          <p>And I'm a Photographer</p>
          <button>Hire me</button>
        </div>
      </div>

        <img src="hotel1.png" width="1519" height="750"></img> <br><br>
        <p class="title-deskripsi" style="font-weight:bold; text-align:center; font-size:30px;"><img src="logohotel-black.png" style="width:40px">Royal Hotel<img src="logohotel-black.png" style="width:40px"></p>
        <p class="deskripsi" style="font-size:18px">Experience a memorable stay at Royal Hotel, where luxury meets comfort. Start your day with a refreshing dip in our indoor swimming pool, <br>followed by a workout session at our fully-equipped fitness center. Satisfy your cravings with delectable dishes at our on-site restaurants,<br> offering a wide range of culinary delights to suit all tastes.<br>After a day of exploring the city, unwind in the comfort of your spacious and elegantly furnished room,<br> complete with modern amenities to ensure a comfortable stay.<br> With our dedicated team of friendly and attentive staff, you'll feel right at home at Royal Hotel.</p>
        </div>
    <br>
    <!--MAIN-ROOM-->
      <div id="main-room">
        <p class="main-classic" style="font-weight:bold; font-size:30px; text-align:center; padding-right:640px">Classic Room</p>
        <p class="des-clasic-room" style="font-size: 20px; padding-right:600px;">Spacious living room is perfect to have small family activities <br>and enjoying the city view, 55 sqm room. <br>Pamper yourself with rain shower and complete bathroom amenities.<br>Come, discover and spend a memorable stay with us.</p>
      </div>
      <div class="btn1">
        <a href="classic-room.php" class="btn btn-primary">Discover</a>
     </div>
      </div>
      <div class="img1">
        <img class="main-classic-pic"src="classic-room1.jpg" width="609" height="300"></img>
      </div>
    
    <!--MAIN-FACILITY-->
    <div class="main-facility">
        <p class="main-spa" style="font-weight:bold; font-size:30px; text-align:center; padding-left:730px">Spa</p>
        <p class="des-main-spa" style="font-size: 20px; text-align:center; padding-left:700px;">Spacious living room is perfect to have small family activities and <br>enjoying the city view, 55 sqm room. <br>Pamper yourself with rain shower and complete bathroom amenities.<br>Come, discover and spend a memorable stay with us.</p>
    </div>
    <div class="btn2">
        <a href="spa.php" class="btn btn-primary">Discover</a>
     </div>
     <div class="img2">
        <img class="main-facility-pic"src="spa.jpg" width="609" height="300" ></img>
     </div>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

   <!--REVIEW-->
   <h1 style="text-align:center" class="review">Review</h1>
   <div class="container text-center">
  <div class="row">
    <div class="col">
    <img src="logohotel-black.png" style="width:40px">
      <h2>Lorem ipsum</h2>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem odio distinctio laudantium, dolorem magni quae fugit optio eligendi tempora veniam ex eaque laborum nihil veritatis doloribus deleniti voluptatum at saepe?
    </div>
    <div class="col">
    <img src="logohotel-black.png" style="width:40px">
    <h2>Lorem ipsum</h2>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto eaque ipsum excepturi dolorem dolorum, facilis velit deserunt voluptatibus quidem tenetur obcaecati iure qui illum ratione dolores ex sint esse fugiat.
    </div>
    <div class="col">
    <img src="logohotel-black.png" style="width:40px">
    <h2>Lorem ipsum</h2>
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae ea officia suscipit. Nihil eveniet amet at consequuntur iure, ratione, excepturi id nisi magni perferendis asperiores nesciunt? Sunt, odio! Officia, laboriosam?
    </div>
  </div>
</div>

<!--GALLERY-->
<h1 style="text-align:center" class="gallery">Gallery</h1>
<div id="carouselExampleFade" class="carousel slide carousel-fade">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="meeting-room2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="gym2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="night-pool.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  <!--FOOTER-->
  <footer>
  <div class="container text-center">
  <div class="row-footer">
  <div class="row">
    <div class="col" >
      
    </div>
    <div class="col" style="text-align:center">
    3861 rue Saint-Antoine - St Hyacinthe, Quebec <br>
    Phone. +62 878 2345 7884 <br>
    ©️Copyright RoyalHotel
    </div>
    <div class="col">
      
    </div>
  </div>
</div>
</div>
  </footer>
      </body>  
</html>