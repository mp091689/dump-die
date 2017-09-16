<?php
declare(strict_types=1);
/**
 * @link http://www.bintime.com
 * @copyright 2017 (c) Bintime
 * @author Mykyta Popov <m.popov@bintime.com>
 */

if (!function_exists('dd')) {
    function dd()
    {
        array_map(function ($x) {
            dump($x);
        }, func_get_args());
        die(1);
    }
}