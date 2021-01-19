<nav>
  <ul>
  <?php
    foreach($routes as $key=>$value){
    ?>
      <li><a href="?p=<?php echo $key; ?>"><?php echo $value[0]; ?></a></li>
    <?
    }
  ?>
  </ul>
</nav>