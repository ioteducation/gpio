<?php

namespace I9IoT\Gpio\Pin;

/**
 * Class PinState: Default states for "gpio write <pin> <state>" or "gpio pwm <pin> <value>"
 * <state> can be HIGH (1) or LOW (0)
 * <value> can be any integer value between 0 and 1023
 * Reference: http://wiringpi.com/the-gpio-utility/
 *
 * @package     Gpio\Pin
 * @author      Felipe Dominguesche <fe.dominguesche@gmail.com>
 * @version     Version 0.1.0
 * @access      public
 * @link        https://github.com/ioteducation/gpio
 * @since       Version 0.1.0
 */
class PinState
{
    /**
     * @since Version 0.1.0
     * @var int
     */
    public const HIGH = 1;

    /**
     * @since Version 0.1.0
     * @var int
     */
    public const LOW = 0;
    /**
     * @since Version 0.1.0
     * @var int
     */
    public const UP = 1;

    /**
     * @since Version 0.1.0
     * @var int
     */
    public const DOWN = 0;
    /**
     * @since Version 0.1.0
     * @var int
     */
    public const ON = 1;

    /**
     * @since Version 0.1.0
     * @var int
     */
    public const OFF = 0;

    /**
     * @since Version 0.1.0
     * @var int
     */
    public const DEFAULT_STATE = self::LOW;

    /**
     * @since Version 0.1.0
     * @var int
     */
    public const DEFAULT_PWM = 0;

    /**
     * PWM var, accepts values between 0 and 1023
     *
     * @since Version 0.1.0
     * @var int
     */
    public $pwm = self::DEFAULT_PWM;

    /**
     * @since Version 0.1.0
     * @param int $state
     * @return bool
     */
    public function outputStateExists(int $state): bool
    {
        return $state == self::HIGH || $state == self::LOW;
    }

    /**
     * @since Version 0.1.0
     * @param int $state
     * @return bool
     */
    public function isDefaultOutputState(int $state): bool
    {
        return $state == self::DEFAULT_STATE;
    }

    /**
     * @since Version 0.1.0
     * @param int $value
     * @return bool
     */
    public function pwmValueExists(int $value): bool
    {
        return $value >= 0 && $value <= 1023;
    }

    /**
     * @since Version 0.1.0
     * @param int $value
     * @return bool
     */
    public function isDefaultPwm(int $value): bool
    {
        return $value == self::DEFAULT_PWM;
    }
}
