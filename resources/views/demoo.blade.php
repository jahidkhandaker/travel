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

          @foreach ($dem as $u)

            <div class="col-md-4">
              <div class="demo_sight">
               <a  href="" ><img class="img-responsive" src="data:image/jpeg;base64,{{ base64_encode( $u->hImg ) }}"/></a>
                  <p> {{ $u->pName }} </p>
                  <p> {{ $u->pCity }} </p>
                  
              </div>
            </div>

          @endforeach


          @foreach ($dem as $u)

            <div class="col-md-4">
              <div class="demo_hotel">
               <a  href="" ><img class="img-responsive" src="data:image/jpeg;base64,{{ base64_encode( $u->hImg ) }}"/></a>
                  <p> {{ $u->hName }} </p>
                  <p> {{ $u->hContact }} </p>
                  <p> {{ $u->hCity }} </p>
                  <p> {{ $u->pDescription }} </p>
              </div>
            </div>

          @endforeach


        </div>

      </div>
    </section> 


@stop