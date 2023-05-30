<?php

    //mysqli_connect

    $connect = mysqli_connect('localhost', 'root', '','testAuth');

    if(!$connect) {
        die('Error connect to database');
    }