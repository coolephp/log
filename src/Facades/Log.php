<?php

declare(strict_types=1);

/**
 * This file is part of Coole.
 *
 * @link     https://github.com/guanguans/coole
 * @contact  guanguans <ityaozm@gmail.com>
 * @license  https://github.com/guanguans/coole/blob/main/LICENSE
 */

namespace Coole\Log\Facades;

use Coole\Foundation\Facades\Facade;

/**
 * @method static \Monolog\Logger log($level, $message, array $context = [])
 * @method static \Monolog\Logger debug($level, $message, array $context = [])
 * @method static \Monolog\Logger info($level, $message, array $context = [])
 * @method static \Monolog\Logger notice($level, $message, array $context = [])
 * @method static \Monolog\Logger warning($level, $message, array $context = [])
 * @method static \Monolog\Logger error($level, $message, array $context = [])
 * @method static \Monolog\Logger critical($level, $message, array $context = [])
 * @method static \Monolog\Logger alert($level, $message, array $context = [])
 * @method static \Monolog\Logger emergency($level, $message, array $context = [])
 *
 * @see \Monolog\Logger
 */
class Log extends Facade
{
    /**
     * {@inheritdoc}
     */
    public static function getFacadeAccessor()
    {
        return 'log';
    }
}
