<?php

    if (empty($_SERVER['QUERY_STRING'])) {
        $pageName="index";
    } else {
        $pageName=basename($_SERVER['QUERY_STRING']);
    }

    include 'header.php';

    include 'navigation.php';

php?>

        <div id="wrapper">
            <div class="content">
                <p>Here is some content in the "content" div class inside the main body.</p>
            </div>
        </div>

    <?php include 'footer.php'; php?>
