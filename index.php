<?php
/**
 * Created by IntelliJ IDEA.
 * User: ahrtmn
 * Date: 2/18/15
 * Time: 10:31 AM
 */
    if (empty($_SERVER['QUERY_STRING'])) {
        $pageName="index";
    } else {
        $pageName=basename($_SERVER['QUERY_STRING']);
    }
    $file="html/".$name.".html";
    if (is_readable($file)) {
        include 'header.php';
        readfile($file);
    } else {
        header("HTTP/1.0 404 Not Found");
        exit;
    }
php?>

<div class="content">
    <p>Here is some content.</p>
</div>

<?php include 'footer.php'; ?>
