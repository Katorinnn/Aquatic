<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="user.css" />
    <title>Welcome! | Da Aqua</title>

  </head>
  <body>
   <nav>
    <div class="navbar">
      <div class="logo"><a href="#">AQUATIC RESORT</a></div>
      <ul class="links">
          <li><a href="#home">Home</a></li>
          <li><a href="#Booking">Booking</a></li>
          <li><a href="#Services">Services</a></li>
          <li><a href="#Contact">Contact</a></li>
      </ul>
      <a href="booknow"class="btn">Book Now!</a>
    </div>
   </nav>
    <header>
      <div class="section__container">
        <div class="header__content">
          <img src="logo.png">
          <p>
            "Escape to The Aquatic Resort, where the tranquil embrace of nature meets the indulgent comforts of luxury, offering a sanctuary for those seeking 
            serenity and adventure in perfect harmony."<br><br><br> 
          </p>
          <br>
           <a href="<?=('loginform')?>"><button>BOOK NOW!</button></a>
        </div>
      </div>
    </header>

    <section id="journeycontainer">
      <div class="section__container">
        <h2 class="section__title">Start Your Journey</h2>
        <p class="section__subtitle">The most searched countries in March</p>
        <div class="journey__grid">
          <div class="country__card">
            <img src="journey1.jpg" alt="country" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <span>Silang, Cavite</span>
            </div>
          </div>
          <div class="country__card">
            <img src="journey2.jpg" alt="country" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <span>Imus, Cavite</span>
            </div>
          </div>
          <div class="country__card">
            <img src="journey3.jpg" alt="country" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <span>Trece, Cavite</span>
            </div>
          </div>
          <div class="country__card">
            <img src="journey4.jpg" alt="country" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <span>Bacoor, Cavite</span>
            </div>
          </div>
          <div class="country__card">
            <img src="journey5.jpg" alt="country" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <span>Dasmarinas, Cavite</span>
            </div>
          </div>
          <div class="country__card">
            <img src="journey6.jpg" alt="country" />
            <div class="country__name">
              <i class="ri-map-pin-2-fill"></i>
              <span>Indang, Cavite</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="bannercontainer">
      <div class="section__container">
        <div class="banner__content">
          
          <h2>Discount 10-30% Off</h2>
          <p>
            Travel the world on a budget with our unbeatable discounted travel
            deals. Whether you're looking for a last-minute escape or planning
            ahead, we've got you covered with incredible discounts on flights,
            hotels, and packages. Don't wait, book now and experience the
            adventure of a lifetime without breaking the bank.
          </p>
          <button>See Tours</button>
          
        </div>
      </div>
    </section>

    <section id="displaycontainer">
      <div class="section__container">
        <h2 class="section__title">Why Choose Us</h2>
        <p class="section__subtitle">
          The gladdest moment in human life, is a departure into unknown lands.
        </p>
        <div class="display__grid">
          <div class="display__card grid-1">
            <img src="grid-1.jpg" alt="grid" />
          </div>
          <div class="display__card">
            <i class="ri-earth-line"></i>
            <h4>Passionate Travel</h4>
            <p>Fuel your passion for adventure and discover new horizons</p>
          </div>
          <div class="display__card">
            <img src="grid-2.jpg" alt="grid" />
          </div>
          <div class="display__card">
            <img src="grid-3.jpg" alt="grid" />
          </div>
          <div class="display__card">
            <i class="ri-road-map-line"></i>
            <h4>Beautiful Places</h4>
            <p>Uncover the world's most breathtakingly beautiful places</p>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="section__container">
        <h4><a href="index.html">The Aquatic</a></h4>
        <div class="social__icons">
          <span><i class="ri-facebook-fill"></i></span>
          <span><i class="ri-twitter-fill"></i></span>
          <span><i class="ri-instagram-line"></i></span>
          <span><i class="ri-linkedin-fill"></i></span>
        </div>
        <p>
          The Aquatic  makes one modest. You see what a tiny place you occupy in the
          world.
        </p>
      </div>
    </footer>
  </body>
</html>