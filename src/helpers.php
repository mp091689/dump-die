<?php declare(strict_types=1);
/**
 * Helper function
 *
 * @link https://github.com/mp091689/dump-die
 * @copyright 2017 (c) MP091689
 * @author Mykyta Popov <mp091689@gmail.com>
 */

if (!function_exists('dd')) {

    /**
     * Dump and die helper.
     * Best dumping practises from Symfony and Laravel frameworks.
     * The basic is idea of Laravel to combine two methods dump() and die() together.
     * In this package we've used pretty dark dump() method from Symfony.
     */
    function dd()
    {
        array_map(function ($param) {
            dump($param);
        }, func_get_args());
        die(1);
    }
}