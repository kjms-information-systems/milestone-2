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

	public static function tps_domain($measure_scores){
		$total_measure = 0;
		for ($i = 0; $i < sizeof($measure_scores); $i++){
			$total_measure = $total_measure + $measure_scores[$i];
		}
		
		$unweighted_domain = ($total_measure / (10 * sizeof($measure_scores))) * 100;
		$weighted_domain = $unweighted_domain * 0.25;
	
		return [$total_measure, $unweighted_domain, $weighted_domain];
	
	}	
	
	public static function tps_HCAHPS($measure_scores){
		$total_measure = 0;
		for ($i = 0; $i < sizeof($measure_scores); $i++){
			$total_measure = $total_measure + $measure_scores[$i];
		}
		
		$consistency_score = 15;
		
		$unweighted_domain = ($total_measure + $consistency_score);
		$weighted_domain = $unweighted_domain * 0.25;
	
		return [$total_measure, $unweighted_domain, $weighted_domain];
	
	}	
	
	public static function tps($domain_scores){
		$total = 0;
		for ($i = 0; $i < sizeof($domain_scores); $i++){
			$total = $total + $domain_scores[$i];
		}
	
		return [$total];
	
	}	
	
	public static function reimbursement($reimbursement_data){
		$reimbursement = $reimbursement_data[0];
		$tps = $reimbursement_data[1];
		
		$penalty = $reimbursement * 0.02;
		$money_back = ($tps / 100) * $penalty;
		
		$total_reimbursement = $reimbursement - $penalty + $money_back;
	
		return [$reimbursement, $penalty, $total_reimbursement];
	
	}	

}
