<!DOCTYPE html>
<html lang="en">
<head>
	<title>Store Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
    h1 ,p
    {
        text-align: center;
    }
 </style>
</head>
<body>
	
<section>
    <div class="container">
        <div class="row">
            <div class="col-6 my-4">
            <h1>User registration Form</h1>
                <hr>
                <p style="color:gray;">Please fill this form and submit to add record to the database.</p>

               
		<form action="data.php" method="post">
        <div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="Enter Name" name = 'Uname'>
  <label for="floatingInput">Name</label>
</div>
<div class="form-floating">
  <input type="emial" class="form-control" id="floatingPassword" placeholder="Enter your Email" name = 'Uemail'>
  <label for="floatingPassword">Email</label>
</div>

<fieldset class="row mb-3 my-4">
    <legend class="col-form-label col-sm-2 pt-0">Gender :</legend>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="Ugender" id="gender1" value="Female" checked>
        <label class="form-check-label" for="gender1">
          Female
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="Ugender" id="gender2" value="Male">
        <label class="form-check-label" for="gender2">
          Male
        </label>
      </div>
      
    </div>

  </fieldset >
  <div class="row mb-5">
    <div class="col-sm-10 offset-sm-2">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1" name ='receive'>
        <label class="form-check-label" for="gridCheck1">
          Receive E-mail from us
        </label>
      </div>
    </div>
  </div>
  <a href="./data.php"><button name = 'submit' type="submit" class="btn btn-primary">Sign in</button></a>
  <button type="button" class="btn btn-outline-dark" value="reset" name = "cancel">Cancel</button>
                
		</form>
            </div>
        </div>
    </div>
</section>
	
</body>
</html>
