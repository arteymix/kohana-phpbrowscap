<?php

require_once Kohana::find_file("vendor", "phpbrowscap/src/phpbrowscap/Browscap");

class Browscap {

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
