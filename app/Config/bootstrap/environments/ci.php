<?php

Environment::configure('ci', false, [
    'MYSQL_DB_HOST' => 'localhost',
    'MYSQL_USERNAME' => 'webapp',
    'MYSQL_PASSWORD' => 'P@ssw0rd',
    'MYSQL_DB_NAME' => 'test_blog',
    'MYSQL_TEST_DB_NAME' => 'test_blog',
    'MYSQL_PREFIX' => '',
    ], function() {
        CakePlugin::load('Bdd');
        CakePlugin::load('Fabricate');
}
);