<?php
return [
    "views_path"    =>  "../app/views/",
    "mail"  =>  [
        "smtp"  =>  "smtp.gmail.com",
        "port"  =>  587,
        "encryption"    =>  "tls",
        "email" =>  "gtestovik39@gmail.com",
        "password"  =>  "gtestovik39!"
    ],
    "database"  =>  [
        "driver"    =>  "mysql",
        "host"  =>  "localhost",
        "database_name" =>  "insurance",
        "username"  =>  "root",
        "password"  =>  "",
      //Ostinger
        /*"database_name" =>  "u473969940_test",
        "username"  =>  "u473969940_test",
        "password"  =>  "POAtI9DVf6aT",*/

      //Sprinthost
      /*"database_name" =>  "a0196439_test",
      "username"  =>  "a0196439_test",
      "password"  =>  "4S4jwgtS",*/
    ],
    'uploadsFolder' =>  'uploads/'
];