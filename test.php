<?php

class MyGreeter
{
    function Client()
    {
    	$dateStr = date('H');
    	//$dateStr = 19;
    	if($dateStr >= 6 && $dateStr < 12){
    		return '早上好';
    	}elseif($dateStr >= 12 && $dateStr < 18){
    		return '下午好';
    	}elseif($dateStr >= 18 || $dateStr < 6){
    		return '晚上好';
    	}
    }

}

$newMyGreeter = new MyGreeter();
echo $newMyGreeter->Client();
