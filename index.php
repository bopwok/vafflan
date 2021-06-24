<?php
require 'bootstrap.php';

$status = [
    'Unknown',
    'Clear / Green',
    'Minor Issue / Yellow',
    'Significant Issue / Amber',
    'Closed',
];


$condition = [
    'Unknown',
    'Snow Packed',
    'Prevalent Mud',
    'Wet',
    'Variable',
    'Dry',
    'Very Dry',
    'Snow Covered',
    'Freeze/thaw Cycle',
    'Icy',
    'Snow Groomed',
    'Ideal',
];


$tf = new API();
$ts = $tf->get_trail_status();
var_dump($ts);

echo $status[$ts->data->updates->trails_info->rows[0][1]];
echo $condition[$ts->data->updates->trails_info->rows[0][2]];