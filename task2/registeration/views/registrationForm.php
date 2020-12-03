<?php
// define variables and set to empty values
$name = $email = $gender = $re_password = $password=$mobile = "";
$is_welcome=false;
$errors=[];
$errors['nameErr']=$errors['emailErr']=$errors[ 'passwordErr']= $errors['re_passwordErr']=$errors['mobileErr'] ="";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
        $errors['nameErr'] = "Username is required";
        $is_welcome=true;
    } else {
        $name = test_input($_POST["username"]);
    }

    if (empty($_POST["email"])) {
        $errors['emailErr'] = "Email is required";
        $is_welcome=true;
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['emailErr'] = "Invalid email format";
            $is_welcome=true;
        }
    }
    if (empty($_POST["password"])) {
        $errors[ 'passwordErr'] = "Password is required";
        $is_welcome=true;
    } else {
        $password = test_input($_POST["password"]);
        if (strlen($password) <= 8) {
            $errors['passwordErr'] = "Your Password Must Contain At Least 8 Characters!";
        }
    }
    if (empty($_POST["re-password"])) {
        $errors['re_passwordErr']= "Re-Enter your password";
        $is_welcome=true;
    } else {
        $re_password = test_input($_POST["re-password"]);
    }
    if (empty($_POST["gender"])) {
        $errors[' genderErr'] = "please Choose your gender";
        $is_welcome=true;
    } else {
        $gender = test_input($_POST["gender"]);
    }

    if (empty($_POST["mobile"])) {
        $errors['mobileErr'] = "Mobile number is required";
        $is_welcome=true;
    } else {
        $mobile= test_input($_POST["mobile"]);
        if(!preg_match("/^[0-9]{11}$/", $mobile)) {
            $errors['mobileErr'] = "Invalid Mobile Number";
            $is_welcome=true;
        }
    }

    if ($password!= $re_password){
        $errors['re_passwordErr']= "password didn't match";
        $is_welcome=true;
    }

}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="style.scss">
    <title>Registration Form</title>
</head>
<body>

   <div class="form">
       <div class="row">
           <div class="  styling-part col-md-6 d-flex flex-column
           text-center justify-content-center align-items-center">
                    <img  class="regImg my-5" src="images/signup.png">
               <h4 class="mb-3">Let's get you set up</h4>
               <p>It should only take couple of minutes!</p>
               <div class="icon d-flex text-center justify-content-center align-items-center">
                   <i class="fas fa-angle-right fa-2x "></i>
               </div>
           </div>
           <div class="form-content col-md-6 d-flex flex-column justify-content-center align-items-center">
               <form method="POST" action="<?php echo $is_welcome?'welcome.php':htmlspecialchars($_SERVER["PHP_SELF"]) ;?>">

               <div class="form-group">
                       <div class="row">
                           <div class="col-25">
                               <label for="username">Username</label>
                           </div>
                           <div class="col-75">
                               <span class="error ">* <?php echo $errors['nameErr'];?></span>
                               <input type="text" class="form-control" name="username"  value=<?php echo $name ?>>
                           </div>
                       </div>

                   </div>
                   <div class="form-group">
                       <div class="row">
                           <div class="col-25">
                               <label id="label" for="Email">Email address</label>
                           </div>
                           <div class="col-75">
                               <span class="error">* <?php echo $errors['emailErr'];?></span>
                               <input type="email" class="form-control" name="email" value=<?php echo $email ?>>

                           </div>
                       </div>

                   </div>

                   <div class="form-group">
                       <div class="row">
                           <div class="col-25">
                               <label for="Password">Password</label>
                           </div>
                           <div class="col-75">
                               <span class="error">* <?php echo $errors['passwordErr'];?></span>
                               <input type="password" class="form-control" name="password"  >
                           </div>
                       </div>
                   </div>
                   <div class="form-group">
                       <div class="row">
                           <div class="col-25">
                               <label for="re-Password">Confirm Password</label>
                           </div>
                           <div class="col-75">
                               <span class="error">* <?php echo $errors['re_passwordErr'];?></span>
                               <input type="password" class="form-control" name="re-password">
                           </div>
                       </div>
                   </div>
                   <div class="form-group">
                       <div class="row">
                           <div class="col-25">
                               <label for="mobile">Mobile</label>
                           </div>
                           <div class="col-75">
                               <span class="error">* <?php echo $errors['mobileErr'] ;?></span>
                               <input type="tel" class="form-control" name="mobile" value=<?php echo $mobile ?> >

                           </div>
                       </div>
                   </div>
                   <div class="form-group ">
                       <div class="row">
                           <div class="col-25">
                               <label for="gender">Gender</label>
                           </div>
                           <div class="col-75">
                               <span class="error">* </span>
                               <select id="gender" name="gender" class="form-control">
                                   <option selected>Male</option>
                                   <option> Female</option>
                               </select>

                           </div>
                       </div>


                   </div>
                   <div class="text-center mt-4">
                   <button type="submit" class="btn  submit-btn">Sign Up</button>
                   </div>
               </form>

           </div>
       </div>
   </div>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>

