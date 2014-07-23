<?php
/**
*
* shareon [Dutch]
*
* @package language Share On
* @copyright (c) 2013 Vinny
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
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
	'SO_SELECT'				=> 'Delen via',
	// Share On viewtopic.php
	'SHARE_ON_FACEBOOK'		=> 'Delen via Facebook',
	'SHARE_ON_TWITTER'		=> 'Delen via Twitter',
	'SHARE_ON_TUENTI'		=> 'Delen via Tuenti',
	'SHARE_ON_SONICO'		=> 'Delen via Sonico',
	'SHARE_ON_FRIENDFEED'	        => 'Delen via FriendFeed',
	'SHARE_ON_DIGG'			=> 'Delen via Digg',
	'SHARE_ON_REDDIT'		=> 'Delen via Reddit',
	'SHARE_ON_DELICIOUS'	        => 'Delen via Delicious',
	'SHARE_ON_VK'			=> 'Delen via VK',
	'SHARE_ON_TUMBLR'		=> 'Delen via Tumblr',
	'SHARE_ON_GOOGLE'		=> 'Delen via Google+',
));
