
<!DOCTYPE html>
<html>
<head>
	<title>Booking</title>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/booking.css">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="#"><span>Travel</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="destination" class="nav-link">Destination</a></li>
	          <li class="nav-item"><a href="hotelresto" class="nav-link">Hotels</a></li>
	          <li class="nav-item"><a href="" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="" class="nav-link">Contact</a></li>
	          <li class="nav-item cta"><a href="loginpage" class="nav-link">Sign In</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>

	  <div class="container">
	  	<div class="row">
	  		<div class="col-md-8"> 
            	<form action="booking" method="POST">
            	@csrf
            	@foreach ($hotel as $h)
              	<div class="col-md-4">
	                <div class="demo_hotel">
	                  <a  href="" ><img class="img-responsive" src="data:image/jpeg;base64,{{ base64_encode( $h->hImg ) }}"/></a>
	                  <p> {{ $h->hName }} </p>
	                  <p> {{ $h->hContact }} </p>
	                  <p> {{ $h->hCity }} </p>
	                  <p> {{ $h->hDescription }} </p>
	                </div>
              	</div>
            @endforeach
          		</form>
          	</div>
	  	</div>
	  </div>

	  <dic class="row">
	  	
	  </dic>	
	

</body>
</html>