<?php
include 'db.php';
include 'admin_header_part.php';
?>
            <div class="rightheader"></div>
            <div class="selected-appointment-title"> <h1># Approved Appointments</h1></div>
            <div class="selected-appointment-data">
                <?php
                    $sql="SELECT * FROM tbldental where appointment_status=1 order by ID desc";
                    $result=mysqli_query($con,$sql);
                    echo "<table>
                                <tr>
                                    <th>Date Received</th>
                                    <th>Preferred date & time</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>";
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){

                            $d=strtotime($row['date_time']);
                            $getdate_received=date("m/d/Y h:i a",$d);

                            $d1=strtotime($row['appointmentdate']);
                            $getprefdatettime=date("m/d/Y",$d1);

                            $a = $row['appointmenttime'];
                            $time_pref="8:00 am";
                            switch($a){
                                case 8:
                                    $time_pref= "8:00 am";
                                    break;
                                case 9:
                                    $time_pref= "9:00 am";
                                    break;
                                case 10:
                                    $time_pref= "10:00 am";
                                    break;
                                case 11:
                                    $time_pref= "11:00 am";
                                    break;
                                case 13:
                                    $time_pref= "1:00 pm";
                                    break;
                                case 14:
                                    $time_pref= "2:00 pm";
                                    break;
                                case 15:
                                    $time_pref= "3:00 pm";
                                    break;
                                case 16:
                                    $time_pref= "4:00 pm";
                                    break;
                            }
                            $id=$row['ID'];
                            echo "<tr>";
                            echo "<td>";
                            echo $getdate_received ;
                            echo "</td>";
                            echo "<td>";
                            echo $getprefdatettime . " " .$time_pref ;
                            echo "</td>";                            
                            echo "<td class='td-data-name'>";
                            echo "<span>".$row['lname']."</span>, ".$row['fname'];
                            echo "</td>";
                            echo "<td><a href='#' id='$id' class='vwdetails'> view </a></td>";
                            echo "</tr>";
                            
                        }
                    }
                ?>
            </div>

<?php
include 'admin_footer_part.php';
?>
        