<?php 

$app = [];

$app['config'] = require './config.php'; 

require 'core/database/connection.php';
require 'core/database/querybuilder.php';
require 'core/router.php' ; 
require 'core/task.php';
require 'core/request.php';

$app['database'] = new QueryBuilder(

    Connection::make($app['config']['database'])
    
);
