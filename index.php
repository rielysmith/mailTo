<?php

$to = $_POST['mailto'];
$subject = $_POST['subject'];
$txt = $_POST['message'];

mail($to,$subject,$txt);
?>