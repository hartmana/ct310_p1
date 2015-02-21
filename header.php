<!DOCTYPE html>

<html>
    <head>
        <?php

            if (empty($_SERVER['REQUEST_URI']))
            {
                $pageName="index.php";
            }
            else
            {
                $pageName=basename($_SERVER['REQUEST_URI']);
            }

            // var for actual page name
            $page = "";

            // SWITCH on pageName to set title (and perhaps for other reasons)
            switch($pageName)
            {
                case "index.php":
                    $page = "Home";
                    break;
                case "user.php":
                    // TODO: get actual user name
                    $page = "User Page";
                    break;
                case "search.php":
                    $page = "Search";
                    break;
                default:
                    $page = "BROKEN";
                    break;
            }

            echo "<title> Social Network | $page </title>\n";

        php?>

        <link href="css/master.css" rel="stylesheet" type="text/css" />
        <meta http-equiv="Content-Type"
              content="text/html; charset=utf-8" />
        <title>Creepr</title>
        <meta name ="author" content = "Caity Corcoran, Antony Di Rocco, Peter Fiorella, Aaron Hartman">
        <meta name ="description" content = "group 12's social media site for CT310 P1">
        <meta name ="keywords" content = "social network friends">
    </head>


