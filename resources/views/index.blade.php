@extends('layouts.content')

@section('index_content')
 
  <section class="top_experiences">
      <div class="container" action='data'>
        <div class="row">
          <div class="col-md-12 text-center">
            <h1>Best Places To Travel in Bangladesh</h1>
            <br><br>
          </div>
        </div>        
        <div class="row">
          <form action="demo" method="POST">
            @csrf
          @foreach ($pal as $u)

            <div class="col-md-4">
              <div class="common_sight">
               <a  href="" ><img class="img-responsive" src="data:image/jpeg;base64,{{ base64_encode( $u->pImg ) }}"/></a>
                  <h5> <input type="submit" name="v" value="{{$u->pName}}"> </h5>
                  <p> {{ $u->pDistrict }} </p>
                  <p>{{ $u->hContact }} </p>
                  <p>{{ $u->hCity }} </p>
              </div>
            </div>

          @endforeach
          </form>
        </div>
      </div>
  </section> 


@stop