<?php
//var_dump($_SERVER);
require $_SERVER['DOCUMENT_ROOT'] . '/Laracasts/Routing/core/bootstrap.php';

require Router::load('routes.php')
    ->direct(Request::uri());