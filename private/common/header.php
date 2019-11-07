<?php 
if(!isset($title)) { $title = 'Please Login';} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Course Selection - <?php $title?></title>
    <link rel="stylesheet" media="all" href="<?php echo route_to_url('/styles/main.css'); ?>"/>
</head>
<body>
    <header>
        <h1>Hello - <?php $title?></h1>
    </header>