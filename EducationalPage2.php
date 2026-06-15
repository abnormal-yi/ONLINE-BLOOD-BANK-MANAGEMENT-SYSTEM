<?php
/**
 * EducationalPage2.php
 *
 * Educational page promoting the importance of blood donation.
 *
 * Key functionality: Provides static content on why individuals should
 * donate blood and the positive impact of donation on saving lives.
 */
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
      require_once('userheader.php');
      require_once('config/db_connection.php');
    ?>
    
</head>
<body>

  <main>
    <div class="educ-section">
        <div class="educ-text">
          <h1> ABOUT BLOOD DONNATION </h1>
          <h3>Why Donate?</h3>
          <p class="educ-text">
              <p class="ipsum_text">We donate to help people who need a blood transfusion. 
                The act of blood donation produces a feeling of goodwill and a wonderful sense of achievement
                The gift of life means the difference between life and death for someone. 
                One day that someone may be a close relative, personal friend, a loved one or yourself.
                  </p>
        </div>
        
        <div class="educ-img">
        <img src="images/img3.jpg">
        </div>

    </div>

    <div class="educ-section">
        <div class="educ-img">
        <img src="images/Other Images/after.jpg">
        </div>

        <div class="educ-text">
          <h1> WHO DONATES?? </h1>
          <h3>basic requirements</h3>
          <p class="educ-text">>Most people can give blood if they are in good health. There are some basic requirements one  need to fulfill in order to become a blood donor.  
            Below are some basic eligibility guidelines:
                <H2>Age:</H2> You are aged between 18 and 65

       year-olds to donate provided that they fulfil the physical and hematological criteria required and that appropriate consent is obtained.
                
                 In some countries, regular donors over the age of 65 may be accepted at the discretion of the responsible physician. The upper age limit in some countries are 60.
                 <H3> Weight: </H3>You weigh at least 50 kg.   
                 <H4>Health: </H4>
                 You must be in good health at the time you donate.
                 
                 You cannot donate if you have a cold, flu, sore throat, cold sore, stomach bug or any other infection.
                 
                 If you have recently had a tattoo or body piercing you cannot donate for 6 months from the date of the procedure.  If the body piercing was performed by a 
                 registered health professional and any inflammation has settled completely, you can donate blood after 12 hours.
                 
                 If you have visited the dentist for a minor procedure you must wait 24 hours before donating; for major work wait a month.
                 
                 You must not donate blood If you do not meet the minimum haemoglobin level for blood donation

                
                  </p>
        </div>
        
    </div>

    <div class="educ-section">
        <div class="educ-text">
          <h1> THE IMPORTANCE OF BLOOD </h1>
          <h3>How Your Blood Can Help</h3>
          <p class="educ-text">It carries oxygen to all parts of the body and removes carbon dioxide,
                  It provides nutrients to the body’s cells,
                  It provides defence against diseases,
                  It replaces blood lost from accidents and child birth, I would like to encourage all of you to become involved and committed to saving lives.
                  </p>
        </div>
        
        <div class="educ-img">
        <img src="images/img8.jpg">
        </div>

    </div>

  </main>
  <right>
</right>
    
</body>
</html>