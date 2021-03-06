<?php

require_once __DIR__ . "/../../../../Repository/RepositoryObject/H5P/vendor/autoload.php";
require_once __DIR__ . "/../vendor/autoload.php";

use srag\Plugins\H5P\Content\Content;
use srag\Plugins\H5P\Utils\H5PTrait;
use srag\RemovePluginDataConfirm\H5P\PluginUninstallTrait;

/**
 * Class ilH5PPageComponentPlugin
 *
 * @author studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class ilH5PPageComponentPlugin extends ilPageComponentPlugin {

	use PluginUninstallTrait;
	use H5PTrait;
	const PLUGIN_ID = "pchfp";
	const PLUGIN_NAME = "H5PPageComponent";
	const PLUGIN_CLASS_NAME = ilH5PPlugin::class;
	const REMOVE_PLUGIN_DATA_CONFIRM = false;
	const REMOVE_PLUGIN_DATA_CONFIRM_CLASS_NAME = H5PRemoveDataConfirm::class;
	/**
	 * @var self|null
	 */
	protected static $instance = NULL;


	/**
	 * @return self
	 */
	public static function getInstance() {
		if (self::$instance === NULL) {
			self::$instance = new self();
		}

		return self::$instance;
	}


	/**
	 * ilH5PPageComponentPlugin constructor
	 */
	public function __construct() {
		parent::__construct();
	}


	/**
	 * @return string
	 */
	public function getPluginName() {
		return self::PLUGIN_NAME;
	}


	/**
	 * @param string $a_type
	 *
	 * @return bool
	 */
	public function isValidParentType($a_type) {
		// Allow in all parent types
		return true;
	}


	/**
	 * @param array  $properties
	 * @param string $plugin_version
	 *
	 * @since ILIAS 5.3
	 */
	public function onDelete($properties, $plugin_version) {
		$h5p_content = Content::getContentById($properties["content_id"]);

		if ($h5p_content !== NULL) {
			self::h5p()->show_editor()->deleteContent($h5p_content);
		}
	}


	/**
	 * @param array  $properties
	 * @param string $plugin_version
	 *
	 * @since ILIAS 5.3
	 */
	public function onClone(&$properties, $plugin_version) {
		$h5p_content = Content::getContentById($properties["content_id"]);

		/**
		 * @var Content $h5p_content_copy
		 */

		$h5p_content_copy = $h5p_content->copy();

		$h5p_content_copy->store();

		self::h5p()->storage()->copyPackage($h5p_content_copy->getContentId(), $h5p_content->getContentId());

		$properties["content_id"] = $h5p_content_copy->getContentId();
	}


	/**
	 * @inheritdoc
	 */
	protected function deleteData()/*: void*/ {
		// Nothing to delete
	}
}
