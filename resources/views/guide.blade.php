<!DOCTYPE html>
<html>
<head>
  <title>dscds</title>
</head>
<body>

           
          <div class="row">
            @foreach ($guide as $g)
              <div class="col-md-4">
                <div class="demo_hotel">
                  <a  href="" ><img class="img-responsive" src="data:image/jpeg;base64,{{ base64_encode( $g->gImg ) }}"/></a>
                  <p> {{ $g->gName }} </p>
                  <p> {{ $g->gContact }} </p>
                  <p> {{ $g->gAddress }} </p>
                  <p> {{ $g->gDescription }} </p>
                </div>
              </div>
            @endforeach
          </div>
          
</body>
</html>