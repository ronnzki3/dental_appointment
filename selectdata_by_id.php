<?php
require_once 'db.php';

$id=$_POST['id'];
$query="SELECT * FROM tbldental WHERE ID=$id";
$result=mysqli_query($con,$query);


if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
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
        $d=strtotime($row['date_time']);
        $getdatetime_received=date("m/d/Y h:i a",$d);

        $d1=strtotime($row['appointmentdate']);
        $getprefdatettime=date("m/d/Y",$d1);

        $get_stat=$row['appointment_status'];
        $get_curstat_text="";
        switch($get_stat){
            case 0:
                $get_curstat_text="Pending";
                break;
            case 1:
                $get_curstat_text="Approved";
                break;
            case 2:
                $get_curstat_text="Re-schedule";
                break;
            case 3:
                $get_curstat_text="Rejected";
                break;
        }
        ?>  
                <h2>APPOINTMENT DETAILS</h2>
                <input type="hidden" id="txtID" class="txtID" value="<?= $row['ID']; ?>">
                <table>
                    <tr>
                        <td class="td-data-title">Date Received</td>
                        <td><?= $getdatetime_received; ?></td>
                    </tr>
                    <tr>
                        <td class="td-data-title">Preferred Date/Time</td>
                        <td><?=  $getprefdatettime. ' '. $time_pref; ?></td>
                    </tr>
                    <tr>
                        <td class="td-data-title">Name</td>
                        <td class="td-data-name"><span><?= $row['lname'].'</span>, '.$row['fname']; ?> </td>
                    </tr>
                    <tr>
                        <td class="td-data-title">Address</td>
                        <td><?= $row['address']; ?></td>
                    </tr>
                    <tr>
                        <td class="td-data-title">Email</td>
                        <td><?= $row['email']; ?></td>
                    </tr>
                    <tr>
                        <td class="td-data-title">Contact</td>
                        <td><?= $row['contact']; ?></td>
                    </tr>
                    <tr>
                        <td class="td-data-title">Message</td>
                        <td><?= $row['message']; ?></td>
                    </tr>
                    <tr class="dta-default-status">
                        <td class="td-data-title">Status</td>
                        <td><?= $get_curstat_text; ?> &nbsp;&nbsp; <span><a href="#" id="update_status" class="<?= $row['ID'] ?>"> Edit </a></span> </td>
                    </tr>
                    <tr class="dta-edit-status dta-hide">
                        <td class="td-data-title dta-bg-green">Status</td>
                        <td><select name="appointmentstatus" id="appointmentstatus">
                            <option value="0">Pending</option>
                            <option value="1">Approved</option>
                            <option value="2">Re-schedule</option>
                            <option value="3">Rejected</option>
                        </select></td>
                    </tr>
                    <tr class="dta-edit-date dta-hide ">
                        <td class="td-data-title dta-bg-green">Preferred Date</td>
                        <td><input type="text" id="appointmentdate" readonly></td>
                    </tr>
                    <tr class="dta-edit-time dta-hide ">
                        <td class="td-data-title dta-bg-green">Preferred Time</td>
                        <td>
                        <select name="appointmenttime" id="appointmenttime">
                            <option value="8">8:00 AM</option>
                            <option value="9">9:00 AM</option>
                            <option value="10">10:00 AM</option>
                            <option value="11">11:00 AM</option>
                            <option value="13">1:00 PM</option>
                            <option value="14">2:00 PM</option>
                            <option value="15">3:00 PM</option>
                            <option value="16">4:00 PM</option>
                        </select>
                        </td>
                    </tr>
                    <tr class="dta-edit-buttons dta-hide">
                        <td colspan="2">                            
                            <input type="button" value="Cancel" id="btn-cancel" class="btn-cancel">
                            <input type="button" value="Update" id="btn-update" class="btn-update">
                        </td>
                    </tr>
                </table>
        <?php
    }
}
?>