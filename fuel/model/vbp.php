<?php

namespace Model;


class Vbp extends \Model {
	
    public $ans = 0;
	
	public static function get_data($filename) {
		$csv = array_map('str_getcsv', file($filename));	
		return $csv;
	}
	
	public static function calculate($performance, $achievement){
		return [$performance, $achievement, $performance + $achievement];
	}
	

}
