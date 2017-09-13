# php_log_helper
php_log_helper for SeasLog

## 首先需要 安装 和 配置 SeasLog扩展
> 详细参考 [官方文档](https://github.com/Neeke/SeasLog/blob/master/README_zh.md#%E7%BC%96%E8%AF%91%E5%AE%89%E8%A3%85-seaslog)

#### 编译安装 SeasLog
```sh
$ /path/to/phpize
$ ./configure --with-php-config=/path/to/php-config
$ make && make install
```

#### PECL安装SeasLog
```sh
$ pecl install seaslog
```

#### Windows环境中使用SeasLog
到PECL/SeasLog主页找到对应的dll进行安装 [PECL/SeasLog Windows Dll](http://pecl.php.net/package/SeasLog/1.6.0/windows)

## 安装php log helper for SeasLog
```php
composer require lyzy/slog
```
## 使用
> tips：本扩展包也可以当成SeasLog扩展编辑器语法提示使用

```php
<?php

use lyzy\SLog;

require_once "vendor/autoload.php";

SLog::log(SEASLOG_ERROR,'this is a error test by ::log');

SLog::debug('this is a {userName} debug',array('{userName}' => 'neeke'));

SLog::info('this is a info log');

SLog::notice('this is a notice log');

SLog::warning('your {website} was down,please {action} it ASAP!',array('{website}' => 'github.com','{action}' => 'rboot'));

SLog::error('a error log');

SLog::critical('some thing was critical');

SLog::alert('yes this is a {messageName}',array('{messageName}' => 'alertMSG'));

SLog::emergency('Just now, the house next door was completely burnt out! {note}',array('{note}' => 'it`s a joke'));
```