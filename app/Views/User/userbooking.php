<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aquatic Resort</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="m.css">
    
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
                height: 500px;
            }
            input::-webkit-outer-spin-button,
            input::-webkit-outer-spin-button{
                -webkit-appearance: none ;
                margin: 0;
            }
            .availability-form{
                margin-top: -50px;
                z-index: 2;
                position: relative;
            }
            @media screen and (max-width:575px){
                .availability-form{
                    margin-top: 25px;
                    padding: 0 35px;
                }
            }
            .foot{
                background-color: var(--text-dark);
                height: 300px;

            }
            footer {
            background-color: var(--text-dark);
            color: var(--secondary-color);
            }

            footer .foot {
            display: grid;
            gap: 1.5rem;
            text-align: center;
            }

            footer h4 {
            margin-top: 40px;
            font-size: 1.5rem;
            font-weight: 500;
            }

            .icons {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            }

           .icons i {
            padding: 5px;
            font-size: 1.2rem;
            cursor: pointer;
            }

            footer p {
            font-style: italic;
            }
            body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            /* background-color: ; */
            }
            .booking-form {
                padding: 20px;
                background-color: #fff;
                border-radius: 5px;
                box-shadow: 0 2px 4px rgba(0,0,0,0.1);
                max-width: 1200px;
                margin: 20px auto;
                margin-top: -50px;
                z-index: 2;
                position: relative;
                height: 200px;
            }
            .inputs-filed {
                position: relative;
            }
            .inputs-filed label {
                display: block;
                margin-bottom: 5px;
                font-weight: bold;
            }
            .inputs-filed input {
                width: 100%;
                padding: 10px;
                font-size: 16px;
                border: 1px solid #ccc;
                border-radius: 5px;
                padding-left: 35px;
            }
            .icon {
                margin-top: 12px;
                position: absolute;
                top: 50%;
                left: 10px;
                transform: translateY(-50%);
                color: #999;
            }
            .icon i {
                font-size: 16px;
            }
            .btn1 {
                width: 100%;
                padding: 15px;
                background-color: #d69e00;
                color: #fff;
                font-size: 16px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }
            .btn1:hover {
                background-color: #b07f00;
            }
        
        

        </style>

</head>
<body class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold f3-3 h-font" href="<?=('userbooking')?>">Aquatic Resort</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse bg-white" id="navbarSupportedContent">
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
            <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
            <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#registerModal">Register</button>
        </div>
    </div>
</div>
    </nav>
    <div class="modal fade" id="loginModal" data-bs-backdrop="static" databas-keyboard ="false"tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form></form>
                <div class="modal-header">
                    <h1 class="modal-title d-flex align-items-center fs-5" >
                        <i class="bi bi-person-circle fs-3 me-2"></i>User Login</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="InputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control shadow-none">
                            </div>
                            <div class="mb-4">
                                <label for="InputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control shadow-none" id="InputPassword1">
                            </div>
                            <div class="d-flex align-items justify-content-between">
                            <button type="submit" class="btn btn-dark shadow-none">Login</button>
                            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    </div>

    <div class="modal fade" id="registerModal" data-bs-backdrop="static" databas-keyboard ="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form></form>
                <div class="modal-header">
                    <h1 class="modal-title d-flex align-items-center fs-5" >
                    <i class="bi bi-person-lines-fill fs-3 me-2"></i>User Registration</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="InputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control shadow-none">
                            </div>
                            <div class="mb-4">
                                <label for="InputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control shadow-none" id="InputPassword1">
                            </div>
                            <div class="d-flex align-items justify-content-between">
                            <button type="submit" class="btn btn-dark shadow-none">Login</button>
                            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    </div>

    <!-- carousel -->

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

    <!-- check in -->

    <!-- <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500;">Check in </label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight:500;">Check out </label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                        <label class="form-label" style="font-weight:500;">Adult </label>
                        <select class="form-select shadow-none">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-lg-2 mb-3">
                        <label class="form-label" style="font-weight:500;">Children </label>
                        <select class="form-select shadow-none">
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-lg-1 mb-lg-3 mt-2">
                        <button type="submit" class="btn text- white shadows-none custom-bg">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div> -->

    <!-- Rooms -->
    <section class="booking-form">
	<div class="container">
		<div class="booking-form-inner">
			<!-- <form action="ht "> -->
				<div class="row align-items-end" style="margin-top: 40px">
					<div class="col-lg-3 col-md-6">
						<div class="inputs-filed mt-30">
							<label>Check in</label>
							<div class="icon"><i class="bi bi-calendar2-week"></i></i></div>
							<input type="text" placeholder="MMM DD, YYYY" name="check_in_date" readonly>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="inputs-filed mt-30">
							<label>Check out</label>
							<div class="icon"><i class="bi bi-calendar2-week"></i></div>
							<input type="text" placeholder="MMM DD, YYYY" name="check_out_date" readonly>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="inputs-filed mt-30">
							<label>Promo Code</label>
							<input type="text" placeholder="Code Here" name="special_code" autocomplete="off">
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="inputs-filed mt-30">
							<input type="hidden" value="1" name="p">
							<button type="submit" class="btn1">Check Availability</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>


<br><br><br>
<br><br><br>

   <div class="gallery">
    <div class="gallery-container">
        <img class="gallery-item gallery-item-1" src="11.-Miniloc-Island-Deluxe-Seaview-Room.jpg" data-index="1">
        <img class="gallery-item gallery-item-2" src="AquaticResort.png" data-index="2">
        <img class="gallery-item gallery-item-3" src="216060728.jpg" data-index="3">
        <img class="gallery-item gallery-item-4" src="lower-beach-family-room.jpg" data-index="4">
        <img class="gallery-item gallery-item-5" src="549762900.jpg" data-index="5">
    </div>
    <div class="gallery-controls"></div>
   </div>

</div>
<footer>
      <div class="foot">
        <h4><a href="<?=('f')?>"></a></h4>
        <div class="icons">
          <span><i class="bi bi-facebook"></i></span>
          <span><i class="bi bi-twitter-x"></i></span>
          <span><i class="bi bi-instagram"></i></span>
          <span><i class="bi bi-linkedin"></i></span>
        </div>
        <p>
          The Aquatic  makes one modest. You see what a tiny place you occupy in the
          world.
        </p>
      </div>
    </footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="src.js"></script>
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