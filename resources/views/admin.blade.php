<!DOCTYPE html>
<html>
<head>
  <title>admin</title>
  
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-md-offset-3 taxt-center">
          <table>
            <tr>
              <th>Place Name</th>
              <th>Place ID</th>
            </tr>
          
        @foreach ($pal as $u)
          <tr>
            <td>{{$u->pName}}</td>
            <td>{{$u->pId}}</td>
          </tr>         
        
          @endforeach
          </table>
      </div>

    </div>
    <div class="row">
      <div class="col-md-12" style="padding-top: 20px; padding-bottom: 20px; background-color: blue; ">
        <form action="adminPlacesUp" method="post" enctype="multipart/form-data">
          @csrf
          <table>
            <tr>
              <th>Place Name</th>
              <th>Place City</th>
              <th>Place District</th>
              <th>Place Description</th>
              <th>Place About</th>
              <th>Place Details</th>
              <th>Place Image</th>
              <th>Place Submit</th>
            </tr>

            <tr>  
              <td><input type="text" name="pName" required=""></td>
              <td><input type="text" name="pCity" required=""></td>
              <td><input type="text" name="pDistrict" required=""></td>
              <td><input type="textarea" name="pDescription" required=""></td>
              <td><input type="text" name="pAbout1" required=""></td>
              <td><input type="text" name="pAbout2" required=""></td>
              <td><input type="file" name="pImg" required=""></td>
              <td><input type="submit" name="placesubmit" value="submit"></td>
            </tr>
          </table>
        </form>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12" style="padding-top: 20px; padding-bottom: 20px;">
        <form action="adminHotelsUp" method="post" enctype="multipart/form-data">
          @csrf
          <table>
            <tr>
              <th>Place ID</th>
              <th>Hotel Name</th>
              <th>Hotel City</th>
              <th>Hotel District</th>
              <th>Hotel Description</th>
              <th>Hotel Contact</th>
              <th>Hotel Email</th>
              <th>Hotel Image</th>
              <th>Hotel Submit</th>
            </tr>

            <tr>  
              <td><input type="text" name="hpId" required=""></td>
              <td><input type="text" name="hName" required=""></td>
              <td><input type="text" name="hCity" required=""></td>
              <td><input type="text" name="hDistrict" required=""></td>
              <td><input type="textarea" name="hDescription" required=""></td>
              <td><input type="text" name="hContact" required=""></td>
              <td><input type="text" name="hAbout2" required=""></td>
              <td><input type="file" name="hImg" required=""></td>
              <td><input type="submit" name="placesubmit" value="submit"></td>
            </tr>
          </table>
        </form>
      </div>
    </div>

  </div>
        

    <div class="row text-center">
        <form action="adminOut" method="POST">
          @csrf
        <input type="submit" name="logout" value="Logout" class="text-center" style="background-color: #E5F3FF; color: black; padding: 5px 5px; font-size: 20px;">
      </form>


</body>
</html>