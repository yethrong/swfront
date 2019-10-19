<?php

namespace yethrong\core\modular {

	use yethrong\core\yethrong_function;
	use yethrong\includes\interfaces\yethrong_idecorator;
		
	class yethrong_views extends yethrong_function {

		/**
		 *
		 * @var \model
		 */
		public static $modelobj;
		/**
		 *
		 * @var \control
		 */
		public static $controlobj;

		/**
		 *
		 * @var \Smarty
		 */
		public static $smarty;
		
		/**
		 *
		 * @var yethrong_idecorator
		 */
		private $decorator = array ();

		/**
		 * 模板初始化程序
		 */
		public function init(string $templpath = null, string $template = null) {
			//$arr_file = array();
			//self::dirListTree($arr_file, DIR_TEMPLATE , false,APPS_PATCH . self::$configs ['EG_SYSTEM'] ['Template_Dir']);

			self::$modelobj    = self::$modelThis;
			self::$controlobj  = self::$controlThis;
			if (! self::$smarty) self::$smarty = new \Smarty ();
			//- $force_compile为true时每次用户访问页面都会重新编译模板，应设为false，减少io
			//- $compile_check为true时smarty会检查模板文件的变更，有变更会重新编译，应设为true
			self::$smarty -> auto_literal = TRUE;
			self::$smarty->compile_locking = TRUE;
			self::$smarty->setConfigDir ( DIR_CONFIG);
			self::$smarty->setCacheDir ( DIR_CACHE);
			self::$smarty->setPluginsDir ( DIR_PLUGINS );
			self::$smarty->setCompileDir ( DIR_COMPILED);
			self::$smarty->setTemplateDir ( DIR_TEMPLATE );
			self::$smarty->cache_lifetime = CACHE_TIME;
			self::$smarty->caching = APPS_DEBUG  && CACHE_APPS;
			self::$smarty->force_cache = !self::$smarty->caching;
			self::$smarty->assign ('URLS_ROOT', WEBS_ROOT );
			self::$smarty->assign ('URLS_DATA', WEBS_DATA );
			self::$smarty->assign ('URLS_CONFIG', WEBS_CONFIG );
			self::$smarty->assign ('URLS_PLUGINS', WEBS_PLUGINS );
			self::$smarty->assign ('URLS_TEMPLATE', WEBS_TEMPLATE );
			self::$smarty->assign ('URLS_RESOURES', WEBS_RESOURES );
			self::$smarty->assign ('URLS_APPS', WEBS_ROOT . APPS_PATCH);
			self::$smarty->assign ('URLS_JS', WEBS_RESOURES . 'js' . DEL_SEPARATOR );
			self::$smarty->assign ('URLS_ICO', WEBS_RESOURES . 'ico' . DEL_SEPARATOR );
			self::$smarty->assign ('URLS_CSS', WEBS_RESOURES . 'css' . DEL_SEPARATOR );
			self::$smarty->assign ('URLS_IMG', WEBS_RESOURES . 'img' . DEL_SEPARATOR );
			self::$smarty->assign ('URLS_FONT', WEBS_RESOURES . 'font' . DEL_SEPARATOR );
			self::$smarty->assign ('URLS_PATH', WEBS_ROOT . 'index' . DEL_SEPARATOR);
			self::$smarty->assign ('URLS_SUFFIX', self::$configs ['FM_SYSTEM'] ['Suffix'] );
			self::$smarty->assign ('URLS_FIXES', APPS_PREFIXES ?? self::$configs ['FM_SYSTEM'] ['Prefixes'] );
			self::$smarty->left_delimiter = self::$configs ['EG_SYSTEM'] ['Left_Delimiter'];
			self::$smarty->right_delimiter = self::$configs ['EG_SYSTEM'] ['Right_Delimiter'];
			self::$smarty->setUseSubDirs ( self::$configs ['EG_SYSTEM'] ['UseSubDirs'] ?? FALSE );
			self::$smarty->registerPlugin ( 'function', 'ajaxTrans', array ($this,'ajaxTrans' ) );
			self::$smarty->registerPlugin ( 'function', 'getLink', array ($this,'getLink' ) );
			self::$smarty->registerPlugin ( 'function', 'URL', array ($this,'URL' ) );
			self::$smarty->registerPlugin ( 'function', 'Unid', array ($this,'Unid' ) );
		}
		/**
		 *
		 * @param string $decorator
		 * @param mixed $creat_value
		 * @param mixed $befor_value
		 * @param mixed $after_value
		 */
		public function add_decorators($decorator, $creat_value = null, $befor_value = null, $after_value = null) {
			if (! isset ( $this->decorator [$decorator] )) {
				$this->decorator [$decorator] = $this->creat_decorator ( $decorator, $creat_value, $befor_value, $after_value );
			}
		}
		/**
		 *
		 * @param string $decorator
		 * @param mixed $creat_value
		 * @return yethrong_idecorator
		 */
		private function creat_decorator($decorator, $creat_value, $befor_value = null, $after_value = null) {
			$decorator = $decorator . '_decorator';
			return new $decorator ( $creat_value, $befor_value, $after_value );
		}
		/**
		 *
		 * @return string
		 */
		private function befor_decorator($decorator, $value, array $param) {
			return $this->decorator [$decorator]->beforRequest ( $value, $param );
		}
		/**
		 *
		 * @return string
		 */
		private function after_decorator($decorator, $value, array $param) {
			return $this->decorator [$decorator]->afterRequest ( $value, $param );
		}
		/**
		 *
		 * @param string $decorator
		 * @param string $tpl_var
		 * @param mixed $value
		 * @param bool $nocache
		 */
		public function assign_decorator($decorator, $tpl_var, $value = null, array $param, $nocache = false) {
			$value = $this->befor_decorator ( $decorator, $value, $param );
			$value = $this->after_decorator ( $decorator, $value, $param );
			self::$smarty->assign ( $tpl_var, $value, $nocache );
		}
		/**
		 *
		 * {@inheritdoc}
		 *
		 * @see \Smarty::display()
		 */
		public function display($template = null, $temppath = null , $cache_id = null, $compile_id = null, $parent = null) {
			if (empty ( $template ))  $template  = self::$views;
			if (! strpos ( $template, '.' )) $template .= self::$configs ['FM_SYSTEM'] ['Suffix'];
			if (empty ( $temppath ))  {
			    $temppath = self::$control . self::$subPath ;
			    if (!strstr ( $template, '/' )) $temppath .= DEL_SEPARATOR;
			}
			if(substr($template, 0,2) != (APPS_PREFIXES ?? self::$configs ['FM_SYSTEM'] ['Prefixes']))
				$template =  (APPS_PREFIXES ?? self::$configs ['FM_SYSTEM'] ['Prefixes']) . $template;
			if (self::$smarty->caching) {
				$cache_id = $cache_id ?? md5 ( $_SERVER ['REQUEST_URI'] );
				$compile_id = $compile_id ?? md5 ( $_SERVER ['REQUEST_URI'] );
			}
			self::$smarty->display ($temppath .  $template, $cache_id, $compile_id, $parent );
		}
		
