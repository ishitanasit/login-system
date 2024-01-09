<?php include("conn1.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="form-container">
<form action="#" method="post">
      <h3>login now</h3>
      
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>
</body>
</html>

<?php
print_r($_POST);
if($_POST['submit'])
{
    $email          = $_POST['email'];
    $encpassword    = $_POST('password');
   $query = "INSERT INTO formdata (email,password) values ('$name','$email','$encpassword')";
    $data = mysqli_query($conn ,$query);
    if($data)
    {
        //echo "Data Inserted into database";
    }
    else
    {
        echo "Failed" ;
    }

}

?>
