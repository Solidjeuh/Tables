<?php
/**
* @package phpBB Extension - Tables
* @copyright (c) 2017 Sniper_E (http://sniper-e.com)
* Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACL_U_USE_TABLES_BBCODE'		=> 'Kan tabellen BBcode gebruiken',
));
