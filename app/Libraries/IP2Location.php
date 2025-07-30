<?php

namespace App\Libraries;

use IP2Location\Database;

class IP2Location
{
    protected $ip2location;

    public function __construct()
    {
        $databaseFile = FCPATH . 'vendor/ip2location/IP2LOCATION-LITE-DB11.BIN/IP2LOCATION-LITE-DB11.BIN';

        $this->ip2location = new Database($databaseFile, Database::FILE_IO);
        
    }
    public function getCountryCode($ipAddress)
    {
        $result = $this->ip2location->lookup($ipAddress, Database::COUNTRY);
                #var_dump('IP2',$result);


        if ($result !== false && isset($result['countryCode'])) {
            return $result['countryCode'];
        } else {
            return 'Unknown';
        }
    }


  
}

