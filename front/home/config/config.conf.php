<?php

namespace yethrong\config {

	if (! defined ( 'DIR_FRAM' ))
		die ( HACK_ATTEMPT );
	
	return array (
			'DB_CONFIG' => array (
					'DB_TYPE' => 'mysql',
					'DB_HOST' => '127.0.0.1',
					'DB_NAME' => 'yethrong',
					'DB_USER' => 'root',
					'DB_PASS' => '8580922',
					'DB_CHAR' => 'UTF-8',
					'DB_OPEN' => array (\PDO::ATTR_AUTOCOMMIT => 1,\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC ) 
			),
			'EG_SYSTEM' => array (
					'SmartyCaching' => true,
					'FilesCaching' => true,
					'DatasCaching' => true,
					'Urls_Type' => 3,
					'Code_mode' => 'UTF-8',
					'Link_Data' => 1,
					'Lang_Mode' => 'CN',
					'Cache_Time' => 3600,
					'Cookie_Time' => 3600,
					'UseSubDirs' => false,
					'Data_Dir' => 'data',
					'Cache_Dir' => 'cache',
					'Compiled_Dir' => 'compiled',
					'Template_Dir' => 'template',
					'Plugins_Dir' => 'plugins',
					'Resoure_Dir' => 'resoure',
					'Config_Dir' => 'config',
					'Left_Delimiter' => '<!-- {',
					'Right_Delimiter' => '} -->' ,
			),
			'FM_SYSTEM' => array (
					'Suffix' => '.tpl',
					'Prefixes' => 'yd_',
					'MerchantID' => '1',
					'Http_Type' => 'http',
					'Secret_Key' => 'jk346tu5',
					'Address_urls' => 'http://ip.taobao.com/service/getIpInfo.php?ip=',
			) 
	);
}