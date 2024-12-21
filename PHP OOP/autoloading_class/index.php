<?php

    require_once 'functions.php';

    $contact = new Contact('jhon.doe@example.com');

    echo Email::send($contact);