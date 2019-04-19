
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

	
	<div class="row place-driscription">
    	<div class="container">
         @foreach ($hotel as $h)

            <div class="col-md-6">
              <div class="demo_hotel main-place">
               <a  href="" ><img class="img-responsive" src="data:image/jpeg;base64,{{ base64_encode( $h->hImg ) }}"/></a>
              </div>
            </div>
            <div class="col-md-6 place-data">
                  <h1> {{ $h->hName }} </h1>
                  <p class="place-title"> CITY: <span class="place-description">{{ $h->hCity }}</span> </p>
                  <p class="place-title"> DISTRICT: <span class="place-description"> {{ $h->hDistrict }}</span> </p>
                  <p class="place-title"> ABOUT: <span class="place-description">{{ $h->hContact }}</span> </p>
                  <p class="place-title"> DESCRIPTION: <span class="place-description">{{ $h->hAbout2 }}</span> </p>
                  <p class="place-title"> DESCRIPTION: <span class="place-description">{{ $h->hDescription }}</span> </p>
              </div>
        @endforeach
        </div>
    </div>
	<div class="container">
	  	<div class="row" style="padding-top: 20px;">
              @foreach ($room as $r)
                <div class="col-md-4">
                  <div class="demo_hotel hotel-list">
                    <a  href="" ><img class="img-responsive" src="data:image/jpeg;base64,{{ base64_encode( $r->rImg ) }}"/></a>
                    <div class="demo-details">
                    <p> Room Type {{ $r->rType }} </p>
                    <p> Destription: {{ $r->rDescription }} </p>
                    <p> Available: {{ $r->qAmount }} </p>
                    </div>
                  </div>
                </div>
              @endforeach
	  	</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-offset-3">
				<form action="reserve" method="post">
					@csrf
					<label>Name:</label>
					<input type="text" name="cName" placeholder="Name" required="">
					<br><br>
					<label>Address:</label>
					<input type="text" name="cAddress" placeholder="Address" required="">
					<br><br>
					<label>Contact No.:</label>
					<input type="text" name="cMobile" placeholder="Mobile" required="">
					<br><br>
					<label>Email:</label>
					<input type="text" name="cEmail" placeholder="Email" required="">
					<br><br>
					<label>Persons:</label>
					<input type="number" name="cQuantity" placeholder="Quantity" required="">
					<br><br>
					
					<label>Hotel Name:</label>
					@foreach ($hotel as $h)
						<input type="text" name="rsHotel" value="{{ $h->hName }}">
					@endforeach
					<br><br>

					<label>Room Type:</label>
					<select name="rsRoomtype">
						@foreach ($room as $r)
						<option>{{ $r->rType }}</option>
						@endforeach
					</select>
					<br><br>

					<label>Room Quantity:</label>
					<input type="number" name="rsRoomQuantity" placeholder="RoomQuantity" required="">
					<br><br>
					<label>Check In Date:</label>
					<input type="date" name="checkin" required="">
					<br><br>
					<label>Check Out Date:</label>
					<input type="date" name="checkout" required="">
					<br><br>	
					<input type="submit" name="submit" value="Book">		          	
				</form>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<h1>Thank You</h1>
		</div>
	</div>

	 
</body>
</html>