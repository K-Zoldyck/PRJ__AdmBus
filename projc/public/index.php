<?php
    $db_user = getenv('DB_USER');
    $db_pass = getenv('DB_PASS');
    $db_name = getenv('DB_NAME');
    $db_host = getenv('DB_HOST');

    echo $db_user;
    echo $db_pass;
    echo $db_name;
    echo $db_host;
?>