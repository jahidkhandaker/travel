@extends('t.layout.content')


@section('destination')

 <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Best Place to Travel</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>

        <div class="row">

          @foreach ($pal as $u)

            <div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<img src="data:image/jpeg;base64,{{ base64_encode( $u->img ) }}" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="text">
	    					<h4 class="price">$400</h4>
	    					<span> {{ $u->name }} </span>
	    					<h3><a href="project.html">Gurtnellen, Swetzerland</a></h3>
	    					<div class="star d-flex clearfix">
	    						<div class="mr-auto float-left">
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
	    						</div>
	    						<div class="float-right">
	    							<span class="rate"><a href="#">(120)</a></span>
	    						</div>
	    					</div>
	    				</div>
	    				<!-- <a href="images/destination-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a> -->
    				</div>
    			</div>

          @endforeach
        </div>

    		<div class="row">
    			
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<img src="images/destination-2.jpg" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="text">
	    					<h4 class="price">$400</h4>
	    					<span>15 Days Tour</span>
	    					<h3><a href="project.html">Gurtnellen, Swetzerland</a></h3>
	    					<div class="star d-flex clearfix">
	    						<div class="mr-auto float-left">
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
	    						</div>
	    						<div class="float-right">
	    							<span class="rate"><a href="#">(120)</a></span>
	    						</div>
	    					</div>
	    				</div>
	    				<a href="images/destination-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<img src="images/destination-3.jpg" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="text">
	    					<h4 class="price">$400</h4>
	    					<span>15 Days Tour</span>
	    					<h3><a href="project.html">Gurtnellen, Swetzerland</a></h3>
	    					<div class="star d-flex clearfix">
	    						<div class="mr-auto float-left">
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
	    						</div>
	    						<div class="float-right">
	    							<span class="rate"><a href="#">(120)</a></span>
	    						</div>
	    					</div>
	    				</div>
	    				<a href="images/destination-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<img src="images/destination-4.jpg" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="text">
	    					<h4 class="price">$400</h4>
	    					<span>15 Days Tour</span>
	    					<h3><a href="project.html">Gurtnellen, Swetzerland</a></h3>
	    					<div class="star d-flex clearfix">
	    						<div class="mr-auto float-left">
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
	    						</div>
	    						<div class="float-right">
	    							<span class="rate"><a href="#">(120)</a></span>
	    						</div>
	    					</div>
	    				</div>
	    				<a href="images/destination-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<img src="images/destination-5.jpg" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="text">
	    					<h4 class="price">$400</h4>
	    					<span>15 Days Tour</span>
	    					<h3><a href="project.html">Gurtnellen, Swetzerland</a></h3>
	    					<div class="star d-flex clearfix">
	    						<div class="mr-auto float-left">
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
	    						</div>
	    						<div class="float-right">
	    							<span class="rate"><a href="#">(120)</a></span>
	    						</div>
	    					</div>
	    				</div>
	    				<a href="images/destination-5.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<img src="images/destination-6.jpg" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="text">
	    					<h4 class="price">$400</h4>
	    					<span>15 Days Tour</span>
	    					<h3><a href="project.html">Gurtnellen, Swetzerland</a></h3>
	    					<div class="star d-flex clearfix">
	    						<div class="mr-auto float-left">
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
	    						</div>
	    						<div class="float-right">
	    							<span class="rate"><a href="#">(120)</a></span>
	    						</div>
	    					</div>
	    				</div>
	    				<a href="images/destination-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<img src="images/destination-7.jpg" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="text">
	    					<h4 class="price">$400</h4>
	    					<span>15 Days Tour</span>
	    					<h3><a href="project.html">Gurtnellen, Swetzerland</a></h3>
	    					<div class="star d-flex clearfix">
	    						<div class="mr-auto float-left">
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
	    						</div>
	    						<div class="float-right">
	    							<span class="rate"><a href="#">(120)</a></span>
	    						</div>
	    					</div>
	    				</div>
	    				<a href="images/destination-7.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<img src="images/destination-8.jpg" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="text">
	    					<h4 class="price">$400</h4>
	    					<span>15 Days Tour</span>
	    					<h3><a href="project.html">Gurtnellen, Swetzerland</a></h3>
	    					<div class="star d-flex clearfix">
	    						<div class="mr-auto float-left">
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
	    						</div>
	    						<div class="float-right">
	    							<span class="rate"><a href="#">(120)</a></span>
	    						</div>
	    					</div>
	    				</div>
	    				<a href="images/destination-8.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<img src="images/destination-9.jpg" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="text">
	    					<h4 class="price">$400</h4>
	    					<span>15 Days Tour</span>
	    					<h3><a href="project.html">Gurtnellen, Swetzerland</a></h3>
	    					<div class="star d-flex clearfix">
	    						<div class="mr-auto float-left">
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
	    						</div>
	    						<div class="float-right">
	    							<span class="rate"><a href="#">(120)</a></span>
	    						</div>
	    					</div>
	    				</div>
	    				<a href="images/destination-9.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<img src="images/destination-10.jpg" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="text">
	    					<h4 class="price">$400</h4>
	    					<span>15 Days Tour</span>
	    					<h3><a href="project.html">Gurtnellen, Swetzerland</a></h3>
	    					<div class="star d-flex clearfix">
	    						<div class="mr-auto float-left">
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
	    						</div>
	    						<div class="float-right">
	    							<span class="rate"><a href="#">(120)</a></span>
	    						</div>
	    					</div>
	    				</div>
	    				<a href="images/destination-10.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<img src="images/destination-11.jpg" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="text">
	    					<h4 class="price">$400</h4>
	    					<span>15 Days Tour</span>
	    					<h3><a href="project.html">Gurtnellen, Swetzerland</a></h3>
	    					<div class="star d-flex clearfix">
	    						<div class="mr-auto float-left">
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
	    						</div>
	    						<div class="float-right">
	    							<span class="rate"><a href="#">(120)</a></span>
	    						</div>
	    					</div>
	    				</div>
	    				<a href="images/destination-11.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
    					<div class="img">
		    				<img src="images/destination-12.jpg" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="text">
	    					<h4 class="price">$400</h4>
	    					<span>15 Days Tour</span>
	    					<h3><a href="project.html">Gurtnellen, Swetzerland</a></h3>
	    					<div class="star d-flex clearfix">
	    						<div class="mr-auto float-left">
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
		    						<span class="ion-ios-star"></span>
	    						</div>
	    						<div class="float-right">
	    							<span class="rate"><a href="#">(120)</a></span>
	    						</div>
	    					</div>
	    				</div>
	    				<a href="images/destination-12.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    		</div>
    		<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
    	</div>
    </section>

@stop