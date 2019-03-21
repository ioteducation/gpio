<?php

namespace I9IoT\GPIO\Actions;

use I9IoT\GPIO\Exceptions\GPIOBadMethodCallException;
use I9IoT\GPIO\Pin\PinOptions;
use I9IoT\GPIO\Console\Terminal;

/**
 * Class Actions
 *
 * @package     I9IoT\GPIO\Actions
 * @author      Felipe Dominguesche <fe.dominguesche@gmail.com>
 * @version     Version 0.1.0
 * @access      public
 * @link        https://github.com/ioteducation/gpio
 * @since       Version 0.1.0
 */
class Actions
{
    /**
     * @since Version 0.1.0
     * @var string
     */
    private $option;

    /**
     * Actions constructor.
     *
     * @since Version 0.1.0
     * @param string $option
     * @throws \I9IoT\GPIO\Exceptions\GPIOBadMethodCallException
     */
    public function __construct(string $option)
    {
        if (!PinOptions::optionExists($option)) throw new GPIOBadMethodCallException();
        $this->option = $option;
    }

    /**
     * @since Version 0.1.0
     * @param int $pin
     * @param string $mode
     * @return string
     */
    public function pinMode(int $pin, string $mode): string
    {
        $cmd = Mode::mainFunction($pin, $mode);
        $cmd = str_replace(':option', $this->option, $cmd);
        return Terminal::exec($cmd);
    }

    /**
     * @since Version 0.1.0
     * @param int $pin
     * @param int $state
     * @return string
     */
    public function digitalWrite(int $pin, int $state): string
    {
        $cmd = Write::mainFunction($pin, $state);
        $cmd = str_replace(':option', $this->option, $cmd);
        return Terminal::exec($cmd);
    }

    /**
     * @since Version 0.1.0
     * @param int $pin
     * @return string
     */
    public function digitalRead(int $pin): string
    {
        $cmd = Read::mainFunction($pin);
        $cmd = str_replace(':option', $this->option, $cmd);
        return Terminal::exec($cmd);
    }

}