<?php

$path = '/var/www/html/SuiteCRM/themes/SuiteP/css';

$regexes = [
    '/\#534d64/i' => '#196579',
];

$excludedPaths = [];

$excludedFiles = [];

$excludedRegexes = ['/^\.git/', '/^vendor/'];

$excludedExtensions = [''];

$includedExtensions = ['css', 'scss', 'svg', 'tpl', 'html', 'php'];
