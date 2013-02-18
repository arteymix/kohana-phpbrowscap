<?php

defined('SYSPATH') or die('No direct script access.');

require_once Kohana::find_file("vendor", "phpbrowscap/src/phpbrowscap/Browscap");

/**
 * Wrapper for phpbrowscap. It contains a singleton instance of browscap. 
 * Default cache directory is APPPATH . cache.
 * 
 * @package Browscap
 * @author Guillaume Poirier-Morency <guillaumepoiriermorency@gmail.com>
 */
class Kohana_Browscap {

    public static $cache_file = "cache";

    /**
     * Get an instance of phpbrowscap.
     * 
     * @return \phpbrowscap\Browscap
     */
    public static function instance() {
        return new \phpbrowscap\Browscap(APPPATH . static::$cache_file);
    }

}

?>
