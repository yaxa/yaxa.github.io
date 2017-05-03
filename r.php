<?php
$cdn = "http://img.pixady.com/";
$image = filter_input(INPUT_GET, 'imageurl', FILTER_SANITIZE_ENCODED);
$path = $cdn . str_replace('_', '/', $image);
header("Location: {$path}");
exit();