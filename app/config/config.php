<?php
return[
    'routes'=> include('routes.php'),
    'db'=> ['driver' => 'mysqli',
        'host' => 'localhost',
        'db_name' => 'shop',
        'user' => 'root',
        'password' => '',
    ]
];