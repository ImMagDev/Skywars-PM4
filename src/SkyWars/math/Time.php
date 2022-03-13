<?php

/**
 * Plugin by: ImMagDev
 * For: MagicMC
 */


declare(strict_types=1);

namespace Skywars\math;

/**
 * Class Time
 * @package skywars\math
 */
class Time {

    /**
     * @param int $time
     * @return string
     */
    public static function calculateTime(int $time): string {
        return gmdate("i:s", $time); 
    }
}