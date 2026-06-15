<?php
    
    require_once('config/db_staff_connection.php');
    require_once('staffheader.php');

?>


<body>

<?php
    if(isset($_POST['processrequest']))
    {
        $reqid = $_POST['id'];

        $sql = "SELECT ReqStatus FROM bloodrequest WHERE ReqID = ?";

        $statement = $conn->prepare($sql);

        $statement->execute([$reqid]);

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        if($result)
        {
            foreach($result as $data)
            {
                    $sql = "UPDATE bloodrequest SET ReqStatus = ? WHERE ReqID = ?";
                                        
                    $statement = $conn->prepare($sql);

                if($data['ReqStatus'] == "NEW")
                {
                    $result = $statement->execute(['PROCESSING',$reqid]);
                }
                elseif ($data['ReqStatus'] == 'PROCESSING') 
                {
                    //$result = $statement->execute(['DELIVERED',$reqid]);
                }
                elseif ($data['ReqStatus'] == 'DELIVERED') 
                {
                    //$result = $statement->execute(['DELIVERED',$reqid]);
                }
                    header('location: hospreqdata.php');
            }
        }
    }
?>
    <div class="container">
        <main>
        <div class="table-design">
<h2> Hospital Blood Request <b>   (LITERS / LITRES) </b> </h2>
        <table > 
<thead>
            <tr>
                <TH>Request ID</TH>
                <th>A +</th>
                <th>A -</th>
                <th>B +</th>
                <th>B -</th>
                <th>AB +</th>
                <th>AB -</th>
                <th>O +</th>
                <th>O -</th>
                <th>Request Date</th>
                <th>Status</th>
                <th>Update Status</th>
            </tr>
</thead>
                    </tbody>

            <?php // Pull all the accounts in the user accounts database

                $sql = "SELECT ReqID, HospitalID, APos, ANeg, BPos, BNeg, ABPos, ABNeg, OPos, ONeg, ReqDate, ReqStatus FROM bloodrequest";

                $statement = $conn->prepare($sql);

                $statement->execute();

                $result = $statement -> fetchAll(PDO::FETCH_ASSOC);
                
                $sn=1;
                foreach($result as $data) {
            ?>
            <tr>

                <td><?php 
                $id = $data['ReqID'];
                $hospid = $data['HospitalID'];

                $sql = "SELECT HospitalName, RegistrationState FROM hospitals WHERE HospitalID = ?";

                $statement = $conn->prepare($sql);

                $statement->execute([$hospid]);

                $result = $statement-> fetchAll(PDO::FETCH_ASSOC);

                if($result)
                {
                    foreach($result as $namedata)
                    {
                        echo $namedata['HospitalName'];
                    }
                }
                
                ?> </td>

                <td><?php echo $data['APos']; ?> </td>
                    
                <td><?php echo $data['ANeg']; ?> </td>
                    
                <td><?php echo $data['BPos']; ?> </td>
                    
                <td><?php echo $data['BNeg']; ?> </td>
                    
                <td><?php echo $data['ABPos']; ?> </td>

                <td><?php echo $data['ABNeg']; ?> </td>
                    
                <td><?php echo $data['OPos']; ?> </td>
                    
                <td><?php echo $data['ONeg']; ?> </td>

                <td><?php echo $data['ReqDate']; ?> </td>

                <td><?php echo $data['ReqStatus']; ?> </td>

                <td>
                    
                            <form action="hospreqdata.php" method="post"> 
                                <INPUt type="hidden" value=<?php echo $id ?> name="id" ></INPUt>
                                <button type="submit" name="processrequest"> 
                                    <?php 
                                        if($data['ReqStatus'] == "NEW" )
                                        {
                                            ECHO "PROCESS";
                                        }
                                        else if($data['ReqStatus'] == "PROCESSING")
                                        {
                                            ECHO "WAITING DELIVERY";
                                        }
                                        else if($data['ReqStatus'] == "DELIVERED")
                                        {
                                            ECHO " DELIVERED";
                                        }
                                            
                                    ?> 
                                </button>
                            </form>    
                            
                </td>
                </tr>  
                    <?php

                        }

                    ?>
                            <tr>
                                <td>
                                    <b> TOTAL </b>
                                </td>
                                <td>
                                    <b><?php echo $data['APos']; ?></b>
                                </td>
                                <td>
                                    <b><?php echo $data['APos']; ?></b>
                                </td>
                                <td>
                                <b><?php echo $data['APos']; ?></b>
                                </td>
                                <td>
                                <b><?php echo $data['APos']; ?></b>
                                </td>
                                <td>
                                <b><?php echo $data['APos']; ?></b>
                                </td>
                                <td>
                                <b><?php echo $data['APos']; ?></b>
                                </td>
                                <td>
                                <b><?php echo $data['APos']; ?></b>
                                </td>
                                <td>
                                <b><?php echo $data['APos']; ?></b>
                                </td>
                                <td>
                                <b> TODAY </b>
                                </td>
                            </tr>
                    </tbody>
            <?php


            ?>
            
        </table>

        <?php
            if(isset($_POST['savechanges']))
            {
                echo "saving changes";
            }
        ?>
            
        </div>
            </div>
            </main>
        </div>
            </body>