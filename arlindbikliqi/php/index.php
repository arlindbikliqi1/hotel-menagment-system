<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hotel Plaza</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" type="text/css" href="../css/index.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script src="../js/index.js"></script>
  <script>


  $( function() {
    $( "input" ).checkboxradio();
    $( "fieldset" ).controlgroup();
  } );

  </script>

</head>


<body>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation">
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <a class="navbar-brand mt-2 mt-lg-0" href="../html/index.html">
          <img src="../img/logo.png"
            height="55px"
            width="80px"/>Hotel Plaza</a>
      </div>
      <div class="d-flex align-items-center">
        <a class="text-reset me-3" href="#">
        </a>
        <div class="dropdown">
          <a id="signout" href="../php/signout.php">
            <img src="../img/out.png"
              class="rounded-circle"
              height="30px"
              width="40px"
              alt="Sign Up"
              loading="lazy"/>Sign Out</a>
        </div>
      </div>
    </div>
  </nav>


  <div id="carouselExample" class="carousel slide m-5">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../img/1.jpg" class="d-block" width="100%" height="500px">
      </div>
      <div class="carousel-item">
        <img src="../img/pool.webp" class="d-block " width="100%" height="500px">
      </div>
      <div class="carousel-item">
        <img src="../img/food.webp" class="d-block" width="100%" height="500px">
      </div>
      <div class="carousel-item">
        <img src="../img/garden.jpg" class="d-block" width="100%" height="500px">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


 
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Standard Room</a></li>
    <li><a href="#tabs-2">Superior Room</a></li>
    <li><a href="#tabs-3">Suite</a></li>
    <li><a href="#tabs-4">Presidencial Suite</a></li>
  </ul>
  <div id="tabs-1">
    <div class="img">
    <img src="../img/standard.jpg" alt="" width="50%" height="400px">
    <img src="../img/standardtoilet.jpg" alt=""width="50%" height="400px">
</div>
    <h1>Standard Room</h1>
    <h1>35$ one night</h1>
    <p>The Standard Room comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony. Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.
        A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.</p>
  </div>
  <div id="tabs-2">
    <div class="img">
        <img src="../img/superior.jpg" alt="" width="50%" height="400px">
        <img src="../img/superiortoilet.jpg" alt=""width="50%" height="400px">
    </div>
    <h1>Superior Room</h1>
    <h1>50$ one night</h1>
    <p>The hotel's Superior Rooms are suitable for a maximum of 2 people, and all feature king-sized beds or pairs of single beds, complemented by chic en-suite bathrooms with tubs. All of them enjoy natural light through floor-to-ceiling windows, and offer a cosy 22 m² of space. Many have views to the east where the sun rises over the mainland. Others offer side views of the Straits of Malacca, the waterfront or Georgetown’s museums .</p>
  </div>
  <div id="tabs-3">
    <div class="img">
        <img src="../img/suite.png" alt="" width="50%" height="400px">
        <img src="../img/suitetoilet.webp" alt=""width="50%" height="400px">
    </div>
        <h1>Suite Room</h1>
        <h1>70$ one night</h1>
        <p>For the discerning guest who enjoys the fullness of time relaxing in the privacy of their room, our Suites offer a spacious living room with lounge and dining table to make you feel right at home. Beautifully appointed rooms where guests receive those little extra attentions, including Welcome Drinks on arrival, complimentary access to the Executive Lounge and free house wines and cocktails served between 6pm and 8pm daily.

            Suite Room Special Benefits:
            
            • Daily breakfast buffet
            • Large fruit basket
            • Complimentary access to Executive Club Lounge for registered guests
            • Complimentary house wines and cocktails between 6pm and 8pm</p>
        </div>
        <div id="tabs-4">
            <div class="img">
            <img src="../img/presidencial.avif" alt="" width="50%" height="400px">
            <img src="../img/presidencialtoilet.jpg" alt=""width="50%" height="400px">
        </div>
            <h1>Presidencial Suite Room</h1>
            <h1>100$ one night</h1>
            <p>Indulge in the ultimate luxury of the Presidential Suite, located on the hotel’s topmost floor. Spacious, stylish spaces provide the perfect environment to entertain guests in luxury and total privacy. The unbeatable panoramic views of the city, luxuriously appointed bathrooms, private sauna, fully equipped kitchen and dining room, and 50” LED satellite TV, make this suite truly impressive and the ideal choice for a sumptuous stay in Bangkok. Exclusive in-room check-in and check-out are provided.</p>
          </div>        
</div>
</div>

<form action="../php/reservation.php" method="POST">
    <h1>Reservation Form</h1>
    <div class="form">
<input type="date" name="date" id="datepicker" placeholder="Date">
<input type="text" name="name" placeholder="Name">
<input type="text" name="surname" placeholder="Surname">
<input type="number" name="age" placeholder="Age">
<input type="number" name="person" placeholder="Person">
<div class="text-container">
  <label for="cars">Choose your Room</label>
  <select id="cars" name="room">
    <option value="Standard Room">Standard Room</option>
    <option value="Superior Room">Superior Room</option>
    <option value="Suite Room">Suite Room</option>
    <option value="Presidencial suite Room">Presidencial suite Room</option>
  </select>
  </div> 
    </div>
    <div class="reservation">
    <button  type="submit" name="reservation" value="reservation">Reservation</button>
    </div>
</form>






<div id="footer" class="footer d-flex justify-content-between bg-dark text-light">
    <div class=" p-3 text-light "><h3>Contact Us</h3></div>
    <div class="p-3"><img src="../img/plaza.png" width="120px" height="65px"></div>
    <div class="p-3">
     <a href="https://www.facebook.com/"><img id="facebook" src="../img/facebook.png" width="80px" height="50px"></a>
     <a href="https://www.instagram.com/"><img id="instagram" src="../img/instagram.png" width="80px" height="50px"></a>
    </div>
  </div>


 
 
</body>
</html>