<?php


// app/Middleware/MyMiddleware.php

namespace App\Middleware;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class MyMiddleware implements \CodeIgniter\HTTP\MiddlewareInterface
{
    public function before(RequestInterface $request)
    {
        $ipAddress = $_SERVER['REMOTE_ADDR'];
        var_dump('middleware',$ipAddress);
        if ($ipAddress= '127.0.0.1'){
                 $countryCode = IN;
        }else{
            $ip2locationService = new IP2Location();
            $countryCode = $ip2locationService->getCountryCode($ipAddress);
            var_dump('middleware',$countryCode);

       }
    
        // Store countryCode in session for later use
        session()->set('countryCode', $countryCode);

        $isUserInIndia = ($countryCode === 'IN');

           if ($isUserInIndia) {
               session()->set('location_preference', 'India');
           } else {
               session()->set('location_preference', 'International');
           }
    }

    public function after(RequestInterface $request, ResponseInterface $response)
    {
        // Your middleware logic here
    }
}


?>
