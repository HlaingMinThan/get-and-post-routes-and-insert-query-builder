<?php

require "core/functions.php";
require "core/Router.php";
require "core/Request.php";
require "core/database/Connection.php";
require "core/database/QueryBuilder.php";
$config=require "config.php";
$database=new QueryBuilder(
    Connection::make($config['database'])
);
