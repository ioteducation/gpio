<?php

namespace I9IoT\Gpio\Pin;

/**
 * Class PinType: Follow the rules of the cmd "gpio mode <pin> <type>" of Wiring Pi
 * <type> can be in/out/pwm/clock/up/down/tri
 * This sets the mode of a pin to be input, output, pwm or clock mode, and additionally can set
 * the internal pull-up/down resistors to pull-up, pull-down or none.
 * Reference: http://wiringpi.com/the-gpio-utility/
 *
 * @package     Gpio\Pin
 * @author      Felipe Dominguesche <fe.dominguesche@gmail.com>
 * @version     Version 0.1.0
 * @access      public
 * @link        https://github.com/ioteducation/gpio
 * @since       Version 0.1.0
 */
class PinMode
{
    /**
     * @since Version 0.1.0
     * @var string
     */
    public const INPUT = 'in';

    /**
     * @since Version 0.1.0
     * @var string
     */
    public const OUTPUT = 'out';

    /**
     * @since Version 0.1.0
     * @var string
     */
    public const PWM = 'pwm';

    /**
     * @since Version 0.1.0
     * @var string
     */
    public const CLOCK = 'clock';

    /**
     * @since Version 0.1.0
     * @var string
     */
    public const UP = 'up';

    /**
     * @since Version 0.1.0
     * @var string
     */
    public const DOWN = 'down';

    /**
     * @since Version 0.1.0
     * @var string
     */
    public const TRI = 'tri';

    /**
     * @since Version 0.1.0
     * @var string
     */
    public const DEFAULT_MODE = self::OUTPUT;

    /**
     * @since Version 0.1.0
     * @var array
     */
    public const AVAILABLE_OPTIONS = [
        self::INPUT,
        self::OUTPUT,
        self::PWM,
        self::CLOCK,
        self::UP ,
        self::DOWN,
        self::TRI,
    ];

    /**
     * @since Version 0.1.0
     * @param string $mode
     * @return bool
     */
    public function modeExists(string $mode): bool
    {
        return in_array($mode, self::AVAILABLE_OPTIONS);
    }

    /**
     * @since Version 0.1.0
     * @param string $mode
     * @return bool
     */
    public function isDefaultMode(string $mode): bool
    {
        return $mode == self::DEFAULT_MODE;
    }

}