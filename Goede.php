<?php
    date_default_timezone_set('Europe/Amsterdam');
    
    $time = date("H");

    if ($time >= 6 && $time < 11){
        $bg = "morning.png";
        $greeting = "Goedemorgen";
    } elseif ($time >= 11 && $time < 17) {
        $bg = "afternoon.png";
        $greeting = "Goedemiddag";
    } elseif ($time >= 17 && $time < 23 ) {
        $bg = "evening.png";
        $greeting = "Goedeavond";
    } elseif ($time >= 0 && $time < 6) {
        $bg = "night.png";
        $greeting = "Goedenacht";
    }
  
?>

<!DOCTYPE html>
<html>
<head>
    <title>goede php</title>
    <link rel="stylesheet" type="text/css" href="text.css">
</head>

<body style="background: url('bg/<?php echo $bg ?>'); background-size: cover;">
<h1> <?php echo $greeting; ?> </h1>
<p> <?php echo "Het is nu " . date("H:i"); ?> </p>
</body>
</html>