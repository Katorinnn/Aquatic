<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aquatic Resort</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <style>
            *{
                font-family: 'Poppins', sans-serif;
            }
            :root {
            --text: #fbfdff;
            --primary-color-dark: #5681a7;
            --secondary-color: #e8f1fa;
            --text-dark: #282d31;
            --text-light: #767268;
            --extra-light: #f3f4f6;
            --max-width: 1200px;
            }
            body{
                background-color: #F3F7EC;
            }
            nav{
                height: 100px;
                font-size: 20px;
                opacity: 0.9;
            }
            .h-font{
                font-family: 'Merienda', Cursive;
                font-size: 30px;
            }
            img{
                width: 100%;
                height: 700px;
            }
            p{
                margin-top: -250px;
                z-index: 5;
                position: relative;
                font-size: 20px;
                color: white;
                text-align: center;
                font-family: cursive;
            }
            .btn2{
                border: none;
                margin-top: 50px;
                font-size: 20px;
            }
            
    </style>

<body class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold f3-3 h-font" href="<?=('userbooking')?>">Aquatic Resort</a>
        <button class="navbar-toggler shadow-none" t`ype="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="div align-items-center" >
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active me-3" aria-current="page" href="<?=('userbooking')?>">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link me-3" href="#dadad">Rooms</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link me-3" href="#dadad">Cottages</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link me-3" href="#contacts">Contacts</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link me-3" href="#dadad">Services</a>
                    </li>
                </ul>
        </div>
    </div>
</div>
    </nav>
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="seeee.jpg" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="sea.webp" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="lower-beach-family-room.jpg" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="AquaticResort.png" class="w-100 d-block">
                </div>
             </div>
                <div class="swiper-pagination"></div>
            </div>
    </div>
    </div>
    <div class="bd">
        <p>
            "Escape to The Aquatic Resort, where the tranquil embrace of nature meets the indulgent comforts of luxury, offering a sanctuary for those seeking 
            serenity and adventure in perfect harmony."
        <a href="<?=('userbooking')?>"><button type="proceed" class="btn2">Book Now!</button></a>
        </p>
    </div>

  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop:true,
      autoplay: {
        delay: 3500,
        disableOnInteraction:false,
      }
    });
  </script>
</body>
</html>
    