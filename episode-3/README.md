# Episode-3: How to use autoloading using composer

1. Create `composer.json` file and add autoload feature there. For example-
    ```
    {
        "autoload": {
            "psr-4": {
                "App\\Classes\\": "app/classes"
            }
        }
    }
    ```

    Here, Left side indicates namespace name and right side is the directory value of the classes need to be autoloaded.

2. Use command `composer install` or `composer update` or `composer dump-autoload`.
3. Use proper namespace in the classes need to be autoloaded.
4. In `index.php` file require `vendor/autoload.php` file.
5. Finally run the file using `php index.php` command.
