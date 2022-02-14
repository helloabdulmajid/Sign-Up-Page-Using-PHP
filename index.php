<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply For AM</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
   
        <section class="vh-100" style="background-color: #eee;">
            <div class="container h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                  <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                      <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
          
                          <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Application Form</p>
          
                          <form action="" class="mx-1 mx-md-4" method="POST">
          
                            <div class="d-flex flex-row align-items-center mb-4">
                              <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                                <input type="text" id="form3Example1c" name="user" class="form-control" />
                                <label class="form-label" for="form3Example1c" >Your Name</label>
                              </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                  <input type="text" id="form3Example3c" name="phone" class="form-control" />
                                  <label class="form-label" for="form3Example3c" >Your Phone</label>
                                </div>
                              </div>
          
                            <div class="d-flex flex-row align-items-center mb-4">
                              <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                              <div class="form-outline flex-fill mb-0">
                                <input type="email" id="form3Example3c" name="email" class="form-control" />
                                <label class="form-label" for="form3Example3c" >Your Email</label>
                              </div>
                            </div>
          
                          
                            
          
                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                              <button type="submit" class="btn btn-info btn-lg" name="submit" value="submit">Submit</button>
                            </div>
          
                          </form>
                          
                         	<?php 
							if(isset($_POST['submit'])){
							$user = $_POST['user'];
						    $phone = $_POST['phone'];
	                        $email = $_POST['email'];
 $headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";                         
                          
$to = "your-webmail is here";
$subject = "Applied Data";
$txt = "Name-'.$user.',<br>Phone -'.$phone.',<br>Email-'.$email.'";
$headers = "From: your@gmail.com" . "\r\n" .
$headers .= 'Cc: your@gmail.com' . "\r\n";

$ab=(mail($to,$subject,$txt,$headers));
if($ab)
{
  echo"<script>alert('SignUp successfully.')</script>";
  echo "<script>window.open('index.php','_self')</script>";
}
else
{
   echo"Faild";   
}
}
?>
                          
          
                        </div>
                        <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
          
                          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">
          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
         
</body>
</html>