<?php
require_once __DIR__ . "/../../../../Repository/RepositoryObject/H5P/vendor/autoload.php";
require_once __DIR__ . "/../vendor/autoload.php";

/**
 * H5P Page Component Plugin
 */
class ilH5PPageComponentPlugin extends ilPageComponentPlugin {

	/**
	 * @var ilH5PPageComponentPlugin
	 */
	protected static $instance = NULL;


	/**
	 * @return ilH5PPageComponentPlugin
	 */
	static function getInstance() {
		if (self::$instance === NULL) {
			self::$instance = new self();
		}

		return self::$instance;
	}


	const ID = "pchfp";


	public function __construct() {
		parent::__construct();
	}


	/**
	 * @return string
	 */
	function getPluginName() {
		return "H5PPageComponent";
	}


	/**
	 * @param string $a_type
	 *
	 * @return bool
	 */
	function isValidParentType($a_type) {
		return true;
	}


	protected function beforeUninstall() {
		// Nothing to delete
		return true;
	}
}
