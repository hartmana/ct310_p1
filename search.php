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



            <?php include 'navigation.php'; php?>
<!-- this is the top div, with search form-->
            <div id = "left">
                <h2>User Search</h2>
                <!-- this form saves the info into a file for now -->
                <form action = "search_form.asp" method ="post">
                Find your friend : <input type="text" size="20" name="searchtoken">
                <input type="submit">
                </form>
            </div>
            
<!-- this is the bottom div, with a list of all current user names and pictures in the unordered list -->
            <div id="right">
            <h3 id = "members title"> Current Members </h3>
            <p>These could be your friends</p>
            <ul id "memberlist">
                <li id = "bill"> Bill Gates
                <img src="/picturelibrary/bill.jpg" alt = "Bill Gates"/>
                </li>
                <li id = "steve"> Steve Jobs
                 <img src="/picturelibrary/jobs.jpg" alt = "Steve Jobs"/>
                </li>
                <li id = "woz"> Bill Wozniak
                <img src="/picturelibrary/woz.jpg" alt = "Bill Wozniak"/>
                
                <li id = "tesla"> Nikola Tesla
                <img src="/picturelibrary/tesla.jpg" alt = "Nikola Tesla"/>
                
                <li id = "jro"> Julius Robert Oppenheimer
                <img src="/picturelibrary/jro.jpg" alt = "Julius Robert Oppenheimer"/>
                
                <li id = "alan"> Alan Turing
                <img src="/picturelibrary/alan.jpg" alt = "Alan Turing"/>
                
                <li id = "rock"> A Rock
                <img src="/picturelibrary/rock.jpg" alt = "Rock"/>
                
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
</html>
