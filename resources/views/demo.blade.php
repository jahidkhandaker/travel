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

        <div class="row">

          @foreach ($demo as $u)

            <div class="col-md-4">
              <div class="common_sight">
               <a  href="" ><img class="img-responsive" src="data:image/jpeg;base64,{{ base64_encode( $u->hImg ) }}"/></a>
                  <h5> {{ $u->hName }} </h5>
                  <p> {{ $u->hDistrict }} </p>
                
                  
              </div>
            </div>

          @endforeach
        </div>

      </div>
    </section> 


@stop