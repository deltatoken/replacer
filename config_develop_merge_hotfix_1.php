<?php

$path = '/var/www/html/SuiteCRM';

$regexes = [
//    '/StateCheckerUnitAbstract/' => 'StateCheckerPHPUnitTestCaseAbstract',
//    '/\_before\(\)/' => 'setUp()',
//    '/\_after\(\)/' => 'tearDown()',
    "/<<<<<<< HEAD\sif\(\!defined\('sugarEntry'\) \|\| \!sugarEntry\) die\('Not A Valid Entry Point'\);\s\/\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\s=======\sif \(\!defined\('sugarEntry'\) \|\| \!sugarEntry\) \{\s\s\s\s\sdie\('Not A Valid Entry Point'\)\;\s}\s\/\*\*\s\s\*\s>>>>>>> b29c16a8ccbfa0ada340f8a14ed23841cc6778ec/m" => 
    "if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
/**
 *",
    
    "/<<<<<<< HEAD\sif\(\!defined\('sugarEntry'\) \|\| \!sugarEntry\) die\('Not A Valid Entry Point'\);\s\s\/\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\s=======\sif \(\!defined\('sugarEntry'\) \|\| \!sugarEntry\) \{\s\s\s\s\sdie\('Not A Valid Entry Point'\)\;\s}\s\/\*\*\s\s\*\s>>>>>>> b29c16a8ccbfa0ada340f8a14ed23841cc6778ec/m" => 
    "if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
/**
 *",
    "/<<<<<<< HEAD\s\sif\(!defined\('sugarEntry'\)\)define\('sugarEntry', true\);\s\/\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\*\s=======\s\sif \(!defined\('sugarEntry'\)\) {\s\s\s\s\s\sdefine\('sugarEntry', true\);\s\s}\s\/\*\*\s\s\*\s>>>>>>> b29c16a8ccbfa0ada340f8a14ed23841cc6778ec/m" => 
    " if (!defined('sugarEntry')) {
     define('sugarEntry', true);
 }
/**
 *",
    
    "/<<<<<<< HEAD\s+if\(!defined\('sugarEntry'\) \|\| !sugarEntry\) die\('Not A Valid Entry Point'\);\s+\/\*+\s+=======\s+\/\*\*\s+\*\s+>>>>>>> b29c16a8ccbfa0ada340f8a14ed23841cc6778ec/m" => 
    "/**
 *",
    "/<<<<<<< HEAD\s+if\(!defined\('sugarEntry'\) \|\| !sugarEntry\) die\('Not A Valid Entry Point'\);\s+\/\*+\s+=======\s+if \(!defined\('sugarEntry'\) \|\| !sugarEntry\) {\s+die\('Not A Valid Entry Point'\);\s+}\s+\/\*\*\s+\*\s+>>>>>>> b29c16a8ccbfa0ada340f8a14ed23841cc6778ec/m" => 
    " if (!defined('sugarEntry') || !sugarEntry) {
     die('Not A Valid Entry Point');
 }
/**
 *",
    "/<<<<<<< HEAD\s+if\s*\(\s*!\s*defined\s*\(\s*'sugarEntry'\s*\)\s*\)\s*define\s*\(\s*'sugarEntry'\s*,\s*true\s*\)\s*;\s+\/\*+\s+=======\s+if\s*\(\s*!\s*defined\s*\(\s*'sugarEntry'\s*\)\s*\)\s*{\s*define\s*\(\s*'sugarEntry'\s*,\s*true\s*\)\s*;\s*}\s+\/\*\*\s+\*\s+>>>>>>> b29c16a8ccbfa0ada340f8a14ed23841cc6778ec/m" => 
    "if (!defined('sugarEntry')) {
    define('sugarEntry', true);
}
/**
 *",
    
    "/<<<<<<< HEAD\s+if\s*\(\s*!\s*defined\s*\(\s*'sugarEntry'\s*\)\s*\|\|\s*!\s*sugarEntry\s*\)\s*die\s*\(\s*'Not A Valid Entry Point'\s*\)\s*;\s+\/\*+\s+=======\s+if\s*\(\s*!\s*defined\s*\(\s*'sugarEntry'\s*\)\s*\|\|\s*!\s*sugarEntry\s*\)\s*{\s*die\s*\(\s*'Not A Valid Entry Point'\s*\)\s*;\s*}\s+\/\*\*\s+\*\s+>>>>>>> b29c16a8ccbfa0ada340f8a14ed23841cc6778ec/m" => 
    "if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
/**
 *",
    
    "/<<<<<<< HEAD\s+if\s*\(\s*!\s*defined\s*\(\s*'sugarEntry'\s*\)\s*\|\|\s*!\s*sugarEntry\s*\)\s*die\s*\('Not A Valid Entry Point'\s*\)\s*;\s+\/\*+\s+\* SugarCRM Community Edition is a customer relationship management program developed by\s+\* SugarCRM, Inc\. Copyright \(C\) 2004-201\d SugarCRM Inc\.\s+\*\s+=======\s+if\s*\(\s*!\s*defined\s*\(\s*'sugarEntry'\s*\)\s*\|\|\s*!\s*sugarEntry\s*\)\s*{\s*die\s*\(\s*'Not A Valid Entry Point'\s*\)\s*;\s*}\s*\/\*\*\s+\*\s+\* SugarCRM Community Edition is a customer relationship management program developed by\s+\* SugarCRM, Inc\. Copyright \(C\) 2004-201\d SugarCRM Inc\.\s+\*\s+\* SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd\.\s+\* Copyright \(C\) 2011 - 2018 SalesAgility Ltd\.\s+\*\s+>>>>>>> b29c16a8ccbfa0ada340f8a14ed23841cc6778ec/m" => 
    "if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *",
    
    "/<<<<<<< HEAD
<\?php\s+if\s*\(\s*!\s*defined\s*\(\s*'sugarEntry'\s*\)\s*\|\|\s*!\s*sugarEntry\s*\)\s*die\s*\(\s*'Not A Valid Entry Point'\s*\)\s*;\s*\/\*+\s+=======\s+<\?php\s+if\s*\(\s*!\s*defined\s*\(\s*'sugarEntry'\s*\)\s*\|\|\s*!\s*sugarEntry\s*\)\s*{\s*die\s*\(\s*'Not A Valid Entry Point'\s*\)\s*;\s*}\s*\/\*\*\s+\*\s*>>>>>>> b29c16a8ccbfa0ada340f8a14ed23841cc6778ec/m" => 
    "<?php if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
/**
 *",
    
    "/<<<<<<< HEAD\s+<\?PHP\s+\/\*+\s*=======\s*<\?php\s*\/\*\*\s*\*\s*>>>>>>> b29c16a8ccbfa0ada340f8a14ed23841cc6778ec/m" => 
    "<?php
/**
 *",
    
    "/<<<<<<< HEAD\s*\*\s*=======\s*\*\s*\* SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd\.\s*\* Copyright \(C\) 2011 - 2018 SalesAgility Ltd\.\s*\*\s*>>>>>>> b29c16a8ccbfa0ada340f8a14ed23841cc6778ec/m" => 
    " *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *",
    
];

$excludedPaths = [];

$excludedFiles = [];

$excludedRegexes = ['/^\.git/'];

$excludedExtensions = [''];

$includedExtensions = [/*'css', 'scss', 'svg', 'tpl', 'html', */'php'];
