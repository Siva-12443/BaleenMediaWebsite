<?php
$backup_dir = '/home/baleeed5/public_html/Backup';
$files = glob($backup_dir . '/*.sql');

foreach ($files as $file) {
    if (is_file($file)) {
        unlink($file);
    }
}
?>