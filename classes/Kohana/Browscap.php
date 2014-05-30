<?php

defined('SYSPATH') or die('No direct script access.');

require_once Kohana::find_file('vendor', 'phpbrowscap/src/phpbrowscap/Browscap');

/**
 * Wrapper for phpbrowscap. It contains a singleton instance of browscap. 
 * Default cache directory is APPPATH . cache.
 * 
 * @package Browscap
 * @author  Guillaume Poirier-Morency <guillaumepoiriermorency@gmail.com>
 * @license BSD-3-Clauses
 */
class Kohana_Browscap {
    
    protected static $instance;

    /**
     * Get an instance of phpbrowscap.
     * 
     * @return \phpbrowscap\Browscap
     */
    public static function instance() {

        if (Browscap::$instance === NULL) {

            $cache_dir = Kohana::$config->load('browscap.cache_dir');
            
            Browscap::$instance = new \phpbrowscap\Browscap($cache_dir);
        }

        return Browscap::$instance;

    }

}
