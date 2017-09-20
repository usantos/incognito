<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('array_shuffle'))
{
    function array_shuffle($array) { 
		if (shuffle($array)) { 
			return $array; 
		} else { 
			return FALSE; 
		} 
	} 
}

if ( ! function_exists('getDatetimeNow'))
{
    function getDatetimeNow() {
		$tz_object = new DateTimeZone('Brazil/East');
	
		$datetime = new DateTime();
		$datetime->setTimezone($tz_object);
		return $datetime->format('Y\-m\-d\ H:i:s');
	} 
}

