
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

<?php 
          if(isset(($_POST['email']))&&isset(($_POST['pwd']))){         
            $recherche = $bdd->query("SELECT * FROM users");
                while($donnee = $recherche->fetch()){
                    if($donnee['email'] === $_POST['email'] ){
                        $recherche->closeCursor();
                        if(password_verify($_POST['pwd'],$donnee['password'])){
                            $_SESSION['id'] = $donnee['id'];
                            $_SESSION['statut'] = $donnee['password'];
                            $_SESSION['email'] = $donnee['email'];
                            header("Location: index.php");  
                        }   
                    }
            } 
        } 
?>


