<!--TODO: (Aurore) remplacer variables entre crochets par variables php -->

<main class="mainContainerDashboard">
    <div class="divContainerDashboard">
    <section class="container sidebar">
        <div class="welcome">Welcome, <?php echo $_SESSION['pseudo']; ?></div>
        <div class="sidebarBadgeInfo">
            <div class="badgeNotif">
                <p>No news... Yet</p>
            </div>
            <div class="myBadges">
                <div class="tuile">
                    <div class="titreBox">My Badges:</div>
                    <div class="marqWhite">
                         <p>You have  <?php  amountBadges(); ?>  badges so far: </p>
                    </div>
                </div>
                
                
            </div>

            <div class="badgesToGet">
            </div>

            <!--TODO: (aurore) progression using js or php-->
            <div class="myBadgesProgress">
                <p>Badge progress: </p>
                <div class="progressBackground">
                    <div id="badgeProgressBar" class="progressColor">50%</div>
                </div>
            </div>
        </div>
    </section>

    <div class="dashboardInfo">



        <section class="container userHeader headerBoxAdmin">
<!--            <img src="" alt="" class="userImage">-->  
            <div class=" boxAfficheImage">
                <img class="imgAdminTest" src="assets\image\admin.jpg" alt="">
              
            </div>

            <div class="columnHeaderBoxAdmin boxAfficheUser blur ">
                <div class="titreBox">Profile</div > 
                <div class="alignTextAdminBox" >
                    <div><?php echo $_SESSION['pseudo']; ?></div>
                    <div><?php echo $_SESSION['email']; ?></div>
                </div>

    
            </div>
            <div class="columnHeaderBoxAdmin boxAfficheUser">
                <p class="description titreBox">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam corporis culpa possimus quod! Adipisci autem id inventore non perferendis quod repudiandae sint totam. Necessitatibus numquam obcaecati omnis ut voluptatum.</p>
            </div>
        </section>

        <section class="container badgesAndUsers">
            <!-- <a href="" target="_blank"><input type="button" value="All users" class="seeAllUsers"></a> -->
                <div class="boxAfficheUser">
         
                <div class="titreBox flexBoxAfficheUser">Last users <button id="boutonAfficheAllUsers">All Users</button></div>
                <div class="boxInsideAfficheUser">
                    <div class="flexEndAddBadges">
                        <div><?php include('pages/addBadges.php') ?></div>
                    </div>
                    
                    <ul>
                    <?php
                        getAllUsers();
                    ?>
                    </li>   
                    </ul>
                </div>   
                <div class="viewBadges">
                    </div><div id="allUserModal"><?php include('pages/all_users.php') ?></div>
                    <a href="" target="_blank"><input type="button" value="All Badges" class="seeAllBadges"></a>
                    <a href="" target="_blank"><input type="button" value="+" class="addBadge"></a>
                    
                    <div class="recentBadges">
                        
                        <p class="subtitle">Last badges</p>
                    </div>
                </div>
            </section>
            
            <section class="container otherUsersDo ">
           
            <div class="titreBox ">BADGES USERS</div>
            <div class="boxInsideAfficheUser">
                <!-- <table>
                <tr>
                    <td>Pseudo</td>
                    <td>Badge</td>
                </tr>
                <tr>   
                    <?php 
                        // getAllUsersBadges();
                    ?> 
                </tr>
                </table>     -->
            </div>
        
            
        </section>
    </div>
    </div>
</main>
<div id="allUserModal"><?php include('pages\all_users.php') ?></div>
<script src="assets\anim.js"></script>