<?php
/**
 * @version		$Id: mod_aboutus.php 786 2018-02-05 17:40:09 kaushik.shivendra@gmail.com
 * @copyright	@copyright	Copyright (c) 2018 3steechnosolutions. All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */
defined('_JEXEC') or die;

// include the syndicate functions only once
require_once __DIR__ . '/helper.php';

$class_sfx = htmlspecialchars($params->get('class_sfx'));

require(JModuleHelper::getLayoutPath('mod_aboutus', $params->get('layout', 'default')));