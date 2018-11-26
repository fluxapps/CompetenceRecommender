<?php

/* Copyright (c) 1998-2009 ILIAS open source, Extended GPL, see https://github.com/ILIAS-eLearning/ILIAS/tree/trunk/docs/LICENSE */

namespace feldbusl\Plugins\CompetenceRecommender\Config;

use feldbusl\Plugins\CompetenceRecommender\Utils\CompetenceRecommenderTrait;
use ilCompetenceRecommenderPlugin;
use ilTextInputGUI;
use srag\ActiveRecordConfig\CompetenceRecommender\ActiveRecordConfigFormGUI;

/**
 * Class ConfigFormGUI
 *
 * Generated by srag\PluginGenerator v0.9.7
 *
 * @package feldbusl\Plugins\CompetenceRecommender\Config
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 * @author  Leonie Feldbusch <feldbusl@informatik.uni-freiburg.de>
 */
class ConfigFormGUI extends ActiveRecordConfigFormGUI {

	use CompetenceRecommenderTrait;
	const PLUGIN_CLASS_NAME = ilCompetenceRecommenderPlugin::class;
	const CONFIG_CLASS_NAME = Config::class;


	/**
	 * @inheritdoc
	 */
	protected function initFields()/*: void*/ {
		$this->fields = [
			Config::KEY_SOME => [
				self::PROPERTY_CLASS => ilTextInputGUI::class,
				self::PROPERTY_REQUIRED => true
			]
		];
		// TODO: Implement ConfigFormGUI
	}
}