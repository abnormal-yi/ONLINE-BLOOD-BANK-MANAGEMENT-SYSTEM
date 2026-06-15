<html>
    <head>
        <?php
            require_once('config/db_staff_connection.php');
            require_once('staffheader.php');
        ?>
        <title>
            Donnations
        </title>
    </head>

    <?php
      if(isset($_POST["savedata"]))
      {
        $fnamedb = $_POST['firstname'];
        $lnamedb = $_POST['lastname'];
        $emaildb = $_POST['usermail'];
        $phonenumberdb = $_POST['phonenumber'];
        $genderdb = $_POST['gender'];
        $doddb = date('y,m,d');
        $poddb = $_POST['pod'];
        $districtdb = $_POST['dis'];
        $streetdb = $_POST['str'];

        if($genderdb == "Gender")
        {
            echo "Please select gender.";
        }
        else {
          $data = [ $fnamedb, $lnamedb, $emaildb, $phonenumberdb, $genderdb,$doddb,$poddb, $districtdb, $streetdb ];

          $sql = "INSERT INTO donnations(FirstName, LastName, Email, PhoneNumber, Gender, DateOfDonnation, PlaceOfDonnation, District, Street) 
          VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
          
          // commit the transaction
          $stmt = $conn->prepare($sql);

          // Execute the sql statement
          $result = $stmt->execute($data);

          if($result)
          {
            echo 'saved' ;
          }
          else
          {
            echo ' Error ';
          }
        }
      }
   ?>

    <body>
      <main>
        
        <h2>ADD DONNATION INFORMATION</h2>
          <div class="form">
            <form action="incomingblood.php" method="post">
              <h2>UNREGISTERRED DONNORS.</h2>
              <div class="textbox">
              <input type="text" placeholder="Donator's First Name" name="firstname" required>
              </div>

              <div class="textbox">
              <input type="text"  placeholder="Last Name" name="lastname" required> 
              </div>

              <div class="textbox">
              <input type="email"  placeholder="Email" name="usermail">
              </div>

              <div class="textbox">
              <input type="text"  placeholder="Phone Number" name="phonenumber" required>
              </div>
              
              <div class="textbox">
                <SELECT SIZE="1" NAME="gender" required>
                <OPTION VALUE="Gender" SELECTED>-- Gender --</OPTION>
                <OPTION VALUE="Male" >Male</OPTION>
                <OPTION VALUE="Female">Female</OPTION>
                </SELECT>
              </div>

              <div class="textbox">
              <input type="date"  placeholder="Phone Number" name="dod" required>
              </div>

              <div class="textbox">
              <input type="text"  placeholder="Place Of Donnation" name="pod" required>
              </div>

              <div class="textbox">
              <input type="text"  placeholder="District" name="dis" required>
              </div>

              <div class="textbox">
              <input type="text" placeholder="Street" name="str" required>
              </div>

              <div class="textbox">
              <button type="submit" name="savedata" value="SAVE"> SAVE DATA </button>
              </div>

            </form>
          </div>
    </main>
      </div>
    </body>
</html>