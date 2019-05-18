<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Registration Page</title>
</head>
<body>
        <div class="container">
                <div class="row">
                  <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-signin my-5">
                      <div class="card-body">
                        <h5 class="card-title text-center">Help Me Make A Cookie</h5>
                        <div class="form-group">
                          <form method="POST" action="process_form_cookies.php">
                            <label for="stateSelect">Select State</label>
                            <select class="form-control" name="stateSelect" id="stateSelect">
                                <option>Oregon</option>
                                <option>Washington</option>
                                <option>California</option>
                                <option>Idaho</option>
                                <option>Montana</option>
                            </select>
                            <label for="selectCountry">Select Country</label>
                            <select class="form-control" name="selectCountry" id="selectCountry">
                                <option>USA</option>
                                <option>Mexico</option>
                                <option>Canada</option>
                                <option>Russia</option>
                                <option>China</option>
                            </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



<!-- jQuery -->
<script src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>