<?php
/**
* @package SP Page Builder
* @author JoomShaper http://www.joomshaper.com
* @copyright Copyright (c) 2010 - 2016 JoomShaper
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

SpAddonsConfig::addonConfig(
	array(
		'type'=>'repeatable',
		'addon_name'=>'sp_clients',
		'title'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLIENTS'),
		'desc'=>JText::_('COM_SPPAGEBUILDER_ADDON_CLIENTS_DESC'),
		'category'=>'Content',
		'attr'=>false,
		'pro'=>true,
	)
);
