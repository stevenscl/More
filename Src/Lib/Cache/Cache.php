<?php

namespace More\Src\Lib\Cache;

/**
 * Cache抽象类
 * Class Cache
 * @package Weekii\Lib\Cache
 */
abstract class Cache
{
    /**
     * @var int 默认的过期时间
     */
    protected $expire = 3600;

    protected $prefix = '';

    /**
     * Cache constructor.
     * @param array $options
     */
    abstract public function __construct(array $options);

    abstract public function set($key, $value, $expire = null);

    abstract public function get($key);

    abstract public function del($key);

    public function withPrefix($key)
    {
        return $this->prefix . $key;
    }
}