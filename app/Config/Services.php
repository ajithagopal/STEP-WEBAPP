<?php

namespace Config;

use CodeIgniter\Config\BaseService;
use IP2Location\IP2Location;

/**
 * Services Configuration file.
 *
 * Services are simply other classes/libraries that the system uses
 * to do its job. This is used by CodeIgniter to allow the core of the
 * framework to be swapped out easily without affecting the usage within
 * the rest of your application.
 *
 * This file holds any application-specific services, or service overrides
 * that you might need. An example has been included with the general
 * method format you should use for your service methods. For more examples,
 * see the core Services file at system/Config/Services.php.
 */
class Services extends BaseService
{
    public static function IP2LocationService($getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('IP2LocationService');
        }

        return new \App\Libraries\IP2LocationService();
    }
    public static function IP2Location_lib($getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('IP2Location_lib');
        }

        return new \App\Libraries\IP2Location_lib();
    }

    public static $aliases = [
        // ...
        'ip2location_lib' => \App\Libraries\IP2Location_lib::class,
    ];

    public static $alwaysLoad = [
        // ...
        'ip2location_lib',
    ];

    /*
     * public static function example($getShared = true)
     * {
     *     if ($getShared) {
     *         return static::getSharedInstance('example');
     *     }
     *
     *     return new \CodeIgniter\Example();
     * }
     */
}
