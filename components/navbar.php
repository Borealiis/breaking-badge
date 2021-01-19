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
                  }else if(isAuthenticated()){
                      echo '<div class="centerV">Log out</div>';
                  }
                  ?>  
              </div>
   
</nav>
