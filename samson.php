<?php
namespace samson\js\md5;

/**
 * Интерфейс для подключения модуля в ядро фреймворка SamsonPHP
 *
 * @package SamsonPHP
 * @author Vitaly Iegorov <vitalyiegorov@gmail.com>
 * @author Nikita Kotenko <nick.w2r@gmail.com>
 * @version 0.1
 */
class SJSMD5Connector extends \samson\core\CompressableExternalModule
{
	protected $id = 'md5';	
	
	/** Module dependencies */
	protected $requirements = array('samsonjs');
}