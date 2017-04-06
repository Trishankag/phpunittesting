# phpunittesting
PHPUnit is a programmer-oriented testing framework for PHP. It is an instance of the xUnit architecture for unit testing frameworks.

# How to run the project with PHPUnit in your system?

Step 1 : Download the composer (Dependency system for PHP) in your system. Check the following link.
https://getcomposer.org/

Step2 : {
    "require": {
                "phpunit/phpunit": "dev-master"
    }
}

Copy the above JSON to a file named 'composer.json' on your project directory and run 'composer update' command.

Step 3 : To verify the installation, use your terminal/command line tool and go to your project directory. Then run the following command:
$./vendor/bin/phpunit

Step 4 : All the php files along with test files put in the bin folder.

Step 5 : Navigate to the folder where you have created the test file and run commands below from your terminal:

phpunit AddTest.php
