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
    'Nej!!! åk inte!',
];

$status_img = [
    'vemvet.jpg',
    'jo.jpg',
    'jovars.jpg',
    'nej.jpg',
    'nejnej.jpg',
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
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Är Våfflan Öppen?</title>

  <script type="module">
    document.documentElement.classList.remove('no-js');
    document.documentElement.classList.add('js');
  </script>

<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Teko:wght@500&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="/tailwind.css">

  <meta property="og:title" content="Är Våfflan Öppen?">
  <meta property="og:image" content="https://arvafflanoppen.nu/img/<?php echo $status_img[$ts_status]; ?>">
  <meta property="og:locale" content="sv_SE">
  <meta property="og:type" content="website">
  <meta name="twitter:card" content="summary_large_image">
  <meta property="og:url" content="https://arvafflanoppen.nu">

  <link rel="icon" href="/favicon.ico">
  <link rel="icon" href="/favicon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  <meta name="theme-color" content="#FF00FF">
</head>

<body>
    <div class="min-h-screen w-full bg-gray-900 flex items-center justify-center">
    <h1 class="text-yellow-400 text-9xl uppercase font-semibold tracking-wide"><?php echo $status_message[$ts_status]; ?></h1>
    </div>
</body>
</html>

