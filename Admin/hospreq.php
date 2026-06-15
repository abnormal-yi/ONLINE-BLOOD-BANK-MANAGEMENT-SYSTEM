<?php
/**
 * File: hospreq.php
 * Purpose: Hospital blood request viewer for OBBMS admin panel.
 *
 * This page displays all blood type requests submitted by hospitals.
 * It shows the requested quantities for each blood type (A+, A-, B+,
 * B-, AB+, AB-, O+, O-) along with the request date. A total row is
 * rendered at the bottom of the table.
 */
    require_once('config/db_admin_connection.php');
    require_once('adminheader.php');
?>

<body>
    <div class="container">
        <main>
            <div class="table-design">
            <h2> Hospital Blood Request </h2>
                <table> 
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
                    </tr>

                    <?php // Fetch all blood requests from hospitals
                        $sql = "SELECT HospitalID, APos, ANeg, BPos, BNeg, ABPos, ABNeg, OPos, ONeg, ReqDate FROM bloodrequest";

                        $statement = $conn->prepare($sql);

                        $statement->execute();

                        $result = $statement -> fetchAll(PDO::FETCH_ASSOC);
                        
                        $sn=1;
                        foreach($result as $data) {
                    ?>
                    <tr>

                        <td><?php echo $data['HospitalID']; ?> </td>

                        <td><?php echo $data['APos']; ?> </td>
                            
                        <td><?php echo $data['ANeg']; ?> </td>
                            
                        <td><?php echo $data['BPos']; ?> </td>
                            
                        <td><?php echo $data['BNeg']; ?> </td>
                            
                        <td><?php echo $data['ABPos']; ?> </td>

                        <td><?php echo $data['ABNeg']; ?> </td>
                            
                        <td><?php echo $data['OPos']; ?> </td>
                            
                        <td><?php echo $data['ONeg']; ?> </td>

                        <td><?php echo $data['ReqDate']; ?> </td>

                        </tr>  
                    <?php

                        }


                        // Fetch all blood requests again for totals calculation
                        $sql = "SELECT HospitalID, APos, ANeg, BPos, BNeg, ABPos, ABNeg, OPos, ONeg, ReqDate FROM bloodrequest";

                        $statement = $conn->prepare($sql);

                        $statement->execute();

                        $result = $statement -> fetchAll(PDO::FETCH_ASSOC);
                        
                        $sn=1;



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
                            </tr>
                </table>
                    </div>
                </main>
        </div>
</body>