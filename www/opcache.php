<?php
header('Content-Type: text/plain');

$status = opcache_get_status(true);
foreach ($status['scripts'] as $script => $info) {
    echo $script . "\n";
}
