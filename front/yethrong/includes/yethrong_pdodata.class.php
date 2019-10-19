<?php

namespace yethrong\includes {
	
	use yethrong\core\yethrong_urlspath;
	
	class yethrong_pdodata extends yethrong_cache {
		/**
		 *
		 * @var string
		 */
		protected $distinct = '';
		/**
		 *
		 * @var string
		 */
		protected $fields = '';
		/**
		 *
		 * @var string
		 */
		protected $values = '';
		/**
		 *
		 * @var string
		 */
		protected $tables = '';
		/**
		 *
		 * @var string
		 */
		protected $force = '';
		/**
		 *
		 * @var string
		 */
		protected $join = '';
		/**
		 *
		 * @var string
		 */
		protected $wheres = '';
		/**
		 *
		 * @var string
		 */
		protected $group = '';
		/**
		 *
		 * @var string
		 */
		protected $having = '';
		/**
		 *
		 * @var string
		 */
		protected $order = '';
		/**
		 *
		 * @var string
		 */
		protected $limit = '';
		/**
		 *
		 * @var string
		 */
		protected $union = '';
		/**
		 *
		 * @var string
		 */
		protected $lock = '';
		/**
		 *
		 * @var string
		 */
		protected $comment = '';
		/**
		 *
		 * @var \PDO
		 */
		protected $dbSet = null;

		/**
		 *
		 * @var string
		 */
		protected $tempTables = '';
		/**
		 *
		 * @var string
		 */
		private $joinWheres = '';

		/**
		 *
		 * @var bool
		 */
		protected $logsave = true;

		/**
		 *
		 * @var bool
		 */
		protected $execute = false;

		/**
		 *
		 * @var \PDOstateMent
		 */
		protected $stateMent = null;

		/**
		 *
		 * @var string
		 */
		protected $primaryKey = null;
		
		protected static $configDB;

		/**
		 * 数据库链接
		 *
		 * @param string $hostname
		 *        	服务器名称地址
		 * @param string $dataname
		 *        	访问数据库名称
		 * @param string $rootuser
		 *        	数据库用户名称
		 * @param string $rootpass
		 *        	数据库用户密码
		 * @param array $config
		 *        	数据库配置信息
		 */
		public function connect(string $hostname = null, string $dataname = null, string $rootsuser = null, string $rootspass = null) {
			$connected = true;
			self::$configDB = yethrong_urlspath::$configs ['DB_CONFIG'];
			if ($this->dbSet) $this->dbSet = null;
			// 查检测系统是否开启PDO扩展
			if (! class_exists ( "PDO" )) die ( "请先开启PHP对PDO扩展的支持." ); 
			if (empty ( self::$configDB )) die ( "配置文件出错,请检查配置文件" );
			$connected = $connected && (!empty ( $hostname )  || !empty ( self::$configDB ['DB_HOST'] ));
			$connected = $connected && (!empty ( $dataname )  || !empty ( self::$configDB ["DB_NAME"] ));
			$connected = $connected && (!empty ( $rootsuser )   || !empty ( self::$configDB ["DB_USER"] ));
			//$connected = $connected && (!empty ( $rootspass )   || !empty ( self::$configDB ["DB_PASS"] ));
			
			$hostname = $hostname ?? self::$configDB ['DB_HOST'];
			$dataname = $dataname ?? self::$configDB ['DB_NAME'];
			$rootsuser = $rootsuser ?? self::$configDB ['DB_USER'];
			$rootspass = $rootspass ?? self::$configDB ['DB_PASS'];
			$hostport = self::$configDB ['DB_PORT'] ?? '';
			$datachar = self::$configDB ['DB_CHAR'] ??'UTF8';
			$datatype =self::$configDB ['DB_TYPE'] ?? 'mysql';
			$dataopen = self::$configDB ['DB_OPEN'] ?? array (\PDO::ATTR_AUTOCOMMIT => 1,\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC);
			$dsn = $datatype . ":host={$hostname}{$hostport};dbname={$dataname}";
			
			if($connected){
				try {
				    $this->dbSet = new \PDO ( $dsn, $rootsuser, $rootspass, $dataopen );
					if (! $this->dbSet) {
						throw new \Exception ( 'PDO数据链接不正确 </br>' );
					}
					$this->dbSet->exec ( 'SET NAMES ' . $datachar );
				} catch ( \Exception $e ) {
					$connected = FALSE;
					echo  ( '数据库链接出错:' . $e->getMessage () . ' 请检查数据库配置是否正确 </br>' );
				}
			}
			return $this->dbSet;
		}
		/**
		 * 执行语句预处理
		 *
		 * @param string $SQL
		 * @param array $arraySQL
		 * @return \PDOstateMent
		 */
		public function prepare(string $SQL = null, array $parames = null) {
			return $this->execute ( $SQL, $parames );
		}

