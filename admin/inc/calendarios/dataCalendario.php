<?php
include_once(dirname(__FILE__) . "/../banco.php");;
include 'codCalendario.php';
$week = 3;
$year = 2021;


$timestamp = mktime(0, 0, 0, 1, 1,  $year) + ($week * 7 * 24 * 60 * 60);
$timestamp_for_monday = $timestamp - 86400 * (date('N', $timestamp) - 1);

$date_for_monday = date('d-m-Y', $timestamp_for_monday);


if (isset($_GET['meses'])) {
	$month = $_GET['meses'];
	$mydate = (date("Y").'-'.$month);//.'-'.date("d"));
} else {
	
	$mydate = (date("Y-m-d"));
}


$calendar = new Calendar(date($mydate));
$calendar->add_event('Conselho de classe', '2021-01-06', 1, 'red');
$calendar->add_event('Feriado', '2021-02-16', 7, 'green');
$calendar->add_event('Conselho de classe', '2021-01-07', 1, 'red');
$calendar->add_event('Ricardo', '2021-01-04', 1, 'purple');
$calendar->add_event('Fausto', '2021-10-01', 1, 'yellow');

