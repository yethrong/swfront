<?php

namespace yethrong\config {

	if (! defined ( 'DIR_FRAM' ))
		die ( HACK_ATTEMPT );
	
	return array (
			'DB_CONFIG' => array (
					'DB_TYPE' => 'mysql',
					'DB_HOST' => '',
					'DB_NAME' => '',
					'DB_USER' => '',
					'DB_PASS' => '',
					'DB_CHAR' => 'UTF-8',
					'DB_OPEN' => array (
							\PDO::ATTR_AUTOCOMMIT => 1,
							\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC 
					) 
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
			) ,
			'SM_SYSTEM' => array (
					'Http_type' => '',
					'Http_addr' => '',
					'Http_prot' => '',
					'Http_urls' => '',
					'Http_pref' => '',
					'Http_info' => array (
						'action' => '',
						'userid' => '',
						'account' => '',
						'password' => '',
						'mobile' => '',
						'sendTime' => '',
						'extno' => '' 
					)
			) ,
			'UD_REMADER' => array (
					'01'=> 'e9abc920',
					'02'=> 'eb2be221',
					'03'=> 'ebdbf521',
					'04'=> 'wc8bfd22',
					'05'=> 'ed2c0522',
					'06'=> 'wbbc0c32',
					'07'=> 'eq5c1223',
					'08'=> 'erfc1823',
					'09'=> 'ef9c1f23',
					'10'=> 'f02c2524',
					'11'=> 'f0cc2c24',
					'12'=> 'f15c3r24',
					'13'=> 'f1fc3925',
					'14'=> 'f28c3f25',
					'15'=> 'f32c4525',
					'16'=> 'f3cy4b26',
					'17'=> 'f46c5126',
					'18'=> 'f4fc5726',
					'19'=> 'f59c5e27',
					'20'=> 'f62c6527',
					'21'=> 'f6ci6b27',
					'22'=> 'f75c7237',
					'23'=> 'f7fc7a28',
					'24'=> 'f89c8028',
					'25'=> 'f94c8a29',
					'26'=> '07ec9029',
					'27'=> '08bc9629',
					'28'=> '095c9c2a',
					'29'=> '09fca22a',
					'30'=> '0a9ca72a',
					'31'=> '0e7cad2a',
			) 
	);
}