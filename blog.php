<?php
require_once 'vendor/autoload.php';
require_once 'blade.config.php';
require_once 'models/Blog.php';

echo $blade -> make ('blog');
?>