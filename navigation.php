<?php

            echo "\n\t" . '<div id="nav">' . "\n";
            echo "\t\t" . '<ul>' . "\n";
            if($pageName == "index.php")
            {
                echo "\t\t\t" . '<li><div id="currentPage"><a href="index.php" alt="Homepage">Home</a></div></li>' . "\n";
            }
            else
            {
                echo "\t\t\t" . '<li><a href="index.php" alt="Homepage">Home</a></li>' . "\n";
            }

            if($pageName == "search.php")
            {
                echo "\t\t\t" . '<li><div id="currentPage"><a href="search.php" alt="Search page">Search</a></div></li>' . "\n";
            }
            else
            {
                echo "\t\t\t" . '<li><a href="search.php" alt="Search page">Search</a></li>' . "\n";
            }

            echo "\t\t" . '</ul>' . "\n";
            echo "\t" . '</div>' . "\n";



