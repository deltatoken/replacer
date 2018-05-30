<?php

$path = '/var/www/html/SuiteAssured/tests';

$regexes = [
    '/\$state\-\>pushTable\(\'aod_index\'\);/' => '',
    '/\$state\-\>popTable\(\'aod_index\'\);/' => '',
    '/\$state\-\>pushTable\(\'aod_indexevent\'\);/' => '',
    '/\$state\-\>popTable\(\'aod_indexevent\'\);/' => '',
    '/\$state\-\>pushTable\(\'leads_cstm\'\);/' => '',
    '/\$state\-\>popTable\(\'leads_cstm\'\);/' => '',
];

$excludedPaths = array(
    '_data/',
    '_envs/',
    '_output/',
    '_support/',
    'acceptance/',
    'api/',
    'demo/',
    'functional/',
    'install/',
);

$excludedFiles = array(
);
