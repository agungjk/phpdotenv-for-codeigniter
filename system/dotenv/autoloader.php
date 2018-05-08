<?php

require_once 'Dotenv.php';
require_once 'Loader.php';
require_once 'Validator.php';


if (!function_exists('env')) {
    // Define function `env` if it doesn't already exists
    
    /**
     * Gets the environment varaible if set or returns the second argument
     * 
     * @param string    $varname
     * The variable. null will return all environment varaibles
     * 
     * @param mixed     $default_value
     * The value to return if $varname is not set
     * 
     * @return array|mixed
     */
    function env($varname = null, $default_value = "") {
        if (is_null($varname)) {
            return getenv();
        }
        return getenv($varname) ? getenv($varname) : $default_value;
    }
}
