<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/style.css">
    <title>All Badges</title>
</head>
<body>
    <main class="allBadges">
        <div class="container h2Badges"><h2>All users</h2></div>
        <section class="container displayedBadges">
                <div>
                    <?php include_once('../components/functions.php'); 
                    
                    getAllBadges(); ?>
                </div>
        </section>
    </main>
</body>
</html>