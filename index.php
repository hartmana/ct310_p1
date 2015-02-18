<?php

    if (empty($_SERVER['QUERY_STRING'])) {
        $pageName="index";
    } else {
        $pageName=basename($_SERVER['QUERY_STRING']);
    }

    include 'header.php';
php?>

    <!-- Start of page Body -->
    <body>

        <div id="wrapper">

            <div id="header">
                <p>Social Network</p>
            </div>

            <?php include 'navigation.php'; php?>

            <div class="content">
                <p>Here is some content in the "content" div class inside the main body.</p>
            </div>

            <?php include 'footer.php'; php?>

        </div>

    </body>
</html>
