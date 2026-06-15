<?php
/**
 * EducationalPage3.php
 *
 * Educational page covering blood donation eligibility and deferral criteria.
 *
 * Key functionality: Lists behavioral and medical conditions that may
 * defer or permanently disqualify individuals from donating blood.
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
          <h1> BE AWERE ABOUT BLOOD DONATION </h1>
          <h3>You have to give blood</h3>
          <p class="educ-text">If you engaged in “at risk” sexual activity in the past 12 months
                
                Individuals with behaviours below will be deferred permanently: 
                
                Have ever had a positive test for HIV (AIDS virus)
                
                Have ever injected recreational drugs.
                
                 In the national blood donor selection guidelines, there are more behavior eligibility criteria. Criteria could be different in different countries.
                
                Pregnancy and breastfeeding:
                
                Following pregnancy, the deferral period should last as many months as the duration of the pregnancy.
                
                It is not advisable to donate blood while breast-feeding. Following childbirth, the deferral period is at least 9 months (as for pregnancy) and until 3 months after your baby is significantly weaned (i.e. getting most of his/her nutrition from solids or bottle feeding</p>
              
                  </p>
        </div>
        
        <div class="educ-img">
        <img src="images/bloodConnection.gif">
        </div>

    </div>

    <div class="educ-section">
        <div class="educ-img">
        <img src="images/Other Images/drug.jpeg">
        </div>

        <div class="educ-text">
          <h1> BEFORE BLOOD DONATION </h1>
          <h3>What to do before blood donation?</h3>
          <p class="educ-text">Before your blood donation:
                Get plenty of sleep the night before you plan to donate.
                Eat a healthy meal before your donation. ...
                Drink plenty of water before the donation.
                Check to see if any medications you are taking or recently took would prevent you from donating. ...
                Wear a shirt with sleeves that can be rolled up
                  </p>
        </div>
        
    </div>

    <div class="educ-section">
        <div class="educ-text">
          <h1> AFTER BLOOD DONATION </h1>
          <h3>What to do after your blood donation:</h3>
          <p class="educ-text">Drink extra fluids,
              Avoid strenuous physical activity or heavy lifting for about five hours,
              If you feel lightheaded, lie down with your feet up until the feeling passes,
              Keep your bandage on and dry for the next five hours
                  </p>
        </div>
        
        <div class="educ-img">
        <img src="images/fact05.png">
        </div>

    </div>

  </main>
  <right>
</right>
    
</body>
</html>