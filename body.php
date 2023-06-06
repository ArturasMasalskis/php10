<main>
    <!--------------------- Main picture and sectio about ----------------->
    <section class="main_img_box" id="home">
        <img class="main_img" src="images/MainPicture.jpeg" alt="Main Picture ">

    </section>
    <section class="about">
        <div class="about_green">
            <strong>Join our gaming</strong> <br>
            <strong>community, and become</strong> <br>
            <strong>a member.</strong> <br>
            <strong>Enjoy playing Age of</strong> <br>
            <strong>Wonders with people</strong> <br>
            <strong>around the World</strong>
        </div>


        <div class="about_box_video">
            <h1><strong>Age of Wonders 4</strong></h1>
            <em>Age of Wonders is a turn-based game combining the best elements</em><br>
            <em>of strategy, adventure, and role-playing.</em><br>
            <em>12 unique fantasy races, over 50</em><br>
            <em>different heroes with upgradable abilities, dozens of spells, and scores</em><br>
            <em>of locations to explore.</em>
        </div>

        <div class="videoBox">
            <iframe width="460" height="220" src="https://www.youtube.com/embed/WfeBgpTh7RY" frameborder="0"
                style="border-radius: 5px" allowfullscreen></iframe>
        </div>

        <div class="text_about" id="text_about">
            <h3><strong>About</strong></h3>
            <p>Age of Wonders 4 is a grand strategy experience.However, one session can take as long as 150 to 1000
                turns and one turn can take anything from a few minutes to a few hours.If you play on the server with a
                maximum numbers of players on nine. It can take forever to take a trun. Games can last anything from a
                few weeks to a few month or on massive maps even years. Our gaming community tries to connect you with
                people who have similar playtimes.
                Players with a lot of time on thier hands can play with members who have a lot of time to play the game
                and players with little time can find similarly time-constrained players in our community. No longer
                will you have to wait for a few days just for the server to take one turn and in reverse if you have
                little time to play no longer will you be pressured to take a quick turn by other players. Become a
                member and start looking for the perfect Age of Wonders gaming session.
            </p>
        </div>
    </section>
    <!----------------------- sing up crossplay and members section --------------------------------------->
    <section class="singup_crossplay_members_section">
        <div class="singup_tab">
            <h5>Sign Up</h5>
            <button class="singup_button"> <a href="signup.php">Now</a></button>
        </div>
        <div class="crossplay_container">
            <div class="crossplay_image">
                <img src="images/crossplay.png" alt="Crossplay">
            </div>
            <div class="text_crossplay">
                <p><strong>Crossplay is now available on servers</strong></p>
            </div>
        </div>
        <div class="members_box" id="members_box">
            <div class="members">
                <h4><strong>Members</strong></h4>
            </div>
            <div class="users" >
            <?php 

            include 'users.php';

            ?>
                
            </div> 
        </div>
    </section>
    <!--------------------- whats next text box ------------------------>
    <section class="next_box">
        <div>
            <h3 class="text_signed_up"><strong>I've just signed up,</strong></h3>
            <h2 class="text_whats_next"><strong> What's next?</strong> </h2>
        </div>
        <div class="box_text_invite">
            <em>
                You will reveive an invite in your email box to our private discord shortly and will be able to interact
                with the
                server calendar below. Pick a server from the calendar: <strong>yellow</strong> for slow casual play,
                <strong>orange</strong> for regular, and <strong>red</strong> for intense. Pick a server you would like
                to play in, note you can only pick one server to play at one time. The calendar will show the date the
                play session will start. All you have to do is join the server on that date, the place in the server
                will be reserved for you and you will recieve email with the password to the server and reminder. Also,
                you will be able to find the channel of same server play session in the private discord. <h3 class="text_have_fun"><strong>Now
                        enjoy and have fun.</strong></h3>
            </em>
        </div>
    </section>
    <!------------------------- calendar section ------------------------------------>
    <section class="calendar_section" id="calendar">
        <div>
            <img class="calendar_img" src="images/calendar2.jpg" alt="calendar">
        </div>
    </section>
    <!----------------------- photo gallery section ---------------------------------->
    <section class="gallery_container">
    <?php 

        include 'gallery.php';

    ?>   
    </section>
</main>