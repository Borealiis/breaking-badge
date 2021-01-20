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
          <div class="centerV">BREAKING BADGE GAMING</div>
              <div class="flexFlexNav">
                  <?php
                  if(!isAuthenticated()){
                    echo '<div class="centerV">Sign in</div>';
                  }
                  else{
                    echo '<div class="centerV"><a href="components\logout.php">Log out</a></div>';
                  }
                  ?>  

              </div>  
</nav>
