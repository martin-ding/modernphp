<?php 

$config = [
    "master" =>[
        "host" => "localhost",
        "dbname" => "test",
        "user" => "root",
        "password" => "xxxxx",
    ],
    "slave" => [
        "slave1" => [
            "host" => "localhost",
            "dbname" => "test",
            "user" => "root",
            "password" => "xxxxx",
        ],
        "slave2" => [
            "host" => "localhost",
            "dbname" => "test",
            "user" => "root",
            "password" => "xxxx",
        ],
    ]
];

return $config;