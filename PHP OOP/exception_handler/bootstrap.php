<?php

    set_exception_handler(function (Exception $exception){

        // set default timezone
        date_default_timezone_set('Asia/Manila');

        // get the current date & time
        $time = date('F j, Y, g:i a e');

        // format the exception message
        $message = "[{$time}] {$exception->getMessage()}\n";

        // append to the error log
        /**
         * The second argument (3) of the error_log() function 
         * indicates that it will append the log entry in the 
         * errors.log file.
         */
        error_log($message, 3, 'logs/errors.log');

        // Sho a user-friendly message
        echo 'Whoops, looks like something went wrong!';
    });