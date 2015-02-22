<?php
    if (empty($_SERVER['QUERY_STRING'])) {
        $pageName="index";
    } else {
        $pageName=basename($_SERVER['QUERY_STRING']);
    }
    include 'header.php';
php?>

    <!-- Start of page Body -->
    <div id ="body">

        <div id="wrapper">

            <?php include 'navigation.php'; php?>
<!-- this is the top div, with search form-->
            <div class="form" id = "search">
                <h3> Search Page</h3>
                <!-- this form saves the info into a file for now -->
                <form action = "search_form.asp" method ="post">
                Search : <input type="text" size="20" name="searchtoken">
                <input type="submit">
                </form>
                <p>Here is some content in the "search" div class inside the search page.
                <br>
                </p>
            </div>
            
<!-- this is the bottom div, with a list of all current user names and pictures in the unordered list -->
            <div class ="userlist" id = "allmembers">
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
                
                <li id = "tesla"> Nikola Tesla
                <img src="http://upload.wikimedia.org/wikipedia/commons/7/79/Tesla_circa_1890.jpeg" alt = "Nikola Tesla"/>
                
                <li id = "woz"> Julius Robert Oppenheimer
                <img src="http://i48.tinypic.com/2hftbap.jpg" alt = "Julius Robert Oppenheimer"/>
                
                <li id = "woz"> Alan Turing
                <img src="http://cdn1.itpro.co.uk/sites/itpro/files/8/06//alan_turing.jpg" alt = "Alan Turing"/>
                
                <li id = "rockz"> A Rock
                <img src="http://upload.wikimedia.org/wikipedia/commons/c/c9/Cuff_Hill_logan_stone_2.JPG" alt = "Rock"/>
                
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

    </div>
</html>
