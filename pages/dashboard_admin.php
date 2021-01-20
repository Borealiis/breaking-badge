<!--TODO: (Aurore) remplacer variables entre crochets par variables php -->

<main class="mainContainerDashboard">
    <div class="divContainerDashboard">
    <section class="container sidebar">
        <div class="welcome">Welcome, [USER]</div>
        <div class="sidebarBadgeInfo">
            <div class="badgeNotif">
                <p>No news... Yet</p>
            </div>
            <div class="myBadges">
                <p>My Badges:</p>
                <p>You have [NUMBER] badges so far: </p>
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
        <section class="container userHeader">
<!--            <img src="" alt="" class="userImage">-->
            <p>[IMAGE]</p>
            <p>USERNAME</p>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam corporis culpa possimus quod! Adipisci autem id inventore non perferendis quod repudiandae sint totam. Necessitatibus numquam obcaecati omnis ut voluptatum.</p>
        </section>
        <section class="container badgesAndUsers">
            <div class="viewUsers">

                <a href="" target="_blank"><input type="button" value="All users" class="seeAllUsers"></a>

                <div class="mostRecentUsers">
                    <p class="subtitle">Last users</p>
                    <ul>
                        <li>USER1</li>
                        <li>USER2</li>
                        <li>USER3</li>
                    </ul>
                </div>
            </div>
            <div class="viewBadges">
                <a href="" target="_blank"><input type="button" value="All Badges" class="seeAllBadges"></a>
                <a href="" target="_blank"><input type="button" value="+" class="addBadge"></a>

                <div class="recentBadges">
                    <p class="subtitle">Last badges</p>

                </div>
            </div>
        </section>

        <section class="container otherUsersDo">
            <p>BADGES OTHER USERS</p>
        </section>
    </div>
    </div>
</main>