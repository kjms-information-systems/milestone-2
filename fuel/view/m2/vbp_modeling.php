<!DOCTYPE html>
<html lang='en'>

<?php

//View for VBP modeling. Controls what the page looks like

echo Form::open(array('action' => 'index/m2/vbp_modeling', 'method' => 'post'));
    ?>
    
    <h2>Reimbursement</h2>
						<table border="1">
							<tr>
								<td id="category">Reimbursement</td>
								<td><?php echo Form::input('b_reim', $reimbursement[0], array('class' => 'form-control'));?></td>
							</tr>
							<tr>
								<td id="category">2% Penalty</td>
								<td><?php echo $reimbursement[1];?></td>
							</tr>
							<tr>
								<td id="category">TPS</td>
								<td><?php echo $tps[0];?></td>
							</tr>
							<tr>
								<td id="category">Total Reimbursement</td>
								<td><?php echo $reimbursement[2];?></td>
							</tr>
                        </table>
    
    <div id="Hospital_Scores">
					<h2>Total Performance Scores</h2>
						<table border="1">
							<tr>
								<td id="category">Unweighted Normalized Clinical Care Domain Score</td>
								<td><?php echo $cc_tps[1];?></td>
							</tr>
							<tr>
								<td id="category">Weighted Normalized Clinical Care Domain Score</td>
								<td><?php echo $cc_tps[2];?></td>
							</tr>
							<tr>
								<td id="category">Unweighted Patient and Caregiver Centered Experience of Care/Care Coordination Domain Score</td>
								<td><?php echo $hcahps_tps[1];?></td>
							</tr>
							<tr>
								<td id="category">Weighted Patient and Caregiver Centered Experience of Care/Care Coordination Domain Score</td>
								<td><?php echo $hcahps_tps[2];?></td>
							</tr>
							<tr>
								<td id="category">Unweighted Normalized Safety Domain Score</td>
								<td><?php echo $safety_tps[1];?></td>
							</tr>
							<tr>
								<td id="category">Weighted Safety Domain Score</td>
								<td><?php echo $safety_tps[2];?></td>
							</tr>
							<tr>
								<td id="category">Unweighted Normalized Efficiency and Cost Reduction Domain Score</td>
								<td><?php echo $efficiency_tps[1];?></td>
							</tr>
							<tr>
								<td id="category">Weighted Efficiency and Cost Reduction Domain Score</td>
								<td><?php echo $efficiency_tps[2];?></td>
							</tr>
							<tr>
								<td id="category">Total Performance Score</td>
								<td><?php echo $tps[0];?></td>
							</tr>
						</table>
				</div>

	<h3>Clinical Care</h3>
							<table border="1">
							<tr>
								<td id="measure"></td>
								<td id="measure">Achievement Threshold</td>
								<td id="measure">Benchmark</td>
								<td id="measure">Baseline Rate</td>
								<td id="measure">Performance Rate</td>
								<td id="measure">Achievement Points</td>
								<td id="measure">Improvement Points</td>
								<td id="measure">Dimension Score</td>
							</tr>
							<tr>
								<td id="category">MORT-30-AMI</td>
								<td><?php echo $mortAMI[0];?></td>
								<td><?php echo $mortAMI[1];?></td>
								<td><?php echo Form::input('b_mortAMI', $mortAMI[2], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('p_mortAMI', $mortAMI[3], array('class' => 'form-control'));?></td>
								<td><?php echo $mortAMI[4];?> out of 10</td>
								<td><?php echo $mortAMI[5];?> out of 9</td>
								<td><?php echo $mortAMI[6];?> out of 10</td>
							</tr>
							<tr>
								<td id="category">MORT-30-HF</td>
								<td><?php echo $mortHF[0];?></td>
								<td><?php echo $mortHF[1];?></td>
								<td><?php echo Form::input('b_mortHF', $mortHF[2], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('p_mortHF', $mortHF[3], array('class' => 'form-control'));?></td>
								<td><?php echo $mortHF[4];?> out of 10</td>
								<td><?php echo $mortHF[5];?> out of 9</td>
								<td><?php echo $mortHF[6];?> out of 10</td>
							</tr>
							<tr>
								<td id="category">MORT-30-PN</td>
								<td><?php echo $mortPN[0];?></td>
								<td><?php echo $mortPN[1];?></td>
								<td><?php echo Form::input('b_mortPN', $mortPN[2], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('p_mortPN', $mortPN[3], array('class' => 'form-control'));?></td>
								<td><?php echo $mortPN[4];?> out of 10</td>
								<td><?php echo $mortPN[5];?> out of 9</td>
								<td><?php echo $mortPN[6];?> out of 10</td>
							</tr>
							</table>

    <div id="HCAHPS" >
					<h3>HCAHPS</h3>
						<table border="1">
							<tr>
								<td id="measure"></td>
								<td id="measure">Floor</td>
								<td id="measure">Achievement Threshold</td>
								<td id="measure">Benchmark</td>
								<td id="measure">Baseline Rate</td>
								<td id="measure">Performance Rate</td>
								<td id="measure">Achievement Points</td>
								<td id="measure">Improvement Points</td>
								<td id="measure">Dimension Score</td>
								
							</tr>
						
							<tr>
								<td id="category">Communication with Nurses</td>
								<td>55.27</td>
								<td><?php echo $nurses[0];?></td>
								<td><?php echo $nurses[1];?></td>
								<td><?php echo Form::input('b_nurses', $nurses[2], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('p_nurses', $nurses[3], array('class' => 'form-control'));?></td>
								<td><?php echo $nurses[4];?> out of 10</td>
								<td><?php echo $nurses[5];?> out of 9</td>
								<td><?php echo $nurses[6];?> out of 10</td>
							</tr>
							<tr>
								<td id="category">Communication with Doctors</td>
								<td>57.39</td>
								<td><?php echo $doctors[0];?></td>
								<td><?php echo $doctors[1];?></td>
								<td><?php echo Form::input('b_doctors', $doctors[2], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('p_doctors', $doctors[3], array('class' => 'form-control'));?></td>
								<td><?php echo $doctors[4];?> out of 10</td>
								<td><?php echo $doctors[5];?> out of 9</td>
								<td><?php echo $doctors[6];?> out of 10</td>
							</tr>
							<tr>
								<td id="category">Responsiveness of Hospital Staff</td>
								<td>38.40</td>
								<td><?php echo $staff[0];?></td>
								<td><?php echo $staff[1];?></td>
								<td><?php echo Form::input('b_staff', $staff[2], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('p_staff', $staff[3], array('class' => 'form-control'));?></td>
								<td><?php echo $staff[4];?> out of 10</td>
								<td><?php echo $staff[5];?> out of 9</td>
								<td><?php echo $staff[6];?> out of 10</td>
							</tr>
							<tr>
								<td id="category">Care Transition</td>
								<td>25.21</td>
								<td><?php echo $care[0];?></td>
								<td><?php echo $care[1];?></td>
								<td><?php echo Form::input('b_care', $care[2], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('p_care', $care[3], array('class' => 'form-control'));?></td>
								<td><?php echo $care[4];?> out of 10</td>
								<td><?php echo $care[5];?> out of 9</td>
								<td><?php echo $care[6];?> out of 10</td>
							</tr>
							<tr>
								<td id="category">Communication about Medicines</td>
								<td>43.43</td>
								<td><?php echo $medicine[0];?></td>
								<td><?php echo $medicine[1];?></td>
								<td><?php echo Form::input('b_medicine', $medicine[2], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('p_medicine', $medicine[3], array('class' => 'form-control'));?></td>
								<td><?php echo $medicine[4];?> out of 10</td>
								<td><?php echo $medicine[5];?> out of 9</td>
								<td><?php echo $medicine[6];?> out of 10</td>
							</tr>
							<tr>
								<td id="category">Cleanliness and Quietness of Hospital Environment</td>
								<td>40.05</td>
								<td><?php echo $cleanliness[0];?></td>
								<td><?php echo $cleanliness[1];?></td>
								<td><?php echo Form::input('b_cleanliness', $cleanliness[2], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('p_cleanliness', $cleanliness[3], array('class' => 'form-control'));?></td>
								<td><?php echo $cleanliness[4];?> out of 10</td>
								<td><?php echo $cleanliness[5];?> out of 9</td>
								<td><?php echo $cleanliness[6];?> out of 10</td>
							</tr>
							<tr>
								<td id="category">Discharge Information</td>
								<td>62.25</td>
								<td><?php echo $discharge[0];?></td>
								<td><?php echo $discharge[1];?></td>
								<td><?php echo Form::input('b_discharge', $discharge[2], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('p_discharge', $discharge[3], array('class' => 'form-control'));?></td>
								<td><?php echo $discharge[4];?> out of 10</td>
								<td><?php echo $discharge[5];?> out of 9</td>
								<td><?php echo $discharge[6];?> out of 10</td>
							</tr>
							<tr>
								<td id="category">Overall Rating of Hospital</td>
								<td>37.67</td>
								<td><?php echo $overall[0];?></td>
								<td><?php echo $overall[1];?></td>
								<td><?php echo Form::input('b_overall', $overall[2], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('p_overall', $overall[3], array('class' => 'form-control'));?></td>
								<td><?php echo $overall[4];?> out of 10</td>
								<td><?php echo $overall[5];?> out of 9</td>
								<td><?php echo $overall[6];?> out of 10</td>
							</tr>
							</table>
							<br>
							<table border="1">
							<tr>
								<td id="category">HCAHPS Base Score</td>
								<td><?php echo $hcahps_tps[0];?></td>
							</tr>
							<tr>
								<td id="category">HCAHPS Consistency Score</td>
								<td>15</td>
							</tr>
						</table>
    
    <h2>Safety</h2>
    
    <table border="1">
							<tr>
								<td id="measure"></td>
								<td id="measure">Achievement Threshold</td>
								<td id="measure">Benchmark</td>
								<td id="measure">Baseline Rate</td>
								<td id="measure">Performance Rate</td>
								<td id="measure">Achievement Points</td>
								<td id="measure">Improvement Points</td>
								<td id="measure">Dimension Score</td>
								
							</tr>
						
							<tr>
								<td id="category">PSI-90</td>
								<td><?php echo $psi90[0];?></td>
								<td><?php echo $psi90[1];?></td>
								<td><?php echo Form::input('b_psi90', $psi90[2], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('p_psi90', $psi90[3], array('class' => 'form-control'));?></td>
								<td><?php echo $psi90[4];?> out of 10</td>
								<td><?php echo $psi90[5];?> out of 9</td>
								<td><?php echo $psi90[6];?> out of 10</td>
							</tr>
							<tr>
								<td id="category">HAI-1</td>
								<td><?php echo $ha1[0];?></td>
								<td><?php echo $ha1[1];?></td>
								<td><?php echo Form::input('b_ha1', $ha1[2], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('p_ha1', $ha1[3], array('class' => 'form-control'));?></td>
								<td><?php echo $ha1[4];?> out of 10</td>
								<td><?php echo $ha1[5];?> out of 9</td>
								<td><?php echo $ha1[6];?> out of 10</td>
							</tr>
							<tr>
								<td id="category">HAI-2</td>
								<td><?php echo $ha2[0];?></td>
								<td><?php echo $ha2[1];?></td>
								<td><?php echo Form::input('b_ha2', $ha2[2], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('p_ha2', $ha2[3], array('class' => 'form-control'));?></td>
								<td><?php echo $ha2[4];?> out of 10</td>
								<td><?php echo $ha2[5];?> out of 9</td>
								<td><?php echo $ha2[6];?> out of 10</td>
							</tr>
							<tr>
								<td id="category">HAI-3</td>
								<td><?php echo $ha3[0];?></td>
								<td><?php echo $ha3[1];?></td>
								<td><?php echo Form::input('b_ha3', $ha3[2], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('p_ha3', $ha3[3], array('class' => 'form-control'));?></td>
								<td><?php echo $ha3[4];?> out of 10</td>
								<td><?php echo $ha3[5];?> out of 9</td>
								<td><?php echo $ha3[6];?> out of 10</td>
							</tr>
							<tr>
								<td id="category">HAI-4</td>
								<td><?php echo $ha4[0];?></td>
								<td><?php echo $ha4[1];?></td>
								<td><?php echo Form::input('b_ha4', $ha4[2], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('p_ha4', $ha4[3], array('class' => 'form-control'));?></td>
								<td><?php echo $ha4[4];?> out of 10</td>
								<td><?php echo $ha4[5];?> out of 9</td>
								<td><?php echo $ha4[6];?> out of 10</td>
							</tr>
							<tr>
								<td id="category">HAI-5</td>
								<td><?php echo $ha5[0];?></td>
								<td><?php echo $ha5[1];?></td>
								<td><?php echo Form::input('b_ha5', $ha5[2], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('p_ha5', $ha5[3], array('class' => 'form-control'));?></td>
								<td><?php echo $ha5[4];?> out of 10</td>
								<td><?php echo $ha5[5];?> out of 9</td>
								<td><?php echo $ha5[6];?> out of 10</td>
							</tr>
							<tr>
								<td id="category">HAI-6</td>
								<td><?php echo $ha6[0];?></td>
								<td><?php echo $ha6[1];?></td>
								<td><?php echo Form::input('b_ha6', $ha6[2], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('p_ha6', $ha6[3], array('class' => 'form-control'));?></td>
								<td><?php echo $ha6[4];?> out of 10</td>
								<td><?php echo $ha6[5];?> out of 9</td>
								<td><?php echo $ha6[6];?> out of 10</td>
							</tr>
							<tr>
								<td id="category">PC-01</td>
								<td><?php echo $pc01[0];?></td>
								<td><?php echo $pc01[1];?></td>
								<td><?php echo Form::input('b_pc01', $pc01[2], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('p_pc01', $pc01[3], array('class' => 'form-control'));?></td>
								<td><?php echo $pc01[4];?> out of 10</td>
								<td><?php echo $pc01[5];?> out of 9</td>
								<td><?php echo $pc01[6];?> out of 10</td>
							</tr>
							</table>
							<br>
							<table border="1">
							<tr>
								<td id="category">Combined SSI Score</td>
								<td>2 out of 10</td>
							</tr>
						</table>
		
		<h3>Efficiency</h3>
							<table border="1">
							<tr>
								<td id="measure"></td>
								<td id="measure">Achievement Threshold</td>
								<td id="measure">Benchmark</td>
								<td id="measure">Baseline Rate</td>
								<td id="measure">Performance Rate</td>
								<td id="measure">Achievement Points</td>
								<td id="measure">Improvement Points</td>
								<td id="measure">Dimension Score</td>
							</tr>
							<tr>
								<td id="category">MSPB-1</td>
								<td><?php echo $MSPB[0];?></td>
								<td><?php echo $MSPB[1];?></td>
								<td><?php echo Form::input('b_MSPB', $MSPB[2], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('p_MSPB', $MSPB[3], array('class' => 'form-control'));?></td>
								<td><?php echo $MSPB[4];?> out of 10</td>
								<td><?php echo $MSPB[5];?> out of 9</td>
								<td><?php echo $MSPB[6];?> out of 10</td>
							</tr>		
    </table>
    
    
    
    <?php
    
	
	
	echo '<br><br>';

	echo Form::button('frmbutton', 'Calculate', array('class' => 'btn btn-default'));
	
echo Form::close();