		/**
		 *
		 * @param string $SQL
		 * @param string $result_type
		 * @return \PDOstateMent
		 */
		private function execute(string $SQL = null, array $parames = null) {
			if (! empty ( $SQL )) {
				if ($this->logsave) {
					// \SeasLog::setLogger ( 'SQLLog' );
					// \SeasLog::log ( 'execs', $SQL );
				}
				$this->logsave = true;
				$this->stateMent = $this->dbSet->prepare ( $SQL );
				$this->execute = $this->stateMent->execute ( $parames );
				$this->clearSQL ();
				return $this->stateMent;
			} else {
				if (empty ( $this->temptables )) {
					$this->temptables = $this->tables;
				}
				$SQL = sprintf ( self::selectSql, $this->distinct, $this->fields, $this->temptables, $this->force, $this->join, $this->wheres, $this->group, $this->having, $this->order, $this->limit, $this->union, $this->lock, $this->comment );

				$this->temptables = '';
				if ($this->logsave) {
					// \SeasLog::setLogger ( 'SQLLog' );
					// \SeasLog::log ( 'execs', $SQL );
				}
				$this->logsave = true;
				$this->stateMent = $this->dbset->prepare ( $SQL );
				$this->stateMent->execute ();
				$this->clearSQL ();
				return $this->stateMent;
			}
			return $this->stateMent;
		}
		/**
		 */
		public function distinct() {
			return $this;
		}

		/**
		 *
		 * @param mixed $fields 字段字符或数组
		 * @param bool $link 	false(默认) fields与value为分别的字符串，true fields = value
		 * @return self
		 */
		public function field($fields, bool $link = false) {
			if (is_array ( $fields )) {
				if (array_keys ( $fields ) !== range ( 0, count ( $fields ) - 1 )) {
					if ($link) {
						foreach ( $fields as $key => $var ) {
							if (! empty ( $this->fields ))
								$this->fields .= ',';
							$this->fields .= $key . ' = ' . $this->dbset->quote ( $var );
						}
					} else {
						$this->fields .= join ( ',', array_keys ( $fields ) );
						$value = array_values ( $fields );
						foreach ( $value as &$var )
							$var = $this->dbset->quote ( $var );
						$this->values .= join ( ',', $value );
					}
				} else {
					$this->fields .= join ( ',', $fields );
				}
			} else {
				$this->fields .= $fields;
			}
			return $this;
		}
		/**
		 */
		public function table(string $table, bool $linktable = false) {
			if ($linktable) $this->tables = $table;
			else                   $this->temptables = $table;
			return $this;
		}
		/**
		 */
		public function force() {
			return $this;
		}
		/**
		 */
		public function join(string $table, $where, int $type = 0) {
			$this->joinwhere ( $where );
			if ($type == 0) {
				$this->join = 'JOIN ' . $table . ' on ' . $this->joinwheres . ' ';
			} else if ($type == 1) {
				$this->join = 'LEFT JOIN ' . $table . ' on ' . $this->joinwheres . ' ';
			} else if ($type == 2) {
				$this->join = 'RIGHT JOIN ' . $table . ' on ' . $this->joinwheres . ' ';
			}

			return $this;
		}

