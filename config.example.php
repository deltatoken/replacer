<?php

$path = '/var/www/html/SuiteAssured';

$regexes = [
    '/\#534[Dd]64/' => '#196579',
    '/\#5[Dd]5670/' => '#48808F',
];

$excludedPaths = [];

$excludedFiles = [];

$excludedRegexes = ['/^\.git/'];

$excludedExtensions = [''];

$includedExtensions = ['css', 'scss', 'svg', 'tpl', 'html'];
