<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Maaterial Icons -->
    <link href = "https://fonts.googleapis.com/iconfamily=Material+icons+Sharp" rel="stylesheet">

   <!-- STYLE SHEET -->
    <?php
      session_start();
      require_once('userheader.php');
      require_once('config/db_connection.php');
    ?>

    <title>
        Front End Designer
    </title>

</head> 

<body> 

    
        <!------------------------------- START OF MAIN SECTION -------------------------->
        <main>
            <h1>ONLINE BLOOD BANK MANAGENT SYSTEM </h1>
            <H3>WELCOME <?php 
                if(isset($_SESSION['role']) && isset($_SESSION['name']))
                {
                    echo strtoupper($_SESSION['role']) . ': ' . $_SESSION['name'];
                }
                else
                {
                    echo 'USER';
                }
            ?></H3>

            <!----- MINI Box start ------>
              <div class="insights">
                <div class="mid-boxes">
                    <div class='middle'>
                        <div class="left">
                            <h3>EDUCATIONAL CONTENT</h3>
                            <H1>DODOMA DAMU SALAMA</H1>
                        </div>
                    </div>
                    <div class = "text-muted"> In Dodoma, blood collection, storage and management is 
                      an activity is carried out by Dodoma Damu Salama branch of Tanzania 
                      National Blood Transfusion Service (NBTS) under the Ministry of Health (MOH). 
                    </div>
                    <div class="link">
                    <a href="EducationalPage1.php"> READ MORE </a>
                    </div>
                </div>

                <!----- MINI Box end ------>
                
                <!----- MINI Box start ------>

                <div class="mid-boxes">
                    <div class='middle'>
                        <div class="left">
                            <h3>EDUCATIONAL CONTENT</h3>
                            <H1>ABOUT BLOOD DONNATION</H1>
                        </div>
                    </div>
                    <div class = "text-muted"> We donate to help people who need a blood transfusion. 
                The act of blood donation produces a feeling of goodwill and a wonderful sense of achievement
                The gift of life means the difference between life and death for someone. 
                    </div>
                    <div class="link">
                    <a href="EducationalPage2.php"> READ MORE </a>
                    </div>
                </div>

                <!----- MINI Box end ------>
                
              </div>

            <!----- MINI Box end ------>

            <!----- MINI Box start ------>
            <div class="insights">
                <div class="mid-boxes">
                    <div class='middle'>
                        <div class="left">
                            <h3>EDUCATIONAL CONTENT</h3>
                            <H1>BE AWERE ABOUT BLOOD DONATION</H1>
                        </div>
                    </div>
                    <div class = "text-muted"> Before your blood donation:
                Get plenty of sleep the night before you plan to donate.
                Eat a healthy meal before your donation. ...
                Drink plenty of water before the donation.
                    </div>
                    <div class="link">
                    <a href="EducationalPage3.php"> READ MORE </a>
                    </div>
                </div>


                <!----- MINI Box end ------>
            </div>

            <!----- TABLE START ------>

                <!----- TABLE END ------>

        </main>

        <!------------------------------- START OF MAIN SECTION -------------------------->
    <right>

      <div class="top">
        <button id="top-right-btn">
          <div class="btn-name">

          <?php  
              if(isset($_SESSION['role']) && isset($_SESSION['name']))
              {
                  echo 'WELCOME ' . strtoupper($_SESSION['role']) . ': ' . $_SESSION['name'];
              }
              else
              {
                echo 'ACCOUNT';
              }
          ?>
          </div>
          
        </button>
        <div class="profile-photo">
          <img src="./images/profile.png" >
        </div>
      </div>
    <!--- end of top ----->

    <div class="feedbacks">
      <h2>FEEDBACKS</h2>
      <div class="user-comment">
        <div class="messages">
          <p> <b> John Prosper </b>  I like that one , i think this its make one to donnate easly and to get her information </p>
          <small> 2022-04-24 </small>
        </div>
      </div><div class="user-comment">
        <div class="messages">
          <p> <b> Haji Abdi </b>  i like to say that , may information have some erros, prease try to fix this </p>
          <small> 2022-06-12 </small>
        </div>
      </div><div class="user-comment">
        <div class="messages">
          <p> <b> Winnie John </b>  System yenu sijaelewa inatoaje talifa kwa mteja </p>
          <small> 2022-07-12 </small>
        </div>
      </div>
    </div>

    <div class="events">
      <h2>EVENTS</h2>
      <div class="user-comment">
        <div class="messages">
          <p> <b> NULL </b>  The ARE NO EVENTS IN THE MEAN TIME </p>
          <small> No time </small>
        </div>
      </div>
    </div>

  </div>
</right>
</body>

</html>
