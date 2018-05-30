<?php

set_time_limit(0);
ini_set('memory_limit', '-1');

include_once __DIR__ . '/Replacer.php';
include_once __DIR__ . '/ReplacerConfig.php';
include_once __DIR__ . '/ReplacerResults.php';


// ---------------- START ENTRY HERE -------------------

include __DIR__ . '/config.example.php';

$config = new ReplacerConfig($regexes, $path, $excludedExtensions);

$replacer = new Replacer($config);
$results = $replacer->replace();
$replacer->showResults($results);

