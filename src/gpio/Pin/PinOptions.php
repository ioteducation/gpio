<?php

namespace I9IoT\GPIO\Pin;

/**
 * Class PinOptions
 *
 * @package     I9IoT\GPIO\Pin
 * @author      Felipe Dominguesche <fe.dominguesche@gmail.com>
 * @version     Version 0.1.0
 * @access      public
 * @link        https://github.com/ioteducation/gpio
 * @since       Version 0.1.0
 */
class PinOptions
{
    /**
     * @since Version 0.1.0
     * @var string
     */
    public const BCM_GPIO = '-g';

    /**
     * @since Version 0.1.0
     * @var string
     */
    public const DEFAULT_OPTION = self::BCM_GPIO;

    /**
     * @since Version 0.1.0
     * @var array
     */
    public const AVAILABLE_OPTIONS = [
        self::BCM_GPIO,
    ];

    /**
     * @since Version 0.1.0
     * @param string $option
     * @return bool
     */
    public static function optionExists(string $option): bool
    {
        return in_array($option, self::AVAILABLE_OPTIONS);
    }

    /**
     * @since Version 0.1.0
     * @param string $option
     * @return bool
     */
    public function isDefaultOption(string $option): bool
    {
        return $option == self::DEFAULT_OPTION;
    }
}