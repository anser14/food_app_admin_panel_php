


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Category Admin Page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}

?>
   
<div class="container">

   <div class="admin-product-form-container">

      <form action="logincheck.php" method="POST" >
         <h3>Admin Panel</h3>
         <input type="text" placeholder="User Name" name="username" class="box">
         <input type="text" placeholder="Password" name="password" class="box">
         <input type="submit" class="btn" name="submit" value="Login">
      </form>

   </div>

    
      </table>
   </div>

</div>


</body>
</html>