<?php

    include 'header.php';
    include 'navigation.php';

php?>

<!-- this is the left div, with content-->
            <div class="content" id = "left">
                <h2> Welcome to Creepr</h2>
                <p>A social network where you can see what your friends are doing at all times.
                <br>
                <!-- filler text -->
                Something in latin said:"
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sollicitudin, leo ac cursus semper, nisi nisi dignissim metus, quis blandit felis lacus posuere metus.
                Sed dignissim leo sed turpis convallis, vel suscipit felis bibendum. Vestibulum est velit, congue ac orci eu, vehicula laoreet odio.
                Ut ultrices mi vel sollicitudin tincidunt. Etiam sodales tortor ut nulla ullamcorper, vitae blandit elit tempus. Etiam non est libero.
                "</p>
            </div>
            
<!-- this is the right div, with current user names and pictures in the unordered list -->
            <div class ="userlist" id = "right">
            <h3 id = "membersTitle"> Members </h3>
            <p>These could be your friends</p>
            <ul id = "memberlist">
                <li id = "bill"> Bill Gates
                <a href="user.php?id=1"
                <img src="/picturelibrary/bill.jpg" alt = "Bill Gates"/>
               </a>
                </li>
                <li id = "steve"> Steve Jobs
                <a href ="user.php?id=2"
                 <img src="/picturelibrary/jobs.jpg" alt = "Steve Jobs"/>
                </li>
                </a>
                <li id = "woz"> Bill Wozniak
                <a href = "user.php?id=3"
                <img src="/picturelibrary/woz.jpg" alt = "Bill Wozniak"/>
                </a>
                </li>
            </ul>
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
