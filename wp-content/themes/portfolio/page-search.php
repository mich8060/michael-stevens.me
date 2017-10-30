<?php

/*
Template Name: Search API
*/

global $query_string;

$query_args = explode("&", $query_string);

print_r($query_args);
$search_query = array();

if(strlen($query_string) > 0){
	foreach($query_args as $key => $string) {
		$query_split = explode("=", $string);
		$search_query[$query_split[0]] = urldecode($query_split[1]);
	} // foreach
} //if

$search = new WP_Query($search_query);
?>