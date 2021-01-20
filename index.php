
  <!DOCTYPE html>
  <html lang="en">
  
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="assets/style.css">
      <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
  
      <title>Breaking Badge</title>
  </head>
  <header>
          <?php include('components/navbar.php'); ?>
  </header>
  <body>
          <?php 
            if(!isAuthenticated()){
              include_once('pages\login.php'); 
            }else{
              // if()
              //   include('./pages/dashboard_user.php');
                include('./pages/dashboard_admin.php');
            }
            ?>
  </body>
  
  </html>
