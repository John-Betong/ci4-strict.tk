<?php DECLARE(STRICT_TYPES=1); 
/*
  |--------------------------------------------------------------------------
  | ERROR DISPLAY
  |--------------------------------------------------------------------------
  | In development, we want to show as many errors as possible to help
  | make sure they don't make it to production. And save us hours of
  | painful debugging.
 */
error_reporting(-1);
ini_set('display_errors', 'true');

/*
  |--------------------------------------------------------------------------
  | DEBUG BACKTRACES
  |--------------------------------------------------------------------------
  | If true, this constant will tell the error screens to display debug
  | backtraces along with the other error information. If you would
  | prefer to not see this, set this value to false.
 */
if(0) :
  # defined('SHOW_DEBUG_BACKTRACE') || define('SHOW_DEBUG_BACKTRACE', true);
else:  
  defined('SHOW_DEBUG_BACKTRACE') || define('SHOW_DEBUG_BACKTRACE', TRUE);
endif;  

/*
  |--------------------------------------------------------------------------
  | DEBUG MODE
  |--------------------------------------------------------------------------
  | Debug mode is an experimental flag that can allow changes throughout
  | the system. This will control whether Kint is loaded, and a few other
  | items. It can always be used within your own application too.
 */
defined('CI_DEBUG') || define('CI_DEBUG', TRUE);
# echo __file__;die;