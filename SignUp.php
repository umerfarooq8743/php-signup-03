<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<title>Hello, world!</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form action="" method="get">

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg"  name="txtn"  Required />
                  <label class="form-label" for="form3Example1cg">Your Name</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg"  name="txte"  Required />
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="txtpass"   Required />
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cdg" class="form-control form-control-lg" name="txtrpass" Required />
                  <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                </div>

                <div class="d-flex justify-content-center">
                  <input type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" name="btnsub" value="Register">
                </div>

              </form>

                <?php
// if and isset function start here
                   if(isset($_GET['btnsub'])){
                     
                     $Name=$_GET['txtn']; 
                     $Email=$_GET['txte']; 
                     $Password=$_GET['txtpass']; 
                     $Rpass=$_GET['txtrpass'];
                //    data have been stored in variables


                $con=mysqli_connect("localhost","root","","dbsignup");
                //    connection query



// if fuction starts  here
                if($Password==$Rpass){
                    // insert query
                    mysqli_query($con,"INSERT INTO tblinfo VALUES ('null','$Name','$Email','$Password')");


                    // alert after insert query successfull
                     echo '
                     <div class="mt-5 alert alert-warning alert-dismissible fade show" role="alert">
   Account Created ! Thank You .
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
                     ';

                    // rediect to page
                    echo '
                    <meta http-equiv="refresh" content="2; URL=https://thatsthem.com/dashboard"/>
                    
                    ';

                }
                else{
                    echo "<h5 class='mt-5 text-center'>Sorry! Password Didn't Match.</h5>";
                }
// if fuction ends here

                     };

// if and isset function ends here




                ?>



            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>