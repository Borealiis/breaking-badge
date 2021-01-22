
  
    <?php

        if(isset($_POST['badge_tag']) && isset($_POST['badge_color']) && isset($_POST['badge_name']) && isset($_POST['badge_desc']) && isset($_POST['badge_content'])){
            createBadge();
        }
        else{
            echo '<p>Not working!</p>';
        }
    ?>  
        <div class="container h2Badges"><h2>New badge creation</h2></div>
        <section class="container displayedBadges">
                <form action="" method="post" class="displayedCreation">
                    <div>
                        <label for="cat-badge">Choose a badge category and skin:</label>
                        <select name="badge_tag" id="cat-badge">
                            <option>Options -</option>
                            <option value="success">Success</option>
                            <option value="collection">Collection</option>
                            <option value="admin">Admin</option>
                        </select>

                        <select name='badge_color' id='color-badge-success'>
                            <option>Colors -</option>
                            <option value='newbie'>LawnGreen</option>
                            <option value='gamer'>AquaMarine</option>
                            <option value='challenger'>DeepSkyBlue</option>
                            <option value='pro-gamer'>Fuchsia</option>
                            <option value='grandmaster'>Red</option>
                            <option value='crimsonsuccess'>Crimson</option>
                            <option value='cyansuccess'>Cyan</option>
                            <option value='deeppinksuccess'>DeepPink</option>
                            <option value='goldsuccess'>Gold</option>
                            <option value='indigosuccess'>Indigo</option>
                            <option value='dimgraysuccess'>DimGray</option>
                        </select>

                        <select name='badge_color' id='color-badge-collection'>
                            <option>Colors -</option>
                            <option value='bronze'>Bronze</option>
                            <option value='silver'>Silver</option>
                            <option value='gold'>Gold</option>
                            <option value='diamond'>Diamond</option>
                            <option value='californium'>Californium</option>
                            <option value='coppercollection'>Copper</option>
                            <option value='copperoxicollection'>Oxidized Copper</option>
                            <option value='ironcollection'>Iron</option>
                            <option value='mercurycollection'>Mercury</option>
                        </select>

                        <input name='badge_color' id='color-badge-admin' type='radio' value='deusex' checked>
                        <label for='deusex' id='color-badge-admin-label'value='deusex'>Rainbow</option>
                    </div>

                    <label for="badge-name">Enter a badge name: </label>
                    <input name="badge_name" id="badge-name" type="text" required>

                    <label for="badge-desc">Enter a badge description: </label>
                    <textarea name="badge_desc" id="badge-desc" required></textarea>

                    <label for="badge-content">Enter a badge content: </label>
                    <input name="badge_content" id="badge-content" type="text" required>

                    <input type="submit" value="Send new badge" class="submittedCreation">
                </form>
        </section>
        <script type="text/javascript" src="../assets/badge_manager.js"></script>

