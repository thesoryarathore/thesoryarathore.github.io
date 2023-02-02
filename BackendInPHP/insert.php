<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Page</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
  <div>
    <div class="row col-md-6 col-md-offset-3">
      <div class="panel panel-primary">
        <div class="panel-heading text-center">
          <h1>Registration Form</h1>
        </div>
        <div class="panel-body">
          <form action="process.php" method="post">
            <div class="form-group">
              <label for="firstName">First Name</label>
              <input type="text" class="form-control" id="firstName" name="firstName" />
            </div>
            <div class="form-group">
              <label for="lastName">Last Name</label>
              <input type="text" class="form-control" id="lastName" name="lastName" />
            </div>
            <div class="form-group">
              <label for="gender">Gender</label>
              <div>
                <label for="male" class="radio-inline"><input type="radio" name="gender" value="Male"
                    id="male" />Male</label>
                <label for="female" class="radio-inline"><input type="radio" name="gender" value="Female"
                    id="female" />Female</label>
                <label for="others" class="radio-inline"><input type="radio" name="gender" value="Other"
                    id="others" />Others</label>
              </div>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email" />
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" />
            </div>
            <div class="form-group">
              <label for="Education">Education</label>
              <div>
                <label for="10th" class="radio-inline"><input type="radio" name="education" value="10th"
                    id="male" />10th</label>
                <label for="12th" class="radio-inline"><input type="radio" name="education" value="12th"
                    id="female" />12th</label>
                <label for="graduate" class="radio-inline"><input type="radio" name="education" value="graduate"
                    id="others" />graduate</label>
              </div>
            <div class="form-group">
              <label for="number">Phone</label>
              <input type="Phone" class="form-control" id="number" name="phone"value="" />
            </div>
            <input type="submit" name="submit" value="submit" class="btn btn-primary" />
          </form>
        </div>
        <div class="panel-footer text-right">
          <small>&copy; Sorya Rathore</small>
        </div>
      </div>
    </div>
  </div>
</body>

</html>