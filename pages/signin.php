<!DOCTYPE html>
  <html lang="en">
  
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../assets/style.css">
      <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
  
      <title>Breaking Badge</title>
</head>
<header>
<?php
include('../components/navbar.php'); 
?>
</header>
<body>
    
</body>
</html>
<?php
  if((!empty(isset($_POST['email'])))&&!empty(isset($_POST['pwd']))&&!empty(isset($_POST['pseudo']))){
    signin();
    } 

?>        
     <div class="middleCenter">
          <div class="flexLogPage">

              <div class="flexLock"><i class="fas fa-unlock fa-9x"></i></div>
              <form action="" method="post">
              <div><input class="sizeInput"type="text" placeholder="First Name" name="pseudo"></div>
              <div><input class="sizeInput"type="text" placeholder="Email" name="email"></div>
              <div><input class="sizeInput"type="text" placeholder="Password" name="pwd"></div>

              <div><input class="sizeInput"type="submit" value="sign in"></div>
          </form>
      </div>
  </div>
</div>      