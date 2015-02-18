<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php

            // var for actual page name
            $page = "";

            // SWITCH on pageName to set title (and perhaps for other reasons)
            switch($pageName)
            {
                case "index":
                    $page = "Home";
                    break;
                case "user":
                    // TODO: get actual user name
                    $page = "User Page";
                    break;
                case "search":
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
    </head>
    <!-- Start of page Body -->
    <body>
        <div id="header">
            <p>Social Network</p>
        </div>