		/**
		 * $this->wheress语句合成
		 *
		 * @param int $primary_id
		 * @param mixed $where
		 */
		public function joinwhere($where = null) {
			if (empty ( $where )) {
				return $this;
			} else if (is_array ( $where )) {
				foreach ( $where as $key => $var ) {
					if (! empty ( $this->joinwheres ))
						$this->joinwheres .= ' AND ';
					else
						$this->joinwheres .= $key . " = " . $var;
				}
			} else {
				if (! empty ( $this->joinwheres ))
					$this->joinwheres .= ' AND ';
				$this->joinwheres .= $where;
			}
			return $this;
		}

		/**
		 * $this->wheress语句合成
		 *
		 * @param int $primary_id
		 * @param mixed $where
		 */
		public function where(int $primary_id = 0, $where = null) {
			if (empty ( $where )) {
				if (! empty ( $this->primary_key ) && $primary_id > 0) {
					$this->wheres = ' WHERE `' . $this->primary_key . '` = ' . $this->dbset->quote ( $primary_id ) . '';
				} else
					return $this;
			} else if (is_array ( $where )) {
				foreach ( $where as $key => $var ) {
					if (! empty ( $this->wheres ))
						$this->wheres .= ' AND ';
					else
						$this->wheres = ' WHERE ';
					$this->wheres .= "`" . $key . "` = " . $this->dbset->quote ( $var );
				}
			} else {
				if (! empty ( $this->wheres ))
					$this->wheres .= ' AND ';
				else
					$this->wheres = ' WHERE ';
				$this->wheres .= $where;
			}
			return $this;
		}
		/**
		 * GROPU BY语句合成
		 *
		 * @param mixed $column
		 */
		public function groupBy($column) {
			if (is_array ( $column )) {
				foreach ( $column as $var ) {
					if (! empty ( $this->group ))
						$this->group .= ' , ';
					else
						$this->group = ' GROUP BY ';
					$this->group .= "`{$var}`";
				}
			} else {
				if (! empty ( $this->group ))
					$this->group .= ' , ';
				else
					$this->group = ' GROUP BY ';
				$this->group .= $column;
			}
			return $this;
		}
		/**
		 */
		public function having() {
			return $this;
		}
		/**
		 * ORDER BY语句合成
		 *
		 * @param mixed $column
		 */
		public function orderBy($column, $desc = '') {
			if (is_array ( $column )) {
				foreach ( $column as $var ) {
					if (! empty ( $this->order ))
						$this->order .= ' , ';
					else
						$this->order = ' ORDER BY ';
					$this->order .= "`{$var}`";
				}
				$this->order .= " " . $desc;
			} else {
				if (! empty ( $this->order ))
					$this->order .= ' , ';
				else
					$this->order = ' ORDER BY ';

				$this->order .= $column . " " . $desc;
			}
			$this->order = str_replace ( '.', '`.`', $this->order );
			return $this;
		}
		/**
		 * LIMIT语句合成
		 *
		 * @param int $init
		 * @param int $lastr
		 */
		public function limit(int $init, int $lastr = 0) {
			if (empty ( $this->limit ))
				$this->limit = ' LIMIT ';
			$this->limit .= $init . (empty ( ( string ) $lastr ) ? '' : ',' . ( string ) $lastr);
			return $this;
		}
		/**
		 * 联合查询
		 */
		public function union() {
			return $this;
		}
		/**
		 */
		public function lock() {
			return $this;
		}
		/**
		 * 修改注释
		 */
		public function comment() {
			// 修改表的注释
			// alter table test1 comment '
			// 修改字段的注释
			// alter table test1 modify column field_name int comment '
			// 修改后的字段注释
			return $this;
		}
		private function clearSQL() {
			$this->distinct = '';
			$this->fields = '';
			$this->force = '';
			$this->join = '';
			$this->wheres = '';
			$this->group = '';
			$this->having = '';
			$this->order = '';
			$this->limit = '';
			$this->union = '';
			$this->lock = '';
			$this->comment = '';
			$this->temptables = '';
			$this->joinwheres = '';
		}
		/**
		 * 析构方法
		 *
		 * @access public
		 */
		public function __destruct() {
			// 释放查询
			if ($this->stateMent) {
				$this->stateMent = null;
			}
			// 关闭连接
			$this->dbset = null;
		}
	}
}