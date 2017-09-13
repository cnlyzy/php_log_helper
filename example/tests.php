<?php

/**
 * Created by PhpStorm.
 * User: CN
 * Date: 2017/9/9
 * Time: 15:19
 */

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