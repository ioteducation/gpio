<?php

namespace I9IoT\GPIO\Device;

use I9IoT\GPIO\Actions\Actions;
use I9IoT\GPIO\Pin\Pin;
use I9IoT\GPIO\Pin\PinMode;
use I9IoT\GPIO\Pin\PinOptions;

/**
 * Class Device: Gerencia o modelo de dispositivo
 *
 * @package     I9IoT\GPIO\Device
 * @author      Felipe Dominguesche <fe.dominguesche@gmail.com>
 * @version     Version 0.1.0
 * @access      public
 * @link        https://github.com/ioteducation/gpio
 * @since       Version 0.1.0
 */
class Device
{
    /**
     * @since Version 0.1.0
     * @var array
     */
    public $pins = [];

    /**
     * @since Version 0.1.0
     * @var \I9IoT\GPIO\Actions\Actions
     */
    public $actions;

    /**
     * @since Version 0.1.0
     * @var string
     */
    private $option;

    /**
     * Device constructor.
     *
     * @since Version 0.1.0
     * @param string $option
     * @throws
     */
    public function __construct(string $option = PinOptions::DEFAULT_OPTION)
    {
        $this->option = $option;
        $this->actions  = new Actions($option);
    }

    /**
     * Cria um novo 
     *
     * @since Version 0.1.0
     * @param int $pin
     * @param string $mode
     * @return Pin
     * @throws \I9IoT\GPIO\Exceptions\GPIOException
     */
    public function newPin(int $pin, string $mode = PinMode::DEFAULT_MODE)
    {
        return $this->pins[] = new Pin($pin, $mode, $this->option);
    }
}