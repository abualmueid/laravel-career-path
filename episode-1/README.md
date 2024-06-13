# Episode-1: How to use autoloading with php

1. require 'autoload.php' in index.php file.
2. In autoload.php file register your own autoload function. 

```

spl_autoload_register(function($className){
    $baseDir = "classes/";

    require_once $baseDir . $className . '.php';
});

```