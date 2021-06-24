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

$ts_status = $ts->data->updates->trails_info->rows[0][1];
$ts_condition = $ts->data->updates->trails_info->rows[0][2];

$status_message = [
    'Vet int´',
    'Jo',
    'Jovars',
    'Nej',
    'Nej! låt bli',
];

$messages = [
    [
        0 => 'Je vet int´'
    ],
    [
        4 => 'Jo, men tat lugnt, de är ganska blött.',
        5 => 'Jo men visst, de ä bar å åk.',
        6 => 'Jo men ta de försiktit, schläfft i kurvan.',
    ]
];

echo '<h1>'.$status_message[$ts_status].'</h1>';