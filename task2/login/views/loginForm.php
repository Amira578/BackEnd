<?php
// define variables and set to empty values
 $email  = $password = "";

$is_welcome=true;
$templates= ['amira@gmail.com','alex@yahoo.com'];
$passwords=['12345678','23456789'];
$errors=[];
//echo count($errors);
$errors['emailErr']=$errors[ 'passwordErr'] =$errors['notSubscribed']= "";
$e=[];
//echo count($e);
//echo count($errors);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
     
    if (empty($_POST["email"])) {
        $errors['emailErr'] = "Email is required";
        $is_welcome=true;
        $e[]='error1';
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['emailErr'] = "Invalid email format";
            $is_welcome=true;
            $e[]='error2';
        }
      
    }
    if (empty($_POST["password"])) {
        $errors[ 'passwordErr'] = "Password is required";
        $is_welcome=true;
        $e[]='error3';
    } else {
        $password = test_input($_POST["password"]);
        
    }
   
    if($errors['emailErr']==""&& $errors['passwordErr']==""){
        for($i=0;$i<count($templates);$i++){
            //echo $email,$templates[$i].'<br>',$password,$passwords[$i];
             if($email==$templates[$i]&& $password==$passwords[$i]){
                $is_welcome=false;
             break;
            }
            else{
                $errors['notSubscribed']='Email Or Password maybe incorrect';
                $e[]='error';
            }
        }
    }
   // echo count($e);
    
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
    <title>Login Form</title>
</head>
<body>

   <div class="form">
       <div class="row">
           <div class="  styling-part col-md-6 d-flex flex-column
           text-center justify-content-center align-items-center">
                    <img  class="regImg my-5" src="images/login.png">
               <h4 class="mb-3">Let's get you In</h4>
               <p>Enjoy Being Here with Us!</p>
               <div class="icon d-flex text-center justify-content-center align-items-center">
               <i class="far fa-hand-peace fa-2x"></i>
               </div>
             
           </div>
           <div class="form-content col-md-6 d-flex flex-column justify-content-center align-items-center">
               <form method="POST" action="<?php echo $is_welcome? htmlspecialchars($_SERVER["PHP_SELF"]):'welcome.php' ;?>">

            
               <span class="error"><?php echo $errors['notSubscribed'];?></span>
                   <div class="form-group">
                  
                               <label id="label" for="Email">Email address</label>
                            
                             
                               <div class="d-flex flex-column">
                  
                               <input type="email" class="form-control" name="email" value=<?php echo $email ?>>
                                <span class="error">* <?php echo $errors['emailErr'];?></span>
                               </div>
                                    
                       

                   </div>
                         
                   <div class="form-group">
                       
                           
                               <label for="Password">Password</label>
                               <div class="d-flex flex-column">
                           
                               
                               <input type="password" class="form-control" name="password"  >
                               <span class="error">* <?php echo $errors['passwordErr'];?></span>
                               </div>
                          
                   </div>
                   
                   
                   <div class="text-center mt-4">
                   <button type="submit" class="btn  submit-btn">Login</button>
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

