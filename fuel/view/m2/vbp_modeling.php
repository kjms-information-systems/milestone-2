<!DOCTYPE html>
<html lang='en'>

<?php

//View for VBP modeling. Controls what the page looks like

echo Form::open(array('action' => 'index/m2/vbp_modeling', 'method' => 'post'));

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
								<td><?php echo Form::input('performance', $answer[0], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('performance', $answer[0], array('class' => 'form-control'));?></td>
								<td>10 out of 10</td>
								<td>9 out of 9</td>
								<td>10 out of 10</td>
							</tr>
							<tr>
								<td id="category">HA1</td>
								<td>0.369</td>
								<td>0</td>
								<td><?php echo Form::input('performance', $answer[0], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('performance', $answer[0], array('class' => 'form-control'));?></td>
								<td>0 out of 10</td>
								<td>0 out of 9</td>
								<td>0 out of 10</td>
							</tr>
							<tr>
								<td id="category">HAI-2</td>
								<td>0.906</td>
								<td>0</td>
								<td><?php echo Form::input('performance', $answer[0], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('performance', $answer[0], array('class' => 'form-control'));?></td>
								<td>3 out of 10</td>
								<td>0 out of 9</td>
								<td>2 out of 10</td>
							</tr>
							<tr>
								<td id="category">HAI-3</td>
								<td>0.824</td>
								<td>0</td>
								<td><?php echo Form::input('performance', $answer[0], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('performance', $answer[0], array('class' => 'form-control'));?></td>
								<td>0 out of 10</td>
								<td>0 out of 9</td>
								<td>0 out of 10</td>
							</tr>
							<tr>
								<td id="category">HAI-4</td>
								<td>0.71</td>
								<td>0</td>
								<td><?php echo Form::input('performance', $answer[0], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('performance', $answer[0], array('class' => 'form-control'));?></td>
								<td>10 out of 10</td>
								<td>9 out of 9</td>
								<td>10 out of 10</td>
							</tr>
							<tr>
								<td id="category">HAI-5</td>
								<td>0.767</td>
								<td>0</td>
								<td><?php echo Form::input('performance', $answer[0], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('performance', $answer[0], array('class' => 'form-control'));?></td>
								<td>0 out of 10</td>
								<td>0 out of 9</td>
								<td>0 out of 10</td>
							</tr>
							<tr>
								<td id="category">HAI-6</td>
								<td>0.805</td>
								<td>0.004</td>
								<td><?php echo Form::input('performance', $answer[0], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('performance', $answer[0], array('class' => 'form-control'));?></td>
								<td>0 out of 10</td>
								<td>4 out of 9</td>
								<td>4 out of 10</td>
							</tr>
							<tr>
								<td id="category">PC-01</td>
								<td>0.020408</td>
								<td>0</td>
								<td><?php echo Form::input('performance', $answer[0], array('class' => 'form-control'));?></td>
								<td><?php echo Form::input('performance', $answer[0], array('class' => 'form-control'));?></td>
								<td>2 out of 10</td>
								<td>0 out of 9</td>
								<td>2 out of 10</td>
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
    
	echo Form::label('Performance score:', 'performance') . ' ';
	echo Form::input('performance', $answer[0], array('class' => 'form-control'));

	echo Form::label('Achievement:', 'achievement') . ' ';
	echo Form::input('achievement', $answer[1], array('class' => 'form-control'));
	echo 'Calculation: ';
    echo $answer[2];
	echo '<br><br>';

	echo Form::button('frmbutton', 'Calculate', array('class' => 'btn btn-default'));
	
echo Form::close();

