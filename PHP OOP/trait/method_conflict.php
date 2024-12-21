<?php

    trait FileLogger
    {
        public function log($msg)
        {
            echo 'File Logger ' . date('Y-m-d h:i:s') . ':' . $msg . '<br/>';
        }
    }

    trait DatabaseLogger
    {
        public function log($msg)
        {
            echo 'Database Logger ' . date('Y-m-d h:i:s') . ':' . $msg . '<br/>';
        }
    }

    class Logger
    {
        // use FileLogger, DatabaseLogger {
        //     FileLogger::log insteadof DatabaseLogger;
        // }

        // aliasing trait method
        /**
         * By using aliases for the same method name 
         * of multiple traits, you can reuse all the methods in those traits.
         */

        use FileLogger, DatabaseLogger {
            DatabaseLogger:: log as logToDatabase;
            FileLogger::log insteadof DatabaseLogger;
        }
    }

    $logger = new Logger();
    $logger->log('this is a test message #1');
    $logger->log('this is a test message #2');
