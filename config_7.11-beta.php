<?php

$path = '/var/www/html/upgrade-7.11-beta/packages';

$regexes = [
    '/SuiteCRM\-Upgrade\-7\.8\.x\-to\-7\.10\.10/' => 'SuiteCRM-Upgrade-7.8.x-to-7.11-beta',
];

$excludedPaths = [];

$excludedFiles = [];

$excludedRegexes = ['/^\.git/', '/^vendor/'];

$excludedExtensions = [''];

$includedExtensions = [];
