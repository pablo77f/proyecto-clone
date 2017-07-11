<?php

return [
    'driver' => env('MAIL_DRIVER', 'smtp'),
    'host' => env('MAIL_HOST', 'smtp.gmail.com'),
    'port' => env('MAIL_PORT', 587),
    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'linesutn@gmail.com'),
        'name' => env('MAIL_FROM_NAME', 'Contacto Pagina Lines'),
    ],
    'encryption' => env('MAIL_ENCRYPTION', 'tls'),
    'username' => 'linesutn@gmail.com',
    'password' => 'fdqssohbwuadddxq',
    'sendmail' => '/usr/sbin/sendmail -bs',
    'pretend' => FALSE
];
#fdqssohbwuadddxq
#https://myaccount.google.com/u/1/apppasswords
