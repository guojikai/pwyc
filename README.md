Smeller
=======
A Browser inspection tool,written by PHP.一个PHP写的浏览器检测工具，获取访客的操作系统、硬件类型、浏览器等信息。

Installation
------------
Install the latest stable version using composer:

```
composer require guojikai/smell
```
And require composer autoload file in your index file: (eg. index.php)

```php
require 'vendor/autoload.php';
```

Usege
-----
```php
<?php

use Smeller\Smeller;

$array = Smeller::smell(); 

var_dump($array);

?>
```

output：

```php
array:4 [
  "device" => "pc"
  "os" => "mac"
  "browser" => "chrome"
  "version" => 0
]
```

