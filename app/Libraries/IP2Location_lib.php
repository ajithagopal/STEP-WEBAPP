<?php
// BIN Database Setting
if(!defined('IP2LOCATION_DATABASE')) {
	define('IP2LOCATION_DATABASE', dirname(__FILE__) . '/ip2location/IP2LOCATION-DB.BIN');
}

// Web Service Settings
if(!defined('IP2LOCATION_API_KEY')) {
	define('IP2LOCATION_API_KEY', 'demo');
}

if(!defined('IP2LOCATION_PACKAGE')) {
	define('IP2LOCATION_PACKAGE', 'WS1');
}

if(!defined('IP2LOCATION_USESSL')) {
	define('IP2LOCATION_USESSL', false);
}

if(!defined('IP2LOCATION_ADDONS')) {
	define('IP2LOCATION_ADDONS', []);
}

if(!defined('IP2LOCATION_LANGUAGE')) {
	define('IP2LOCATION_LANGUAGE', 'en');
}

require_once('ip2location/Country.php');
require_once('ip2location/Database.php');
require_once('ip2location/IpTools.php');
require_once('ip2location/WebService.php');

class IP2Location_lib {
	private $database;

	protected static $ip2location;

	public function __construct() {
		self::$ip2location = new \IP2Location\Database('/ip2location/IP2LOCATION-DB.BIN', \IP2Location\Database::FILE_IO);
	}

	public function getCountryCode($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), \IP2Location\Database::COUNTRY_CODE);
	}

	public function getCountryName($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), \IP2Location\Database::COUNTRY_NAME);
	}

	public function getRegionName($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), \IP2Location\Database::REGION_NAME);
	}

	public function getCityName($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), \IP2Location\Database::CITY_NAME);
	}

	public function getLatitude($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), \IP2Location\Database::LATITUDE);
	}

	public function getLongitude($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), \IP2Location\Database::LONGITUDE);
	}

	public function getISP($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), \IP2Location\Database::ISP);
	}

	public function getDomainName($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), \IP2Location\Database::DOMAIN_NAME);
	}

	public function getZIPCode($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), \IP2Location\Database::ZIP_CODE);
	}

	public function getTimeZone($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), \IP2Location\Database::TIME_ZONE);
	}

	public function getNetSpeed($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), \IP2Location\Database::NET_SPEED);
	}
	public function getIDDCode($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), \IP2Location\Database::IDD_CODE);
	}

	public function getAreaCode($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), \IP2Location\Database::AREA_CODE);
	}

	public function getWeatherStationCode($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), \IP2Location\Database::WEATHER_STATION_CODE);
	}

	public function getWeatherStationName($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), \IP2Location\Database::WEATHER_STATION_NAME);
	}

	public function getMCC($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), \IP2Location\Database::MCC);
	}

	public function getMNC($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), \IP2Location\Database::MNC);
	}

	public function getMobileCarrierName($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), \IP2Location\Database::MOBILE_CARRIER_NAME);
	}

	public function getElevation($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), \IP2Location\Database::ELEVATION);
	}

	public function getUsageType($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), \IP2Location\Database::USAGE_TYPE);
	}

	public function getAddressType($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), \IP2Location\Database::ADDRESS_TYPE);
	}

	public function getCategory($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), \IP2Location\Database::CATEGORY);
	}

	public function getWebService($ip=NULL) {
		$ws = new \IP2Location\WebService(IP2LOCATION_API_KEY, IP2LOCATION_PACKAGE, IP2LOCATION_USESSL);
		return $ws->lookup(self::getIP($ip), IP2LOCATION_ADDONS, IP2LOCATION_LANGUAGE);
	}

	public function isIpv4($ip=NULL) {
		$ipTools = new \IP2Location\IpTools();
		return $ipTools->isIpv4($ip);
	}

	public function isIpv6($ip=NULL) {
		$ipTools = new \IP2Location\IpTools();
		return $ipTools->isIpv6($ip);
	}

	public function ipv4ToDecimal($ip=NULL) {
		$ipTools = new \IP2Location\IpTools();
		return $ipTools->ipv4ToDecimal($ip);
	}

	public function ipv6ToDecimal($ip=NULL) {
		$ipTools = new \IP2Location\IpTools();
		return $ipTools->ipv6ToDecimal($ip);
	}

	public function decimalToIpv4($num=NULL) {
		$ipTools = new \IP2Location\IpTools();
		return $ipTools->decimalToIpv4($num);
	}

	public function decimalToIpv6($num=NULL) {
		$ipTools = new \IP2Location\IpTools();
		return $ipTools->decimalToIpv6($num);
	}

	public function ipv4ToCidr($ipFrom=NULL, $ipTo=NULL) {
		$ipTools = new \IP2Location\IpTools();
		return $ipTools->ipv4ToCidr($ipFrom, $ipTo);
	}

	public function cidrToIpv4($cidr=NULL) {
		$ipTools = new \IP2Location\IpTools();
		return $ipTools->cidrToIpv4($cidr);
	}

	public function ipv6ToCidr($ipFrom=NULL, $ipTo=NULL) {
		$ipTools = new \IP2Location\IpTools();
		return $ipTools->ipv6ToCidr($ipFrom, $ipTo);
	}

	public function cidrToIpv6($cidr=NULL) {
		$ipTools = new \IP2Location\IpTools();
		return $ipTools->cidrToIpv6($cidr);
	}

	public function compressIpv6($ipv6=NULL) {
		$ipTools = new \IP2Location\IpTools();
		return $ipTools->compressIpv6($ipv6);
	}

	public function expandIpv6($ipv6=NULL) {
		$ipTools = new \IP2Location\IpTools();
		return $ipTools->expandIpv6($ipv6);
	}

	protected function getIP($ip=NULL) {
		return ($ip) ? $ip : $_SERVER['REMOTE_ADDR'];
	}
}
?>