<?php

require_once __DIR__.'/router.php';

get('/', 'views/index.php');
get('/login', 'views/index.php');
get('/register', 'views/register.php');

post('/login', 'bridges/select_user.php');
post('/register', 'bridges/create_user.php');

any('/404','views/404.php');