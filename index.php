<?php

require_once __DIR__ . '/vendor/autoload.php';

set_time_limit(0);
ini_set('memory_limit', '-1');

include_once __DIR__ . '/Replacer.php';
include_once __DIR__ . '/ReplacerConfig.php';
include_once __DIR__ . '/ReplacerResults.php';


// ---------------- START ENTRY HERE -------------------

//include __DIR__ . '/config_noon_theme.php';
//include __DIR__ . '/config_sa_header_color.php';
incelude __DIR__ . '/config_7.11-beta.php';

$config = new ReplacerConfig($regexes, $path, $excludedExtensions, $excludedPaths, $excludedFiles, $excludedRegexes, $includedExtensions);

$replacer = new Replacer($config);
$results = $replacer->replace();
$replacer->showResults($results);

