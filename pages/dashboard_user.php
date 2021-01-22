<div id="nbuser">
<?php
amountOfUsers();
?>
</div>
<p id="pseudo">
<?php
$_SESSION['pseudo']; 
echo "{$_SESSION['pseudo']}";
?>
<div id="pourcentage">
    50
    <!--
        <?php 
        //progressionPoucentage();
        ?>
    -->
</div>
</p>
<main id="mainContainerUser">
    <section class="container sidebarnotif">
        <div class="welcome">
            <p class="message">Welcome, to our plateform <?php echo "{$_SESSION['pseudo']}"; ?>! <br> <br> We are happy to count you as a new member of
            our community.<br></p>

        </div>
        <div class="sidebarBadgeInfo">
            <div class="badgeNotifuser">
                <div class="bell">
                <figure class="imagebell">
                <img src="./assets/image/bell.png" alt="user icon" height="35px" width="35px">
                <p class="notifmsg">Notifications:</p>
                </figure>
                </div>
                <div class="messagebox">
                <p class="messagenotif">Congratulations, you have reached the Bronze level! </br></br>A new badge has now been assigned to you!</p>
                </div>
            </div>
            <div class="myBadges"></div>
            <div class="badgesToGet"></div>
            <div class="myBadgesProgress"></div>
        </div>
    </section>
    <div class="dashboardInfo">
        <section class="container userinfo">
<!--            <img src="" alt="" class="userImage">-->
            <div class="userinfo">
            <figure>
                <img src="./assets/image/avatar.png" alt="user icon" height="70px" width="70px">
            </figure>
            <p class="username"><?php echo "{$_SESSION['pseudo']}"; ?></p>
            </div>
            <p class="description">32 years old, male from Paris, France. Just played Fortnite 3 hours ago.</p>
        </section>
        <section class="container Users">
            <div class="viewUserslist">
                <div class="Userslist">
                <div class="userdash">
                    <p class="title">Users</p>
                    <figure><img src="./assets/image/user.png" alt="user logos" width="30px" height="30px"></figure>
                </div>
                </div>
            <div class="Rankings">
                <div class="ranking">
                    <p class="title">Rankings</p>
                    <figure> <img src="./assets/image/ranking.png" alt="ranking logos" width="30px" height="30px"></figure>
                </div>
  
                    
                    
            </div>
        </section>
       
    </div>
</main> 