		/**
		 *
		 * @param string $params
		 * @param array $smarty
		 * @return string
		 */
		public static function ajaxTrans($params, $smarty) {
			$match = array();
			$urlsdata = array();
			$readdata = null;
			$tempdata = explode ( ',', $params ['inc_soure'] );
			$urlsdata ['c'] = $tempdata [0];
			$urlsdata ['m'] = $tempdata [1];
			unset ( $tempdata [0], $tempdata [1] );
			foreach ( $tempdata as $var ) {
				if (empty ( $readdata )) {
					$readdata = $var;
				} else {
					$urlsdata [$readdata] = $var;
					$readdata = null;
				}
			}
			if (preg_match_all ( '/\{\$?(.+?)\}/', $params ['get_query'], $match ) > 0) {
				$constdata = get_defined_constants ( true ) ['user'];
				$tpltmdata = self::$smarty->tpl_vars;
				foreach ( $match [1] as $var ) {
					if (array_key_exists ( $var, $tpltmdata )) {
						$params ['get_query'] = str_replace ( '{$' . $var . '}', $tpltmdata [$var], $params ['get_query'] );
					} elseif (array_key_exists ( $var, $constdata )) {
						$params ['get_query'] = str_replace ( '{' . $var . '}', $constdata [$var], $params ['get_query'] );
					}
				}
			}
			$params ['get_query'] = getUnid ($params ['get_query']);
			
			return "get_cat_recommend('" . self::U ( $urlsdata ) . "','{$params['rec_object']}','{$params['get_query']}');";
		}
		public function Unid($params, $smarty){
			$param = $params ['param'] ?? null;
			return $this->getUnid($param);
		}
		/**
		 * @param string $params
		 * @return string
		 */
		public static function getUnid($params = null) {
			$unid = uniqid ();
			$enid = self::encrypt ( $unid );
			$_SESSION [$unid] = $enid;
			if (empty ( $params ))
				return 'null&unid=' . $enid;
				else
					return $params . '&unid=' . $enid;
		}
		/**
		 *
		 * @param string $params
		 * @param array $smarty
		 * @return string
		 */
		public function getLink($params, $smarty) {
		    
		    $urlspath = '';
		    $urlsdata = '';
			$tempfile = array();
			$tempfile = explode ( ',', $params ['files'] );
			
			$params ['inc'] = $params ['inc'] ?? false;
			$params ['root'] = $params ['root'] ?? false;
			
			$frampath = DIR_FRAM .  'core' . DEL_SEPARATOR  .  'modular' . DEL_SEPARATOR . 'template' . DEL_SEPARATOR . 'resoure'  . DEL_SEPARATOR . 'default' . DEL_SEPARATOR ;
			$framwebs = substr(WEBS_ROOT, 1) . FRAM_NAME .  'core' . DEL_SEPARATOR  .  'modular' . DEL_SEPARATOR . 'template' . DEL_SEPARATOR . 'resoure'  . DEL_SEPARATOR . 'default' . DEL_SEPARATOR ;
			
		    foreach ( $tempfile as $var ) {
		        $urlspath = '';
		        if(is_file(DIR_RESOURES . $params ['type'] . DEL_SEPARATOR   . $tempfile[0])) $urlspath = WEBS_RESOURES . strtolower ( $params ['type'] ). DEL_SEPARATOR   . $var;
		        elseif(is_file($frampath . $params ['type'] . DEL_SEPARATOR   . $tempfile[0]))   $urlspath = DEL_SEPARATOR . $framwebs . strtolower ( $params ['type'] ) . DEL_SEPARATOR   . $var;
		        if(!empty($urlspath)){
    		        if(strtolower ( $params ['type'] ) == 'css')       $urlsdata .= '<link rel="stylesheet" type="text/css" href="' . $urlspath . '" />' . "\r\n";
    		       else if(strtolower ( $params ['type'] ) == 'js')  $urlsdata .= '<script type="text/javascript" src="' . $urlspath . '"></script>' . "\r\n";
		        }
		    }
			return $urlsdata;
		}
		public function URL($params, $smarty) {
			$link = $params ['link'] ?? null;
			$link = explode ( ',', $link );
			
			$temps = null;
			$taram = $params ['param'] ?? null;
			$taram = explode ( ',', $taram );
			$param = array ('c' => '','m' => '' );
			
			foreach ( $taram as $var ) {
				if (empty ( $temps )) {
					$temps = $var;
				} else {
					$param [$temps] = $var;
					$temps = null;
				}
			}
			if (isset ( $link [1] )) {
				$controll = $link [0];
				$model = $link [1];
			} else {
				$controll = $params ['c'] ?? 'index';
				$model = $params ['m'] ?? 'index';
			}
			$param ['c'] = $controll;
			$param ['m'] = $model;
			return self::U ( $param );
		}
		/**
		 *
		 * @param array $urlparam
		 * @param int $urls_type
		 * @return string
		 */
		public static function U(array $urlparam = null, int $urls_type = URLS_TYPE) {
			
			$urlparam ['a'] = $urlparam ['a'] ?? null;
			if (strtolower ( APPS_NAME ) != strtolower ( APPS_PATH ) && strtolower ( $urlparam ['a'] ) != strtolower ( APPS_PATH )) {
				$urlparam ['a'] = APPS_NAME;
			} elseif ($urlparam ['a'] == null)
			unset ( $urlparam ['a'] );
			$urlobj = HTTP_TYPE . ROOT_PATH;
			if ($urls_type == self::URLS_DEFAULT) {
				$urlobj .= '?y=';
				foreach ( $urlparam as $key => $var ) {
					$urlobj .= DEL_SEPARATOR . $key . DEL_SEPARATOR . $var;
				}
			} elseif ($urls_type == self::URLS_DYNAME) {
				$firstparam = false;
				$urlobj .= '?';
				foreach ( $urlparam as $key => $var ) {
					if ($firstparam)
						$urlobj .= '&';
						$urlobj .= $key . '=' . $var;
						$firstparam = true;
				}
			} elseif ($urls_type == self::URLS_STATIC) {
				$firstparam = false;
				foreach ( $urlparam as $key => $var ) {
					if ($firstparam)
						$urlobj .= DEL_SEPARATOR;
						$urlobj .= $key . DEL_SEPARATOR . $var;
						$firstparam = true;
				}
				$urlobj .= '.html';
			}
			return $urlobj;
		}
		/**
		 * @param array $RSSInfo
		 * @param array $RSSItem
		 */
		public static function RSS($RSSInfo,$RSSItem){
			//$RSS= new yethrong_creatrss("名称","地址","描述","RSS频道图标");
			//$RSS->AddItem("日志的标题","日志的地址","日志的摘要","日志的发布日期");
			//$RSS->Display();//输出RSS内容
		}
	}
}