<!-- <nav>
  <ul>
  <?php
   
    foreach($routes as $key=>$value){
    ?>
      <li><a href="?p=<?php echo $key; ?>"><?php echo $value[0]; ?></a></li>
    <?php
    }
    ?>
  </ul>
</nav> -->

<!-- On fait la NAV bar en include -->

<?php  
include_once('functions.php');
?>
<nav class="flexNav">
          <div class="centerV"><a href="../index.php">BREAKING BADGE GAMING</a> </div>
              <div class="flexFlexNav">
                  <?php
                  if(!isAuthenticated()){
                    echo '<div class="centerV"><a href="pages/signin.php">Sign in</a></div>';
                  }
                  else{
                    echo '<div class="centerV"><a href="components/logout.php">Log out</a></div>';
                  }
                  ?>  

              </div>  
</nav>
