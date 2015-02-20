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
<!-- this is the left div, with content-->
            <div class="content" id = "left">
                <h3> Search Page</h3>
                <p>Here is some content in the "content" div class inside the main body.
                <br>
                </p>
            </div>
            
<!-- this is the right div, with current user names and pictures in the unordered list -->
            <div class ="userlist" id = "right">
            <h3 id = "members title"> Members </h3>
            <p>These could be your friends</p>
            <ul id "memberlist">
                <li id = "bill"> Bill Gates
                <img src="http://skeptoid.com/blog/wp-content/uploads/2013/12/bill-gates.jpeg" alt = "Bill Gates"/>
                </li>
                <li id = "steve"> Zombie Steve Jobs
                 <img src="http://blogs.kqed.org/stateofhealth/files/2011/11/Jobs_2003_rev1.jpg" alt = "Steve Jobs"/>
                </li>
                <li id = "woz"> Bill Wozniak
                <img src="https://blog.adafruit.com/wp-content/uploads/2010/12/steve_wozniak.jpg" alt = "Bill Wozniak"/>
                
                </li>
            <ul>
            </div>
            
<!-- this is an optional div if you wanted to for example put the user pictures in their own column -->
      <!--  <div class = "userpic" id = "upic">
            <img src="http://skeptoid.com/blog/wp-content/uploads/2013/12/bill-gates.jpeg" alt = "Bill Gates"/>
                <br>
            <img src="http://blogs.kqed.org/stateofhealth/files/2011/11/Jobs_2003_rev1.jpg" alt = "Steve Jobs"/>
                <br>
            <img src="https://blog.adafruit.com/wp-content/uploads/2010/12/steve_wozniak.jpg" alt = "Bill Wozniak"/>
            </div>-->
            
            <?php include 'footer.php'; php?>

        </div>

    </body>
</html>
