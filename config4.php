<?php

$path = '/var/www/html/SuiteCRM/tests/unit/phpunit';

$regexes = [
    '/StateCheckerUnitAbstract/' => 'StateCheckerPHPUnitTestCaseAbstract',
    '/\_before\(\)/' => 'setUp()',
    '/\_after\(\)/' => 'tearDown()',
];

$excludedPaths = [];

$excludedFiles = [];

$excludedRegexes = ['/^\.git/'];

$excludedExtensions = [''];

$includedExtensions = ['css', 'scss', 'svg', 'tpl', 'html', 'php'];
