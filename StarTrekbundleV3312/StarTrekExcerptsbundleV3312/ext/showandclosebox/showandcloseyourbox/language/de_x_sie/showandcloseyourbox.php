<?php
/**
*
* Show and close your box extension for the phpBB Forum Software package.
* copyright (c) 2015 - 2022ff Talk19Zehn by OnGray-Design.de https://www.ongray-design.de
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
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
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, [
	'SHOWANDCLOSEBOXESINFO'					=> 'Info-Box',
	'SHOWANDCLOSEBOXESUSERONLINEACTIVE'		=> 'Status Active-Online',
	'SHOWANDCLOSEBOXESUSERWELCOME'			=> 'Hallo',
	'SHOWANDCLOSEBOXESNEWMESSAGES'			=> 'Mein Postfach',
	'SHOWANDCLOSEBOXES_NO_MESSAGES'			=> 'Postfächer verwalten',
	'SHOWANDCLOSEBOXESIMG_FIRST'			=> 'Link-Grafiktitel',
	'SHOWANDCLOSEBOXESIMG_SECOND'			=> 'Link-Grafiktitel',
	'SHOWANDCLOSEBOXESIMG_THIRD'			=> 'Link-Grafiktitel',
	'SHOWANDCLOSEBOXESHEADLINE'				=> 'Willkommen an Bord',
	'SHOWANDCLOSEBOXES_TEXT'				=> 'Leben Sie lang und in Frieden!',
	'SHOWANDCLOSECONDITIONS'				=> '<br>Unsere <a style="text-decoration: underline;" href="#">Informationen</a> einsehen.<br>',
	'SHOWANDCLOSEBOXES_READMORE'			=> 'Bitte weiterlesen',
	'SHOWANDCLOSEBOXESLINK_FIRST'			=> 'Ein Link',
	'SHOWANDCLOSEBOXESLINK_SECOND'			=> 'Noch ein Link',
	'SHOWANDCLOSEBOXESLINK_THIRD'			=> 'Dritter Link',
	'KNOB_INFO_TOOLTIP'						=> 'Sichtbarkeit umschalten',
]);
