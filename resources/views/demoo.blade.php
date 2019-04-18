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
        <div class="row">
          @foreach ($place as $p)

            <div class="col-md-4">
              <div class="demo_hotel">
               <a  href="" ><img class="img-responsive" src="data:image/jpeg;base64,{{ base64_encode( $p->pImg ) }}"/></a>
                  <h1> {{ $p->pName }} </h1>
                  <p> {{ $p->pDescription }} </p>
                  <p> {{ $p->pCity }} </p>
                  <p> {{ $p->pDescription }} </p>
              </div>
            </div>

          @endforeach
        </div>
<!-- ------------Place Description END--------------- -->


        <div class="row">
<!-- ------------Hotel Description Start--------------- -->
          <div class="col-md-8"> 
            <div class="row">
            <form action="booking" method="POST">
            @csrf
            @foreach ($hotel as $u)
              <div class="col-md-4">
                <div class="demo_hotel">
                  <a  href="" ><img class="img-responsive" src="data:image/jpeg;base64,{{ base64_encode( $u->hImg ) }}"/></a>
                  <p> {{ $u->hName }} </p>
                  <p> {{ $u->hContact }} </p>
                  <p> {{ $u->hCity }} </p>
                  <p> {{ $u->pDescription }} </p>
                  <input type="submit" name="bk" value="{{$u->hName}}">
                </div>
              </div>
            @endforeach
          </form>
            </div>
          </div>
<!-- ------------Hotel Description END--------------- -->
        </div>

      </div>
    </section> 


@stop