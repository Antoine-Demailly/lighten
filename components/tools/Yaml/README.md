Yaml Component
==============

YAML implements most of the YAML 1.2 specification.

```php
use components\tools\Yaml\Yaml;

$array = Yaml::parse(file_get_contents(filename));

print Yaml::dump($array);
```

Resources
---------

You can run the unit tests with the following command:

    $ cd path/to/Symfony/Component/Yaml/
    $ composer install
    $ phpunit
