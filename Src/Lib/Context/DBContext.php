<?php
/**
 * Created by PhpStorm.
 * User: weeki
 * Date: 2019/4/7
 * Time: 16:06
 */

namespace Src\Lib\Context;

use Src\Core\Swoole\Coroutine\Context\Context;

/**
 * DB Coroutine Context Manager
 * Class DBContext
 * @package Weekii\Core\Swoole\Coroutine\Context
 */
class DBContext extends Context
{
    protected static $prefix = 'db';
}