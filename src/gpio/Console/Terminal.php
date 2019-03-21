<?php

namespace I9IoT\GPIO\Console;

/**
 * Class Terminal: Performs commands on the operating system terminal.
 *
 * @package     I9IoT\Gpio\Terminal
 * @author      Felipe Dominguesche <fe.dominguesche@gmail.com>
 * @version     Version 0.1.0
 * @access      public
 * @link        https://github.com/ioteducation/gpio
 * @since       Version 0.1.0
 */
class Terminal
{
    /**
     * @since Version 0.1.0
     * @param string $cmd
     * @return string
     */
    public static function exec(string $cmd): string
    {
        return exec($cmd);
    }
}