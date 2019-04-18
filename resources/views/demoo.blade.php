@extends('layouts.content')

@section('spot_content')



 <section class="top_experiences">
      <div class="container" action='data'>
        <div class="row">
          <div class="col-md-12 text-center">
            <h1>Place demo To Visit in Bangladesh</h1>
            <br><br>
          </div>
        </div>
 <!-- ------------Place Description Start--------------- -->
        <div class="row place-driscription">
          <div class="container">
          @foreach ($place as $p)

            <div class="col-md-6">
              <div class="demo_hotel main-place">
               <a  href="" ><img class="img-responsive" src="data:image/jpeg;base64,{{ base64_encode( $p->pImg ) }}"/></a>
              </div>
            </div>
            <div class="col-md-6 place-data">
                  <h1> {{ $p->pName }} </h1>
                  <p class="place-title"> CITY: <span class="place-description">{{ $p->pCity }}</span> </p>
                  <p class="place-title"> DISTRICT: <span class="place-description">{{ $p->pDistrict }}</span> </p>
                  <p class="place-title"> ABOUT: <span class="place-description">{{ $p->pAbout2 }}</span> </p>
                  <p class="place-title"> DESCRIPTION: <span class="place-description">{{ $p->pDescription }}</span> </p>
              </div>
            </div>

          @endforeach
          </div>
        </div>
<!-- ------------Place Description END--------------- -->


        

<!-- ------------Hotel Description Start--------------- -->
        <div class="row">  
          <div class="container">
          <div class="col-md-12"> 
            <div class="row">
              <form action="booking" method="POST">
              @csrf
              @foreach ($hotel as $u)
                <div class="col-md-4">
                  <div class="demo_hotel hotel-list">
                    <a  href="" ><img class="img-responsive" src="data:image/jpeg;base64,{{ base64_encode( $u->hImg ) }}"/></a>
                    <div class="demo-details">
                    <h1> {{ $u->hName }} </h1>
                    <p> {{ $u->hCity }} </p>
                    <p> {{ $u->hDistrict }} </p>
                    <p> {{ $u->hContact }} </p>
                    <p> {{ $u->hAbout2 }} </p>
                    <p> {{ $u->pDescription }} </p>
                    <input type="submit" name="bk" value="{{$u->hId}}">
                    </div>
                  </div>
                </div>
              @endforeach
              </form>
          </div>
          </div>
        </div>
<!-- ------------Hotel Description END--------------- -->

<!-- ------------Hotel Booking Start--------------- -->
         <div class="col-md-4">
           <div class="row">
          
           </div>
          </div>
<!-- ------------Hotel Booking END--------------- -->
        </div>

      </div>
    </section> 


@stop