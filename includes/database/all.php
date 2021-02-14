<?php

$files = ['connect','queries_get_all',
	'queries_get_many_by','queries_get_one_by','queries_insert',
	'queries_update','queries_delete'];

foreach($files as $file){
    require_once("includes/database/{$file}.php");
}

?>