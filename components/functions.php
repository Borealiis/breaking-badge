<?php
include_once('db.php');


  // Similar to "include_once" but for sessions
  // Calls "session_start()" unless it has already been called on the page


  function session_start_once(){
    if(session_status() == PHP_SESSION_NONE){
      return session_start();
    }
  }

  function isAuthenticated(){
    session_start_once();
    return !empty($_SESSION['user_id']);
  }

  // function isAdmin(){
  //   session_start_once();
  //   return isAuthenticated && $_SESSION['account_type'] == 'ADMIN';
  // }


  function login($email, $password){
    // session_start_once();
    $cursor = createCursor();
    $query = $cursor->prepare('SELECT id, password,account_type,pseudo from users WHERE email=?');
    $query->execute([$email]);
    $results = $query->fetch();
    // $cursor->closeCursor();
    if(!empty($results) && password_verify($password, $results['password'])){
      $_SESSION['pseudo'] = $results['pseudo'];
      $_SESSION['user_id'] = $results['id'];
      $_SESSION['account_type'] = $results['account_type'];
      $_SESSION['email'] = $email;
      return true;
    }
    return false;
  }

function signin(){
  $noExist = false;
  $cursor = createCursor();
  $recherche = $cursor->query("SELECT * FROM users");
      while($donnee = $recherche->fetch()){
          if($donnee['email'] === $_POST['email']){
              echo '<div class="middleText">','L',"'",'email ',$donnee['email'];
              echo ' existe déjà !</div>';
              $recherche->closeCursor();
              $noExist = true;
          }
      }
      if($noExist !== true){  
          $email = $_POST['email'];
          $pass = $_POST['pwd'];
          $pseudo = $_POST['pseudo'];
          $hachachePWD = password_hash("$pass",PASSWORD_DEFAULT);
          $addUser = $cursor->prepare("INSERT INTO users (email,password,pseudo,account_type) VALUES (?,?,?,?,?)"); 
          $addUser->execute(array($email,$hachachePWD,$pseudo,"NORMIE")); 
          echo '<div class="middleText" >Vous êtes inscrit !</div>';
          $recherche->closeCursor();
      } 
}
  // function logout(){
  //   session_start();
  //   session_destroy();
  //   header("Location: ../index.php");

  function getBadges(){
    
  }

  function getAllbadges(){
    $cursor = createCursor();
    $recherche = $cursor->query("SELECT * FROM table_badges");
    while($donnee = $recherche->fetch())
    {
        echo '<div class=\'badgeAndDesc\'><div class=\'badgeSolo\'><div class=\'' . $donnee['badge_color'] . ' ' . $donnee['badge_shape'] . '\'>' . $donnee['badge_content'] . '</div></div>';
        echo '<div class=\'badgeDesc\'>' . $donnee['badge_name'] . ': ' . $donnee['badge_desc'] .'</div></div>';
    }
    $recherche->closeCursor();

  }

  function getUsers($pseudo){
    $cursor = createCursor();
    $query = $cursor->prepare('SELECT id, password,account_type,pseudo from users WHERE pseudo=?');
    $query->execute($pseudo);
    $results = $query->fetch();
          
  }  

  function getAllUsers(){
    $cursor = createCursor();
    $recherche = $cursor->query("SELECT * FROM users");
    while($donnee = $recherche->fetch())
    {
        echo "<li>",$donnee['pseudo'],"</li>";
    }
    $recherche->closeCursor();
    }



  function getAllUsersBadges(){
    $cursor = createCursor();
    $table = $cursor->query('SELECT pseudo,badge_name FROM users_badges INNER JOIN users ON users.id = users_badges.user_id INNER JOIN
    table_badges ON table_badges.badge_id = users_badges.badge_id;' );
    while($donnees = $table->fetch())
    {   
        echo '<td>',$donnees['pseudo'],'</td><td>',$donnees['badge_name'],'</td>';
    }
    $table->closeCursor();
  }

  function amountBadges(){
    $id = $_SESSION['user_id'];
    $number = 0;
    $cursor = createCursor();
    $query = $cursor->prepare('SELECT badge_id,user_id from users_badges WHERE user_id=?');
    $query->execute([$id]);
    while($results = $query->fetch())
    {   
        if($results['user_id']== $id ){
            $number++;
            echo $number;
        }
            
    }
    
  }
  function amountOfUsers(){
    $id = $_SESSION['user_id'];
    $number = 0;
    $cursor = createCursor();
    $query = $cursor->query('SELECT id from users WHERE account_type = "NORMIE" ');
    while($results = $query->fetch())
    {   
        
            $number++;
            
        }
     echo $number;       
    }
    

  function progressionPoucentage(){
    // 100* /amountBadges()

   //pourcentage = 100 x Valeur partielle / Valeur totale
    
  }
  function createBadge(){

  }

  function editBadge($badge_id){

  }

  function removeBadge($badge_id){

  }
  

  function grantBadgeToUser($badge_id, $user_id){
    $cursor = createCursor();
    $addBage = $cursor->prepare("INSERT INTO users_badges (badge_id,user_id) VALUES (?,?)"); 
    $addUser->execute(array($badge_id,$user_id));
  }
  function removeBadgeFromUser($badge_id, $user_id){
    
  }

?>