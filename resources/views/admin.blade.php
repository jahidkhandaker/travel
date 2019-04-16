<!DOCTYPE html>
<html>
<head>
  <title>admin</title>
  
</head>
<body>
  <form action="adminUp" method="post" enctype="multipart/form-data">
    @csrf
          <label>Place Title:</label>
          <input type="text" name="title">
          <br><br>
          <label>City:</label>
          <input type="text" name="city">
          <br><br>
          <label> District:</label>
          <input type="text" name="dist">
          <br><br>
          <label>Image:</label>
          <input type="file" name="img">
          <br>
          <input type="submit" name="placesubmit" value="submit">
          <br><br>
          
        </form>

    <div class="row text-center">
        <form action="adminOut" method="post">
          @csrf
        <input type="submit" name="logout" value="Logout" class="text-center" style="background-color: #E5F3FF; color: black; padding: 5px 5px; font-size: 20px;">
      </form>


</body>
</html>