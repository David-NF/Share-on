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
// ACP
'SO_ACP'	=> 'Share On Extension',
    'SO_TITLE'	=> 'Share On Extensie instellingen',
'SO_EXPLAIN'	=> 'Je kan hier instellen naar welke sociale media websites, de topics/berichten gedeeld kunnen worden.',	
'SHARE_ON_MOD'	=> 'Share On',
'SO_CONFIG'	=> 'Instellingen',
'SO_SELECT'	=> 'Delen via',
'SO_VERSION_OLD'	=> 'Huidige versie van de extensie',
'SO_VERSION_NEW'	=> 'Laatste versie van de extensie',
'SO_SAVED'	=> 'Instellingen succesvol bijgewerkt..',
'SO_STATUS'	=> 'Share on extensie inschakelen',
'SO_FACEBOOK'	=> 'Facebook',
'SO_TWITTER'	=> 'Twitter',
'SO_DIGG'	=> 'Digg',
'SO_REDDIT'	=> 'Reddit',
'SO_DELICIOUS' => 'Delicious',
'SO_VK'	=> 'VK',
'SO_TUENTI'	=> 'Tuenti',
'SO_SONICO'	=> 'Sonico',
'SO_FRIENDFEED'	=> 'FriendFeed',
'SO_TUMBLR'	=> 'Tumblr',
'SO_GOOGLE'	=> 'Google+',

// Share Type
'SO_TYPE'	=> 'Deel Type',
'SO_TYPE_EXPLAIN'	=> 'Je kan kiezen om alleen <strong>topics</strong> te delen, of je kan ieder <strong>bericht</strong> uit het topic apart delen.',
));
