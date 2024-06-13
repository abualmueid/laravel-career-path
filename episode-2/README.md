# Introduction to Composer

## What is a composer

Composer is a tool for dependency management in PHP. It allows you to declare the libraries your project depends on and it will manage (install/update) them for you.

## How to use it

Let's say, we need to create some fake data using thrid party library called Faker.

1. Create a `composer.json` file.
2. Add the following code 
    ```sh
    {
        "require": {
            "fakerphp/faker": "1.0.0"
        }
    }
    ```
3. Use command in terminal `composer install` or `composer update`
4. It will install composer and the required library.
5. Then you can use the following code in index.php file.
    ```sh
    require 'vendor/autoload.php';

    $faker = Faker\Factory::create();
    echo $faker->name();
    ```
