<?php

namespace I9IoT\Gpio\Pin;

use \I9IoT\GPIO\Actions\Actions;

/**
 * Class Pin:
 *
 * @package     Gpio\Pin
 * @author      Felipe Dominguesche <fe.dominguesche@gmail.com>
 * @version     Version 0.1.0
 * @access      public
 * @link        https://github.com/ioteducation/gpio
 * @since       Version 0.1.0
 */
class Pin
{
    /**
     * @since Version 0.1.0
     * @var int
     */
    public $pin;

    /**
     * @since Version 0.1.0
     * @var string
     */
    public $mode;

    /**
     * @since Version 0.1.0
     * @var int
     */
    public $state;

    /**
     * @since Version 0.1.0
     * @var \I9IoT\GPIO\Actions\Actions
     */
    public $actions;

    /**
     * Pin constructor.
     *
     * @since Version 0.1.0
     * @param int $pin
     * @param string $mode
     * @param int $state
     * @param string $option
     */
    public function __construct(int $pin, string $mode, string $option)
    {
        $this->pin   = $pin;
        $this->mode  = $mode;
        $this->setup($option);
    }

    /**
     * @since Version 0.1.0
     * @param string $option
     * @throws \I9IoT\GPIO\Exceptions\GPIOException
     */
    private function setup(string $option)
    {
        $actions = new Actions($option);
        $actions->pinMode($this->pin, $this->mode);
    }
}