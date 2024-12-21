<?php
    
    require 'src/Model/Customer.php';
    require 'src/Model/Product.php';

    /**
     * Since the Customer class now is namespaced, you need to use 
     * the fully qualified name
     */
    // $customer = new Store\Model\Customer('Bob');
    // echo $customer->getName();

    // use Store\Model;
    // $customer = new Model\Customer('Bob');
    // echo $customer->getName();

    /**
     *  we use the use operator to import the Customer class 
     * from the Store\Model namespace
     */

    // use Store\Model\Customer;
    // use Store\Model\Product;

    // you can import all the classes using a single statement:
    use Store\Model\{Customer, Product};

    $customer = new Customer('Bob');
    echo $customer->getName();

    $product = new Product();

    // --------------------------------------------------------

    require 'src/Utils/Logger.php';
    require 'src/Database/Logger.php';

    // use Store\Utils;
    // use Store\Database;

    // $logger = [
    //     new Utils\Logger(),
    //     new Database\Logger()
    // ];


    // Or you can give a class an alias when importing it:
    use Store\Utils\Logger;
    use Store\Database\Logger as DatabaseLogger;

    $logger = [
        new Logger(),
        new DatabaseLogger()
    ];

