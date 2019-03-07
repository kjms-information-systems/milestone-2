<!DOCTYPE html>
<html lang='en'>

<?php

//View for VBP modeling. Controls what the page looks like

echo Form::open(array('action' => 'index/m2/vbp_modeling', 'method' => 'post'));
    $answer = [1,2,3]
    ?>
    
    <h2>Safety Domain Calculations</h2>
    
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
								<td>0.964542</td>
								<td>0.709498</td>
								<td><?php echo Form::input('b_psi90', $psi90[2], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('p_psi90', $psi90[3], array('class' => 'form-control'));?></td>
								<td><?php echo $psi90[4];?> out of 10</td>
								<td><?php echo $psi90[5];?> out of 9</td>
								<td><?php echo $psi90[6];?> out of 10</td>
							</tr>
							<tr>
								<td id="category">HAI-1</td>
								<td>0.369</td>
								<td>0</td>
								<td><?php echo Form::input('b_ha1', $ha1[2], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('p_ha1', $ha1[3], array('class' => 'form-control'));?></td>
								<td><?php echo $ha1[4];?> out of 10</td>
								<td><?php echo $ha1[5];?> out of 9</td>
								<td><?php echo $ha1[6];?> out of 10</td>
							</tr>
							<tr>
								<td id="category">HAI-2</td>
								<td>0.906</td>
								<td>0</td>
								<td><?php echo Form::input('b_ha2', $ha2[2], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('p_ha2', $ha2[3], array('class' => 'form-control'));?></td>
								<td><?php echo $ha2[4];?> out of 10</td>
								<td><?php echo $ha2[5];?> out of 9</td>
								<td><?php echo $ha2[6];?> out of 10</td>
							</tr>
							<tr>
								<td id="category">HAI-3</td>
								<td>0.824</td>
								<td>0</td>
								<td><?php echo Form::input('b_ha3', $ha3[2], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('p_ha3', $ha3[3], array('class' => 'form-control'));?></td>
								<td><?php echo $ha3[4];?> out of 10</td>
								<td><?php echo $ha3[5];?> out of 9</td>
								<td><?php echo $ha3[6];?> out of 10</td>
							</tr>
							<tr>
								<td id="category">HAI-4</td>
								<td>0.71</td>
								<td>0</td>
								<td><?php echo Form::input('b_ha4', $ha4[2], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('p_ha4', $ha4[3], array('class' => 'form-control'));?></td>
								<td><?php echo $ha4[4];?> out of 10</td>
								<td><?php echo $ha4[5];?> out of 9</td>
								<td><?php echo $ha4[6];?> out of 10</td>
							</tr>
							<tr>
								<td id="category">HAI-5</td>
								<td>0.767</td>
								<td>0</td>
								<td><?php echo Form::input('b_ha5', $ha5[2], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('p_ha5', $ha5[3], array('class' => 'form-control'));?></td>
								<td><?php echo $ha5[4];?> out of 10</td>
								<td><?php echo $ha5[5];?> out of 9</td>
								<td><?php echo $ha5[6];?> out of 10</td>
							</tr>
							<tr>
								<td id="category">HAI-6</td>
								<td>0.805</td>
								<td>0.004</td>
								<td><?php echo Form::input('b_ha6', $ha6[2], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('p_ha6', $ha6[3], array('class' => 'form-control'));?></td>
								<td><?php echo $ha6[4];?> out of 10</td>
								<td><?php echo $ha6[5];?> out of 9</td>
								<td><?php echo $ha6[6];?> out of 10</td>
							</tr>
							<tr>
								<td id="category">PC-01</td>
								<td>0.020408</td>
								<td>0</td>
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
						
    
    <?php
    
	
	
	echo '<br><br>';

	echo Form::button('frmbutton', 'Calculate', array('class' => 'btn btn-default'));
	
echo Form::close();

