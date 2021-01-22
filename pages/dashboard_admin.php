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
            <div class="notes">
                <p>Notes:</p>
                <textarea name="" class="notecontent" cols="30" rows="10" ></textarea>
        
            </div>
        </div>
    </section>

    <div class="dashboardInfo">



        <section class="container userHeader headerBoxAdmin">
<!--            <img src="" alt="" class="userImage">-->  
            <div class=" boxAfficheImage">
                <img class="imgAdminTest" src="assets\image\admin.jpg" alt="">
              
            </div>

            <div class="columnHeaderBoxAdmin boxAfficheUser blur marginTop">
                <div class="titreBox">Profile</div > 
                <div class="alignTextAdminBox" >
                    <div class="profileName"><?php echo $_SESSION['pseudo']; ?></div>
                    <div class="profileEmail"><?php echo $_SESSION['email']; ?></div>
                </div>

    
            </div>
            <div class="columnHeaderBoxAdmin boxAfficheUser marginTop">
                <p class="description titreBox">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam corporis culpa possimus quod! Adipisci autem id inventore non perferendis quod repudiandae sint totam. Necessitatibus numquam obcaecati omnis ut voluptatum.</p>
            </div>
        </section>

        <section class="container badgesAndUsers">
            <!-- <a href="" target="_blank"><input type="button" value="All users" class="seeAllUsers"></a> -->
                <div class="boxAfficheUser">
         
                <div class="titreBox flexBoxAfficheUser"><input type="button" class="seeAllBadges" value="All Users" id="boutonAfficheAllUsers"></input><div><?php include('pages/addBadges.php') ?></div> </div>

                <!-- <div class="boxInsideAfficheUser">
                    <div class="flexEndAddBadges">
                        
                    </div>
                
                </div>   -->

                <div class="viewBadges">
                    </div><div id="allUserModal"><?php include('pages/all_users.php') ?></div>
                    
                    
                    
                    <div class="recentBadges">
                        
                        <!-- <p class="subtitle">Last badges</p> -->
                    </div>

                    <div class="titreBox flexBoxAfficheUser"><div><input type="button" value="All Badges" class="seeAllBadges" id="seeAllBadges"></div> <div>

                    <a><input type="button" value="New Badge" class="addBadge" id="addBadge"></a>

                </div></div> 
                <div class="boxAllBadges" id="boxAllBadges"><?php include('pages/all_badges.php') ?></div>
                <div id="badge_manager" class="badge_manager"><?php include('pages/badge_manager.php') ?></div>

                </div>
            </section>
            
            <section class="container otherUsersDo ">
           
            <div class="titreBox ">Credits</div>
            <div class="boxInsideAfficheUser">
                <p>A project made by the best team:</p>
                <p>Audrey, Aurore, Florian, Richard</p>
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
<!-- <div id="allUserModal">
    <?php
    //  include('pages\all_users.php') 
     ?>
</div> -->
<script src="assets\anim.js"></script>