Pwyc
======
以前流行的最简单的PHP伪原创类，基于词典的同义词替换，现在用不到了。

安装
----
使用 Composer 安装：

```
composer require guojikai/pwyc
```
在入口文件引入 Composer 启动脚本： (eg. index.php)

```php
require 'vendor/autoload.php';
```

使用
----
```php
<?php

use Pwyc\Pwyc;

$new_text = Pwyc::replace('需要被替换的原文');

var_dump($new_text);

//输出替换后的文本

?>
```

