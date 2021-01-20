<?php 
if(!empty($_POST['email'])){
    if(login($_POST['email'], $_POST['pwd'])){
        echo 'gg connecté';
        header('location: index.php ');
    }else{
        echo 'nop';
    }
}
?>

<div class="middleCenter">
          <div class="flexLogPage">
              <div class="flexLock"><i class="fas fa-unlock fa-9x"></i></div>
              <form action="" method="post">
              <div><input class="sizeInput"type="text" placeholder="Email" name="email"></div>
              <div><input class="sizeInput"type="text" placeholder="Password" name="pwd"></div>
              <div><input class="sizeInput"type="submit" value="Submit"></div>
          </form>
      </div>
  </div>
</div>



