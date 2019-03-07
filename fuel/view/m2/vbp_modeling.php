<?php

//View for VBP modeling. Controls what the page looks like

echo Form::open(array('action' => 'index/m2/vbp_modeling', 'method' => 'post'));
    
	echo Form::label('Performance score:', 'performance') . ' ';
	echo Form::input('performance', $answer[0], array('class' => 'form-control'));

	echo Form::label('Achievement:', 'achievement') . ' ';
	echo Form::input('achievement', $answer[1], array('class' => 'form-control'));
	echo 'Calculation: ';
    echo $answer[2];
	echo '<br><br>';

	echo Form::button('frmbutton', 'Calculate', array('class' => 'btn btn-default'));
	
echo Form::close();

