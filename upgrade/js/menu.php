<?php
if($_SESSION['userLevel'] =="Admin"){
    ?>
    <div id="accordion">
        <ul>
            <li>
                <div>My Account</div>
                <ul>
                    <li><a href="jc-ims-main.php">Dashboard</a></li>
                    <li><a href="my-account-history.php"><span>See My History</span></a></li>
                    <li><a href="my-account-change-password.php"><span>Change Password</span></a></li>
                    <li><a href="#"  data-toggle="modal" data-target="#centerSwitchModal"><span>Change Center Access</span></a></li>
                    <li><a href="jc-log-out.php"><span>Log Out</span></a></li>
                </ul>
            </li>
            <li>
                <div>User Management</div>
                <ul>
                    <li><a href="jcu-manage-users.php">Manage All Users</a></li>
                </ul>
            </li>
            <li>
                <div>Data</div>
                <ul>
                    <li><a class="active-page" href="jc-add-user.php">Delete Outreach Report</a></li>
                    <li><a  href="re-allocate-user.php">Delete Outreach Statics</a></li>
                    <li><a href="index3.html">Delete Media Reports</a></li>
                </ul>
            </li>
            <li>
                <div>Manage</div>
                <ul>
                    <li><a class="active-page" href="manage-centers.php">Centres</a></li>
                    <li><a  href="manage-courts.php">Courts</a></li>
                    <li><a href="manage-prisons.php">Prisons</a></li>
                    <li><a href="jc-add-user.php">Offences</a></li>
                    <li><a  href="re-allocate-user.php">Radios</a></li>
                    <li><a href="index3.html">Claims</a></li>
                    <li><a href="index3.html">Outreach</a></li>
                </ul>
            </li>
            <li>
                <a href="reports.php">Reports</a>
            </li>
        </ul>
    </div>

    <?php
}
elseif($_SESSION[userLevel]=="Paralegal")
{
    ?>
    <table cellpadding="0" width="220" height="">
        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="jc-register-client.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">REGISTER COMPLAINANT</font></a>&nbsp;&nbsp;</td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="mmt-pending.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">MMT ( PENDING )</font></a>&nbsp;&nbsp;</td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="jc-add-document.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">UPLOAD DOCUMENTS</font></a>&nbsp;&nbsp;</td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="jc-add-photo.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">UPLOAD CLIENT PHOTO</font></a>&nbsp;&nbsp;</td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="jc-client-visits.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">ENQUIRIES</font></a>&nbsp;&nbsp;</td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="court-registration.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">COURT REGISTRATION</font></a>&nbsp;&nbsp;</td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="upload-pleadings.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">UPLOAD PLEADINGS</font></a>&nbsp;&nbsp;</td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="jc-outreach.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">OUTREACHES</font></a>&nbsp;&nbsp;</td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="court-annexed-adr.php" target="_blank" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">COURT - ANNEXED</font></a>&nbsp;&nbsp;</td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="pdp-cases.php" target="_blank" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">PDP CASES</font></a>&nbsp;&nbsp;</td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="state-brief-cases.php" target="_blank" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">STATE BRIEF CASES</font></a>&nbsp;&nbsp;</td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="adr-pending-update-par.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">MEDIATION UPDATE</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="media-activities.php" target="_blank" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">MEDIA ACTIVITIES</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="change-password.php" style="text-decoration: none;" target="_blank">
                    <font color="#ffffff" face="Candara">CHANGE PASSWORD</font></a></td></tr>
        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="reports.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">REPORTS</font></a>&nbsp;&nbsp;</td></tr>
    </table>
    <?php
}
elseif($_SESSION[userLevel]=="Manager")
{
    ?>
    <table cellpadding="0" width="220" height="">
        <tr>
            <td align="left" height="40" background="images/ftab.png"><a href="jc-mmt-score.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">&nbsp;&nbsp;MMT RESULTS</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="determine-resolution-type-m.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">CASE REGISTRATION</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="court-pending-m.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">COURT UPDATE</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png"><a href="ext-int-ref-requests.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">&nbsp;&nbsp;REF REQUESTS</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png"><a href="opinion-results.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">&nbsp;&nbsp;PENDING OPINION</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="pending-closure.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">PENDING CLOSURE</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png"><a href="re-assign.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">&nbsp;&nbsp;RE-ASSIGNMENT</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png"><a href="jc-register-client-cm.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">&nbsp;&nbsp;REGISTER COMPLAINANT</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png"><a href="mmt-pending-cm.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">&nbsp;&nbsp;MMT ( PENDING )</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png"><a href="jc-add-document-cm.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">&nbsp;&nbsp;UPLOAD DOCUMENTS</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png"><a href="jc-add-photo-cm.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">&nbsp;&nbsp;UPLOAD CLIENT PHOTO</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png"><a href="jc-client-visits-cm.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">&nbsp;&nbsp;ENQUIRIES</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png"><a href="court-registration-cm.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">&nbsp;&nbsp;COURT REGISTRATION</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png"><a href="upload-pleadings-cm.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">&nbsp;&nbsp;UPLOAD PLEADINGS</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png"><a href="jc-outreach-cm.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">&nbsp;&nbsp;OUTREACHES</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png"><a href="court-annexed-adr-cm.php" target="_blank" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">&nbsp;&nbsp;COURT ANNEXED</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png"><a href="pdp-cases-cm.php" target="_blank" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">&nbsp;&nbsp;PDP CASES</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png"><a href="state-brief-cases-cm.php" target="_blank" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">&nbsp;&nbsp;STATE BRIEF CASES</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png"><a href="adr-pending-update-cm.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">&nbsp;&nbsp;MEDIATION UPDATE</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png"><a href="jc-register-client-edit.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">&nbsp;&nbsp;EDIT CLIENT DETAILS</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png"><a href="outreach-stats-edit.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">&nbsp;&nbsp;EDIT OUTREACH STATS</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png"><a href="view.php" target="_blank" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">&nbsp;&nbsp;DELETE OUTREACH RPT</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png"><a href="temp.php" target="_blank" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">&nbsp;&nbsp;UPLOAD OUTREACH RPT</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="media-activities.php" target="_blank" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">MEDIA ACTIVITIES</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="change-password.php" style="text-decoration: none;" target="_blank">
                    <font color="#ffffff" face="Candara">CHANGE PASSWORD</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="reports.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">REPORTS</font></a>&nbsp;&nbsp;</td></tr>

    </table>
    <?php
}
elseif($_SESSION[userLevel]=="Advocate")
{
    ?>
    <table cellpadding="0" width="220" height="">
        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="determine-resolution-type.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">CASE REGISTRATION</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="adr-pending.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">MEDIATION UPDATE</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="court-pending.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">COURT UPDATE</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="referral-request-adv.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">REFERRAL REQUEST</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="upload-leg-opinion.php" style="text-decoration: none;" target="_blank">
                    <font color="#ffffff" face="Candara">LEG OPINION REQUEST</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png"><a href="jc-register-client-adv.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">&nbsp;&nbsp;REGISTER COMPLAINANT</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png"><a href="mmt-pending-adv.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">&nbsp;&nbsp;MMT ( PENDING )</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png"><a href="jc-add-document-adv.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">&nbsp;&nbsp;UPLOAD DOCUMENTS</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png"><a href="jc-add-photo-adv.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">&nbsp;&nbsp;UPLOAD CLIENT PHOTO</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png"><a href="jc-client-visits-adv.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">&nbsp;&nbsp;ENQUIRIES</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png"><a href="court-registration-adv.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">&nbsp;&nbsp;COURT REGISTRATION</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png"><a href="upload-pleadings-adv.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">&nbsp;&nbsp;UPLOAD PLEADINGS</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png"><a href="jc-outreach-adv.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">&nbsp;&nbsp;OUTREACHES</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png"><a href="court-annexed-adr-adv.php" target="_blank" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">&nbsp;&nbsp;COURT ANNEXED</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png"><a href="pdp-cases-adv.php" target="_blank" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">&nbsp;&nbsp;PDP CASES</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png"><a href="state-brief-cases-adv.php" target="_blank" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">&nbsp;&nbsp;STATE BRIEF CASES</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="media-activities.php" target="_blank" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">MEDIA ACTIVITIES</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="change-password.php" style="text-decoration: none;" target="_blank">
                    <font color="#ffffff" face="Candara">CHANGE PASSWORD</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="reports.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">REPORTS</font></a></td></tr>
    </table>
    <?php
}
elseif($_SESSION[userLevel]=="NC")
{
    ?>
    <table border="0" width="1250" bgcolor="#e4e4e4"><tr><td>
                <table border="0" cellpadding="4" width="98%">
                    <tr style="border-bottom: 1px solid #788; border-top: 1px solid #000000;">
                        <td colspan="4" align="center"><b>CUSTOMISED IMS GENERATED REPORTS</b></td></tr>
                    <tr style="border-bottom: 1px solid #788;">
                        <td style="border-right: 1px solid none;">&nbsp;<font color="#663366"><b>REPORT NAME</b></font>&nbsp;</td>
                        <td style="border-right: 1px solid none;">&nbsp;<font color="#663366"><b>CRITERIA / JC NAME</b></font>&nbsp;</td>
                        <td style="border-right: 1px solid none;">&nbsp;<font color="#663366"><b>PERIOD | START AND END DATE</b></font>&nbsp;</td>
                        <td>&nbsp;<font color="#663366"><b>ACTION</b></font>&nbsp;</td></tr>

                    <form action="registration-summary.php" method="post" target="_blank">
                        <tr bgcolor="#eeeeee">
                            <td align="left" width="250">&nbsp;<b>Registration | Summary</b></td>
                            <td>
                                <select name="centreName" style="border: 1px solid #788; height: 29px; width: 180px;"><option value="">-- Select Option --</option>
                                    <?php echo "$dfcn";?>
                                    <option value="ALL">ALL</option>
                                </select></td>
                            <td>
                                <input type="text" name="Start1" id="Start1"
                                       style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;" value="Start" onClick="displayDatePicker('Start1');">
                                &nbsp;<input type="text" name="End1" id="End1"
                                             style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;"
                                                                                                                                  value="End" onClick="displayDatePicker('End1');"></td>
                            <td><input type="submit" name="Generate1" value="Generate" style="padding: 1px; width: 80px; height:29px; border: 1px solid #788;"></td></tr></form>

                    <form  method="post" action="jc-claim-sex-age.php" target="_blank">
                        <tr bgcolor=""><td align="left">&nbsp;<b>JC | Claim | Sex | Age</b></td>
                            <td>
                                <select name="JC" style="border: 1px solid #788; height: 29px; width: 120px;"><option value="">- Select JC -</option>
                                    <?php echo "$dfcn";?>
                                    <option value="ALL">ALL</option>
                                </select>&nbsp;
                                <select name="Claim" style="border: 1px solid #788; height: 29px; width: 140px;"><option value="">- Select Claim -</option>
                                    <option value="Land">Land</option>
                                    <option value="Family">Family</option>
                                    <option value="Civil">Civil</option>
                                    <option value="Criminal">Criminal</option>
                                </select>&nbsp;
                                <select name="Sex" style="border: 1px solid #788; height: 29px; width: 120px;"><option value="">- Select Sex -</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>&nbsp;
                                <select name="Age" style="border: 1px solid #788; height: 29px; width: 120px;"><option value="">- Select Age -</option>
                                    <option value="1-17">1-17</option>
                                    <option value="18-35">18-35</option>
                                    <option value="36-50">36-50</option>
                                    <option value="above 50">above 50</option>
                                </select>
                            </td><td>
                                <input type="text" name="Start2" id="Start2"
                                       style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;" value="Start" onClick="displayDatePicker('Start2');">
                                &nbsp;<input type="text" name="End2" id="End2"
                                             style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;"
                                                                                                                                  value="End" onClick="displayDatePicker('End2');">
                            </td><td><input type="submit" name="Generate2" value="Generate" style="padding: 1px; width: 80px; height:29px; border: 1px solid #788;"> </td></tr></form>

                    <form action="clients-by-district.php" method="post" target="_blank">
                        <tr bgcolor="#eeeeee"><td align="left">&nbsp;<b>Clients by District of origin</b></td>
                            <td>
                                <select name="centreN" style="border: 1px solid #788; height: 29px; width: 180px;"><option value="">-- Select Option --</option>
                                    <?php echo "$dfcn";?>
                                    <option value="ALL">ALL</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" name="Start3" id="Start3"
                                       style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;" value="Start" onClick="displayDatePicker('Start3');">
                                &nbsp;<input type="text" name="End3" id="End3"
                                             style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;"
                                                                                                                                  value="End" onClick="displayDatePicker('End3');">
                            </td><td><input type="submit" name="Generate3" value="Generate" style="padding: 1px; width: 80px; height:29px; border: 1px solid #788;"> </td></tr></form>

                    <form action="mmt-advice-manager.php" method="post" target="_blank">
                        <tr bgcolor=""><td align="left">&nbsp;<b>MMT | Advice | Ref to Manager</b></td>
                            <td>
                                <select name="centreX" style="border: 1px solid #788; height: 29px; width: 180px;"><option value="">-- Select Option --</option>
                                    <?php echo "$dfcn";?>
                                    <option value="ALL">ALL</option>
                                </select></td>
                            <td>
                                <input type="text" name="Start4" id="Start4"
                                       style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;" value="Start" onClick="displayDatePicker('Start4');">
                                &nbsp;<input type="text" name="End4" id="End4"
                                             style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;"
                                                                                                                                  value="End" onClick="displayDatePicker('End4');">
                            </td><td><input type="submit" name="Generate4" value="Generate" style="padding: 1px; width: 80px; height:29px; border: 1px solid #788;"> </td></tr></form>

                    <form action="mmt-pending-review.php" method="post" target="_blank">
                        <tr bgcolor="#eeeeee"><td align="left">&nbsp;<b>MMT Scores | Pending Review </b></td>
                            <td>
                                <select name="centreMMT" style="border: 1px solid #788; height: 29px; width: 180px;"><option value="">-- Select Option --</option>
                                    <?php echo "$dfcn";?>
                                </select>
                            </td>
                            <td>
                                <input type="text" name="Start" id="Start"
                                       style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;" value="Start" onClick="displayDatePicker('Start');">
                                &nbsp;<input type="text" name="End" id="End"
                                             style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;"
                                                                                                                                  value="End" onClick="displayDatePicker('End');">
                            </td><td><input type="submit" name="Generate6" value="Generate" style="padding: 1px; width: 80px; height:29px; border: 1px solid #788;"> </td></tr></form>

                    <form action="clients-referred-institutions.php" method="post" target="_blank">
                        <tr><td align="left">&nbsp;<b>Total referred | Institutions</b></td>
                            <td>
                                <select name="centX" style="border: 1px solid #788; height: 29px; width: 180px;"><option value="">-- Select Option --</option>
                                    <?php echo "$dfcn";?>
                                </select>
                            </td>
                            <td>
                                <input type="text" name="Start7" id="Start7"
                                       style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;" value="Start" onClick="displayDatePicker('Start7');">
                                &nbsp;<input type="text" name="End7" id="End7"
                                             style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;"
                                                                                                                                  value="End" onClick="displayDatePicker('End7');">
                            </td><td><input type="submit" name="Generate7" value="Generate" style="padding: 1px; width: 80px; height:29px; border: 1px solid #788;"> </td></tr></form>

                    <form action="enquiries-summary.php" method="post" target="_blank">
                        <tr bgcolor="#eeeeee"><td align="left">&nbsp;<b>Enquiries Summary</b></td><td>
                                <select name="centreEnq" style="border: 1px solid #788; height: 29px; width: 180px;"><option value="">-- Select Option --</option>
                                    <?php echo "$dfcn";?>
                                </select>
                            </td>
                            <td>
                                <input type="text" name="Start8" id="Start8"
                                       style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;" value="Start" onClick="displayDatePicker('Start8');">
                                &nbsp;<input type="text" name="End8" id="End8"
                                             style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;"
                                                                                                                                  value="End" onClick="displayDatePicker('End8');">
                            </td><td><input type="submit" name="Generate8" value="Generate" style="padding: 1px; width: 80px; height:29px; border: 1px solid #788;"> </td></tr></form>

                    <form action="outreach-summary.php" method="post" target="_blank">
                        <tr><td align="left">&nbsp;<b>Outreach Summary</b></td><td>
                                <select name="Catx" style="border: 1px solid #788; height: 29px; width: 180px;"><option value="">-- Select Option --</option>
                                    <option value="Schools">Schools</option>
                                    <option value="Community">Community</option>
                                    <option value="PWD">PWD</option>
                                    <option value="Women">Women</option>
                                    <option value="Prisons">Prisons</option>
                                    <option value="Police">Police</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" name="Start9" id="Start9"
                                       style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;" value="Start" onClick="displayDatePicker('Start9');">
                                &nbsp;<input type="text" name="End9" id="End9"
                                             style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;"
                                                                                                                                  value="End" onClick="displayDatePicker('End9');">
                            </td><td><input type="submit" name="Generate9" value="Generate" style="padding: 1px; width: 80px; height:29px; border: 1px solid #788;"> </td></tr></form>

                    <form action="court-annexed-summary.php" method="post" target="_blank">
                        <tr bgcolor="#eeeeee"><td align="left">&nbsp;<b>Court Annexed Clients</b></td>
                            <td>
                                <select name="cAnnexed" style="border: 1px solid #788; height: 29px; width: 180px;"><option value="">-- Select Option --</option>
                                    <?php echo "$dfcn";?>
                                </select>
                            </td>
                            <td>
                                <input type="text" name="Start10" id="Start10"
                                       style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;" value="Start" onClick="displayDatePicker('Start10');">
                                &nbsp;<input type="text" name="End10" id="End10"
                                             style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;"
                                                                                                                                  value="End" onClick="displayDatePicker('End10');">
                            </td><td><input type="submit" name="Generate10" value="Generate" style="padding: 1px; width: 80px; height:29px; border: 1px solid #788;"> </td></tr></form>

                    <form action="pdp-clients.php" method="post" target="_blank">
                        <tr><td align="left">&nbsp;<b>PDPs Clients</b></td>
                            <td>
                                <select name="centrePDP" style="border: 1px solid #788; height: 29px; width: 180px;"><option value="">-- Select Option --</option>
                                    <?php echo "$dfcn";?>
                                </select>
                            </td>
                            <td>
                                <input type="text" name="Start11" id="Start11"
                                       style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;" value="Start" onClick="displayDatePicker('Start11');">
                                &nbsp;<input type="text" name="End11" id="End11"
                                             style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;"
                                                                                                                                  value="End" onClick="displayDatePicker('End11');">
                            </td><td><input type="submit" name="Generate11" value="Generate" style="padding: 1px; width: 80px; height:29px; border: 1px solid #788;"> </td></tr></form>

                    <form action="brief-cases.php" method="post" target="_blank">
                        <tr bgcolor="#eeeeee"><td align="left">&nbsp;<b>State Brief Cases</b></td>
                            <td>
                                <select name="centreSBC" style="border: 1px solid #788; height: 29px; width: 180px;"><option value="">-- Select Option --</option>
                                    <?php echo "$dfcn";?>
                                </select>
                            </td>
                            <td>
                                <input type="text" name="Start12" id="Start12"
                                       style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;" value="Start" onClick="displayDatePicker('Start12');">
                                &nbsp;<input type="text" name="End12" id="End12"
                                             style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;"
                                                                                                                                  value="End" onClick="displayDatePicker('End12');">
                            </td><td><input type="submit" name="Generate12" value="Generate" style="padding: 1px; width: 80px; height:29px; border: 1px solid #788;"> </td></tr></form>

                    <form action="adr-summary.php" method="post" target="_blank">
                        <tr><td align="left">&nbsp;<b>Mediation Case Status</b></td>
                            <td>
                                <select name="centreADR" style="border: 1px solid #788; height: 29px; width: 180px;"><option value="">-- Select Option --</option>
                                    <?php echo "$dfcn";?>
                                </select>
                            </td>
                            <td>
                                <input type="text" name="Start13" id="Start13"
                                       style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;" value="Start" onClick="displayDatePicker('Start13');">
                                &nbsp;<input type="text" name="End13" id="End13"
                                             style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;"
                                                                                                                                  value="End" onClick="displayDatePicker('End13');">
                            </td><td><input type="submit" name="Generate13" value="Generate" style="padding: 1px; width: 80px; height:29px; border: 1px solid #788;"> </td></tr></form>

                    <form action="lit-summary.php" method="post" target="_blank">
                        <tr bgcolor="#eeeeee"><td align="left">&nbsp;<b>Court Case Status</b></td>
                            <td>
                                <select name="centreLIT" style="border: 1px solid #788; height: 29px; width: 180px;"><option value="">-- Select Option --</option>
                                    <?php echo "$dfcn";?>
                                </select>
                            </td>
                            <td>
                                <input type="text" name="Start14" id="Start14"
                                       style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;" value="Start" onClick="displayDatePicker('Start14');">
                                &nbsp;<input type="text" name="End14" id="End14"
                                             style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;"
                                                                                                                                  value="End" onClick="displayDatePicker('End14');">
                            </td><td><input type="submit" name="Generate14" value="Generate" style="padding: 1px; width: 80px; height:29px; border: 1px solid #788;"> </td></tr></form>

                    <form action="basic-advice-list.php" method="post" target="_blank">
                        <tr><td align="left">&nbsp;<b>Basic Advice - Listing</b></td>
                            <td>
                                <select name="centreADV" style="border: 1px solid #788; height: 29px; width: 180px;"><option value="">-- Select Option --</option>
                                    <?php echo "$dfcn";?>
                                </select>
                            </td>
                            <td>
                                <input type="text" name="Start15" id="Start15"
                                       style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;" value="Start" onClick="displayDatePicker('Start15');">
                                &nbsp;<input type="text" name="End15" id="End15"
                                             style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;"
                                                                                                                                  value="End" onClick="displayDatePicker('End15');">
                            </td><td><input type="submit" name="Generate15" value="Generate" style="padding: 1px; width: 80px; height:29px; border: 1px solid #788;"> </td></tr></form>

                    <form action="psycho-summary.php" method="post" target="_blank">
                        <tr bgcolor="#eeeeee"><td align="left">&nbsp;<b>Psychosocial Counseling</b></td>
                            <td>
                                <select name="centrePSYC" style="border: 1px solid #788; height: 29px; width: 180px;"><option value="">-- Select Option --</option>
                                    <?php echo "$dfcn";?>
                                </select>
                            </td>
                            <td>
                                <input type="text" name="Start16" id="Start16"
                                       style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;" value="Start" onClick="displayDatePicker('Start16');">
                                &nbsp;<input type="text" name="End16" id="End16"
                                             style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;"
                                                                                                                                  value="End" onClick="displayDatePicker('End16');">
                            </td><td><input type="submit" name="Generate16" value="Generate" style="padding: 1px; width: 80px; height:29px; border: 1px solid #788;"> </td></tr></form>

                    <form action="case-progress.php" method="post" target="_blank" onsubmit="required()" name="form1">
                        <tr><td align="left">&nbsp;<b>Case | File Progress </b></td>
                            <td colspan="2">
                                <div id="suggest"><input type="text" id="clientName" name="clientName" style="padding: 1px; width: 450px; height:29px; border: 1px solid #788;" onkeyup="suggest(this.value);"
                                                         onblur="fill();" class="" autocomplete="off"/>
                                    <div class="suggestionsBox" id="suggestions" style="display: none;">
                                        <div class="suggestionList" id="suggestionsList"> &nbsp; </div>
                                    </div>
                                </div>
                            </td>
                            <td><input type="submit" name="submit" value="Generate" style="padding: 1px; width: 80px; height:29px; border: 1px solid #788;"></td></tr></form>

                    <form action="file-duration.php" method="post" target="_blank">
                        <tr bgcolor="#eeeeee"><td align="left">&nbsp;<b>Case Duration</b></td>
                            <td>
                                <select name="centreDUR" style="border: 1px solid #788; height: 29px; width: 180px;"><option value="">-- Select Option --</option>
                                    <?php echo "$dfcn";?>
                                </select>
                            </td>
                            <td>
                                <input type="text" name="Start17" id="Start17"
                                       style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;" value="Start" onClick="displayDatePicker('Start17');">
                                &nbsp;<input type="text" name="End17" id="End17"
                                             style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;"
                                                                                                                                  value="End" onClick="displayDatePicker('End17');">
                            </td><td><input type="submit" name="Generate17" value="Generate" style="padding: 1px; width: 80px; height:29px; border: 1px solid #788;"> </td></tr></form>

                    <form action="file-duration.php" method="post" target="_blank">
                        <tr><td align="left">&nbsp;<b>Cause List - 1st Hearing -</b></td>
                            <td>
                                <select name="centreDUR" style="border: 1px solid #788; height: 29px; width: 180px;"><option value="">-- Select Option --</option>
                                    <?php echo "$dfcn";?>
                                </select>
                            </td>
                            <td>
                                <input type="text" name="Start17" id="Start17"
                                       style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;" value="Start" onClick="displayDatePicker('Start17');">
                                &nbsp;<input type="text" name="End17" id="End17"
                                             style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;"
                                                                                                                                  value="End" onClick="displayDatePicker('End17');">
                            </td><td><input type="submit" name="Generate17" value="Generate" style="padding: 1px; width: 80px; height:29px; border: 1px solid #788;"> </td></tr></form>

                    <form action="file-duration.php" method="post" target="_blank">
                        <tr bgcolor="#eeeeee"><td align="left">&nbsp;<b>Applicant's Reg. Details</b></td>
                            <td>
                                <select name="centreDUR" style="border: 1px solid #788; height: 29px; width: 180px;"><option value="">-- Select Option --</option>
                                    <?php echo "$dfcn";?>
                                </select>
                            </td>
                            <td>
                                <input type="text" name="Start17" id="Start17"
                                       style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;" value="Start" onClick="displayDatePicker('Start17');">
                                &nbsp;<input type="text" name="End17" id="End17"
                                             style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;"
                                                                                                                                  value="End" onClick="displayDatePicker('End17');">
                            </td><td><input type="submit" name="Generate17" value="Generate" style="padding: 1px; width: 80px; height:29px; border: 1px solid #788;"> </td></tr></form>

                    <form action="staff-load.php" method="post" target="_blank">
                        <tr><td align="left">&nbsp;<b>Load | Legal Officer</b></td>
                            <td colspan="2">
                                <select name="centreLoad" style="border: 1px solid #788; height: 29px; width: 180px;"><option value="">-- Select JC --</option>
                                    <?php echo "$dfcn";?>
                                </select>&nbsp;
                                <select name="staffName" style="border: 1px solid #788; height: 29px; width: 180px;"><option value="">-- Select Officer --</option>
                                    <?php echo "$staff";?>
                                </select>
                            </td>
                            <td><input type="submit" name="GenerateLoad" value="Generate" style="padding: 1px; width: 80px; height:29px; border: 1px solid #788;"> </td></tr></form>

                    <form action="closed-file.php" method="post" target="_blank">
                        <tr bgcolor="#eeeeee"><td align="left">&nbsp;<b>Closed Files / Cases</b></td>
                            <td>
                                <select name="centreClosed" style="border: 1px solid #788; height: 29px; width: 180px;"><option value="">-- Select Option --</option>
                                    <?php echo "$dfcn";?>
                                </select>
                            </td>
                            <td>
                                <input type="text" name="StartClose" id="StartClose"
                                       style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;" value="Start" onClick="displayDatePicker('StartClose');">
                                &nbsp;<input type="text" name="EndClose" id="EndClose"
                                             style="border:solid 1px #788; padding: 2px; width: 100px; height:29px;">&nbsp;<input type="button" style="font-size: 15px; height:29px; border: 1px solid #788;"
                                                                                                                                  value="End" onClick="displayDatePicker('EndClose');">
                            </td><td><input type="submit" name="GenerateClose" value="Generate" style="padding: 1px; width: 80px; height:29px; border: 1px solid #788;"> </td></tr></form>

                    <form action="staff-directory.php" method="post" target="_blank">
                        <tr><td align="left">&nbsp;<b>Staff Directory</b></td>
                            <td>This Displays the whole JCU Staff Directory registered in this IMS</td>
                            <td>
                            </td><td><input type="submit" name="GenerateList" value="Generate" style="padding: 1px; width: 80px; height:29px; border: 1px solid #788;"> </td></tr></form>
                    <tr bgcolor="#e4e4e4" height="31"><td colspan="4"></td></tr>
                </table>

            </td></tr></table>
    <?php
}
elseif($_SESSION[userLevel]=="Manager Programs")
{
    ?>
    <table cellpadding="0" width="220" height="">
        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="jc-register-client-mp.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">REGISTER COMPLAINANT</font></a>&nbsp;&nbsp;</td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="mmt-pending-mp.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">MMT ( PENDING )</font></a>&nbsp;&nbsp;</td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="jc-add-document-mp.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">UPLOAD DOCUMENTS</font></a>&nbsp;&nbsp;</td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="jc-add-photo-mp.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">UPLOAD CLIENT PHOTO</font></a>&nbsp;&nbsp;</td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="jc-client-visits-mp.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">ENQUIRIES</font></a>&nbsp;&nbsp;</td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="court-registration-mp.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">COURT REGISTRATION</font></a>&nbsp;&nbsp;</td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="upload-pleadings-mp.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">UPLOAD PLEADINGS</font></a>&nbsp;&nbsp;</td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="jc-outreach-mp.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">OUTREACHES</font></a>&nbsp;&nbsp;</td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="court-annexed-adr-mp.php" target="_blank" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">COURT - ANNEXED</font></a>&nbsp;&nbsp;</td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="pdp-cases-mp.php" target="_blank" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">PDP CASES</font></a>&nbsp;&nbsp;</td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="state-brief-cases-mp.php" target="_blank" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">STATE BRIEF CASES</font></a>&nbsp;&nbsp;</td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="adr-pending-update-mp.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">MEDIATION UPDATE</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="jc-mmt-score-mp.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">MMT RESULTS</font></a>&nbsp;&nbsp;</td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="determine-resolution-type-mp.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">CASE REGISTRATION</font></a>&nbsp;&nbsp;</td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="court-pending-mp.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">COURT UPDATE</font></a>&nbsp;&nbsp;</td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="ext-int-ref-requests-mp.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">REF REQUESTS</font></a>&nbsp;&nbsp;</td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="opinion-results-mp.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">PENDING OPINION</font></a>&nbsp;&nbsp;</td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="pending-closure-mp.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">PENDING CLOSURE</font></a>&nbsp;&nbsp;</td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="media.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">MEDIA DOCS</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="acts.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">ACTS/LAWS</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="precedents.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">PRECEDENTS</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="media-activities.php" target="_blank" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">MEDIA ACTIVITIES</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="change-password.php" style="text-decoration: none;" target="_blank">
                    <font color="#ffffff" face="Candara">CHANGE PASSWORD</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="reports.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">REPORTS</font></a>&nbsp;&nbsp;</td></tr>
    </table>

    <?php
}
elseif($_SESSION[userLevel]=="Intern")
{
    ?>
    <table cellpadding="0" width="180" height="">
        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="jc-legal-opinion.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">LEGAL OPINION</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="jc-adr-mou.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">MEDIATION UPDATE</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="reports.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">REPORTS</font></a></td></tr>
    </table>
    <?php
}
elseif($_SESSION[userLevel]=="Volunteer")
{
    ?>
    <table cellpadding="0" width="180" height="">
        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="jc-legal-opinion.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">LEGAL OPINION</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="jc-adr-mou.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">MEDIATION UPDATE</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="reports.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">REPORTS</font></a></td></tr>
    </table>
    <?php
}
elseif($_SESSION[userLevel]=="Psychosocial")
{
    ?>
    <table cellpadding="0" width="260" height="">
        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="psyc-basic-counseling.php"
                                                                               style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">BASIC PSYCHO. COUNSELING</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="psychosocial-pending.php"
                                                                               style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">REGISTRATION PENDING</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="psycho-pending-update.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">PENDING UPDATE</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="ext-referral-psy.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">EXT. REFERRAL UPDATE</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="mou-pending-followup.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">MOU FOLLOW UP</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="referral-request.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">REFERRAL REQUEST</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="adr-pending-update-psyc.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">MEDIATION UPDATE</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="media-activities.php" target="_blank" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">MEDIA ACTIVITIES</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="change-password.php" style="text-decoration: none;" target="_blank">
                    <font color="#ffffff" face="Candara">CHANGE PASSWORD</font></a></td></tr>

        <tr>
            <td align="left" height="40" background="images/ftab.png">&nbsp;<a href="reports.php" style="text-decoration: none;">
                    <font color="#ffffff" face="Candara">REPORTS</font></a></td></tr>
    </table>
    <?php
}
?>