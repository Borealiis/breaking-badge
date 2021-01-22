
<form action="" method="post">
<select name="badges"><?php giveBadgeNameOptionList(); ?>
</select>
<select name="users"><?php giveUserOptionList(); ?>
</select>
<input type="submit" value="Add Badge">
</form>
<?php  
      $cursor = createCursor();
      if(isset($_POST['badges'])&&isset($_POST['users'])){
        $addUser = $cursor->prepare("INSERT INTO users_badges (badge_id,user_id) VALUES (?,?)"); 
        $addUser->execute(array($_POST['badges'],$_POST['users'])); 
        header('location : index.php');
      
    } 
?>