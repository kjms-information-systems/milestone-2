<?php

namespace Model;


class Vbp extends \Model {
	
	public static function get_data($filename) {
		$csv = array_map('str_getcsv', file($filename));	
		return $csv;
	}
	
	public static function calculate($achievement, $benchmark, $baseline, $performance){
        $achievement_points = round(9 * (($performance - $achievement)/($benchmark - $achievement)) + 0.5);
        
        if ($achievement_points >= 10){
            $achievement_points = 10;
        }
        
        if ($achievement_points <= 0){
            $achievement_points = 0;
        }
        
        $improvement_points = round(10 * (($performance - $baseline)/($benchmark - $baseline)) - 0.5);
        
        if ($improvement_points >= 9){
            $improvement_points = 9;
        }
        
        if ($improvement_points <= 0){
            $improvement_points = 0;
        }
        
        if ($achievement_points >= $improvement_points){
            $measure_score = $achievement_points;
        }else{
            $measure_score = $improvement_points;
        }
	
		return [$achievement, $benchmark, $baseline, $performance, $achievement_points, $improvement_points, $measure_score];
	}
	

}
