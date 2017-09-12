<?php
/**
 * Created by PhpStorm.
 * User: CN
 * Date: 2017/9/9
 * Time: 13:21
 */

namespace lyzy;

if (!defined('SEASLOG_ALL')) define('SEASLOG_ALL', 'ALL');
if (!defined('SEASLOG_DEBUG')) define('SEASLOG_DEBUG', 'DEBUG');
if (!defined('SEASLOG_INFO')) define('SEASLOG_INFO', 'INFO');
if (!defined('SEASLOG_NOTICE')) define('SEASLOG_NOTICE', 'NOTICE');
if (!defined('SEASLOG_WARNING')) define('SEASLOG_WARNING', 'WARNING');
if (!defined('SEASLOG_ERROR')) define('SEASLOG_ERROR', 'ERROR');
if (!defined('SEASLOG_CRITICAL')) define('SEASLOG_CRITICAL', 'CRITICAL');
if (!defined('SEASLOG_ALERT')) define('SEASLOG_ALERT', 'ALERT');
if (!defined('SEASLOG_EMERGENCY')) define('SEASLOG_EMERGENCY', 'EMERGENCY');
if (!defined('SEASLOG_DETAIL_ORDER_ASC')) define('SEASLOG_DETAIL_ORDER_ASC', 1);
if (!defined('SEASLOG_DETAIL_ORDER_DESC')) define('SEASLOG_DETAIL_ORDER_DESC', 2);

class SLog
{
    public function __construct()
    {
        #SeasLog init
        //TODO 初始化
    }

    public function __destruct()
    {
        #SeasLog distroy
    }

    /**
     * 设置basePath
     *
     * @param $basePath
     *
     * @return bool
     */
    static public function setBasePath($basePath)
    {
        return \SeasLog::setBasePath($basePath);
    }

    /**
     * 获取basePath
     *
     * @return string
     */
    static public function getBasePath()
    {
        return \SeasLog::getBasePath();
    }

    /**
     * 设置本次请求标识
     * @param string
     * @return bool
     */
    static public function setRequestID($request_id){
        //TODO 1.7版本后才有此功能
        return TRUE;
    }
    /**
     * 获取本次请求标识
     * @return string
     */
    static public function getRequestID(){
        //TODO 1.7版本后才有此功能
        return uniqid();
    }

    /**
     * 设置模块目录
     * @param $module
     *
     * @return bool
     */
    static public function setLogger($module)
    {
        return \SeasLog::setLogger($module);
    }

    /**
     * 获取最后一次设置的模块目录
     * @return string
     */
    static public function getLastLogger()
    {
        return \SeasLog::getLastLogger();
    }

    /**
     * 设置DatetimeFormat配置
     * @param $format
     *
     * @return bool
     */
    static public function setDatetimeFormat($format)
    {
        //TODO 未生效，待查证
        return \SeasLog::setDatetimeFormat($format);
    }

    /**
     * 返回当前DatetimeFormat配置格式
     * @return string
     */
    static public function getDatetimeFormat()
    {
        return \SeasLog::getDatetimeFormat();
    }

    /**
     * 统计所有类型（或单个类型）行数
     * @param string $level
     * @param string $log_path
     * @param null   $key_word
     *
     * @return array | long
     */
    static public function analyzerCount($level = 'all', $log_path = '*', $key_word = NULL)
    {
        if ($level == 'all') {
            return \SeasLog::analyzerCount($level);
        } else {
            return \SeasLog::analyzerCount($level, $log_path, $key_word);
        }
    }

    /**
     * 以数组形式，快速取出某类型log的各行详情
     *
     * @param        $level 默认info
     * @param string $log_path
     * @param null   $key_word
     * @param int    $start
     * @param int    $limit
     * @param        $order 默认为正序 SEASLOG_DETAIL_ORDER_ASC，可选倒序 SEASLOG_DETAIL_ORDER_DESC
     *
     * @return array
     */
    static public function analyzerDetail($level = SEASLOG_ERROR, $log_path = '*', $key_word = NULL, $start = 1, $limit = 20, $order = SEASLOG_DETAIL_ORDER_ASC)
    {
        return \SeasLog::analyzerDetail($level,$log_path,$key_word,$start,$limit,$order);
    }

    /**
     * 获得当前日志buffer中的内容
     *
     * @return array
     */
    static public function getBuffer()
    {
        return \SeasLog::getBuffer();
    }

    /**
     * 将buffer中的日志立刻刷到硬盘
     *
     * @return bool
     */
    static public function flushBuffer()
    {
        return \SeasLog::flushBuffer();
    }

    /**
     * 记录debug日志
     *
     * @param        $message
     * @param array  $content
     * @param string $module
     */
    static public function debug($message, array $content = array(), $module = '')
    {
        #$level = SEASLOG_DEBUG
        \SeasLog::debug($message,$content,$module);
    }

    /**
     * 记录info日志
     *
     * @param        $message
     * @param array  $content
     * @param string $module
     */
    static public function info($message, array $content = array(), $module = '')
    {
        #$level = SEASLOG_INFO
        \SeasLog::info($message,$content,$module);
    }

    /**
     * 记录notice日志
     *
     * @param        $message
     * @param array  $content
     * @param string $module
     */
    static public function notice($message, array $content = array(), $module = '')
    {
        #$level = SEASLOG_NOTICE
        \SeasLog::notice($message,$content,$module);
    }

    /**
     * 记录warning日志
     *
     * @param        $message
     * @param array  $content
     * @param string $module
     */
    static public function warning($message, array $content = array(), $module = '')
    {
        #$level = SEASLOG_WARNING
        \SeasLog::warning($message,$content,$module);
    }

    /**
     * 记录error日志
     *
     * @param        $message
     * @param array  $content
     * @param string $module
     */
    static public function error($message, array $content = array(), $module = '')
    {
        #$level = SEASLOG_ERROR
        \SeasLog::error($message,$content,$module);
    }

    /**
     * 记录critical日志
     *
     * @param        $message
     * @param array  $content
     * @param string $module
     */
    static public function critical($message, array $content = array(), $module = '')
    {
        #$level = SEASLOG_CRITICAL
        \SeasLog::critical($message,$content,$module);
    }

    /**
     * 记录alert日志
     *
     * @param        $message
     * @param array  $content
     * @param string $module
     */
    static public function alert($message, array $content = array(), $module = '')
    {
        #$level = SEASLOG_ALERT
        \SeasLog::alert($message,$content,$module);
    }

    /**
     * 记录emergency日志
     *
     * @param        $message
     * @param array  $content
     * @param string $module
     */
    static public function emergency($message, array $content = array(), $module = '')
    {
        #$level = SEASLOG_EMERGENCY
        \SeasLog::emergency($message,$content,$module);
    }

    /**
     * 通用日志方法
     * @param        $level
     * @param        $message
     * @param array  $content
     * @param string $module
     */
    static public function log($level, $message, array $content = array(), $module = '')
    {
        \SeasLog::log($level,$message,$content,$module);
    }
}