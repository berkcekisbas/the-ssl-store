<?php

namespace hasnhasan\TheSslStore\Core;

trait WebServerTypeValidator
{
	/**
	 * @link https://www.hasnhasan\TheSslStore.com/api/web-server-types
	 *
	 * @var array
	 */
	public static $webservertypes
		= [
			'AOL'                                   => 'aol',
			'Apache + MOD SSL'                      => 'apachessl',
			'Apache + Raven'                        => 'apacheraven',
			'Apache + SSLeay'                       => 'apachessleay',
			'Microsoft Internet Information Server' => 'iis',
			'Microsoft IIS 4.0'                     => 'iis4',
			'Microsoft IIS 5.0'                     => 'iis5',
			'C2Net Stronghold'                      => 'c2net',
			'IBM HTTP'                              => 'Ibmhttp',
			'IBM Internet Connection Server'        => 'Ibminternet',
			'iPlanet Server 4.1'                    => 'Iplanet',
			'Lotus Domiwno Go 4.6.2.51'             => 'Dominogo4625',
			'Lotus Domino Go 4.6.2.6+'              => 'Dominogo4626',
			'Lotus Domino 4.6+'                     => 'Domino',
			'Netscape Enterprise/FastTrack'         => 'Netscape',
			'Netscape FastTrack'                    => 'NetscapeFastTrack',
			'Zeus v3+'                              => 'zeusv3',
			'Other'                                 => 'Other',
			'Apache + OpenSSL'                      => 'apacheopenssl',
			'Apache 2'                              => 'apache2',
			'Apache + ApacheSSL'                    => 'apacheapachessl',
			'Cobalt Series'                         => 'cobaltseries',
			'Covalent Server Software'              => 'covalentserver',
			'Cpanel'                                => 'cpanel',
			'Ensim'                                 => 'ensim',
			'Hsphere'                               => 'hsphere',
			'Ipswitch'                              => 'ipswitch',
			'Plesk'                                 => 'plesk',
			'Jakart-Tomcat'                         => 'tomcat',
			'WebLogic – all versions'               => 'WebLogic',
			'O’Reilly WebSite Professional'         => 'website',
			'WebStar'                               => 'webstar',
			'SAP Web Application Server'            => 'sapwebserver',
			'WebTen (from Tenon)'                   => 'webten',
			'RedHat Linux'                          => 'redhat',
			'Raven SSL'                             => 'reven',
			'R3 SSL Server'                         => 'r3ssl',
			'Quid Pro Quo'                          => 'quid',
			'Oracle'                                => 'oracle',
			'Java Web Server (Javasoft / Sun)'      => 'javawebserver',
			'Cisco 3000 Series VPN Concentrator'    => 'cisco3000',
			'Citrix'                                => 'citrix',
		];

	/**
	 * @param array $args
	 */
	protected static function validateWebServerType(array $args)
	{
		if (!($webServerType = $args['WebServerType'] ?? NULL)) {
			throw new \InvalidArgumentException(
				sprintf(
					'Required "WebServerType" is missing.Allowed values are : %s'
					, implode(',', self::$webservertypes)
				)
			);
		};

		if (!in_array($webServerType, self::$webservertypes)) {
			throw new \InvalidArgumentException(
				'Invalid web server type: '.$webServerType
			);
		}
	}
}
