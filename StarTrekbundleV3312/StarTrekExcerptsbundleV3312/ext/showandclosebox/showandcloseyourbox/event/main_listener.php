<?php
/**
*
* Show and close your box extension for the phpBB Forum Software package.
* copyright (c) 2015 - 2022 Talk19Zehn by OnGray-Design.de https://www.ongray-design.de
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

namespace showandclosebox\showandcloseyourbox\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class main_listener implements EventSubscriberInterface
{
	/* @var \phpbb\template\template */
	protected $template;

	/* @var \phpbb\user */
	protected $user;

	/**
	* Constructor
	*
	* @param \phpbb\template	$template	Template object
	* @param \phpbb\user		$user		User Object
	*
	*/
	public function __construct(
		\phpbb\template\template $template,
		\phpbb\user $user
	)
	{
		$this->template		= $template;
		$this->user			= $user;
	}

	public static function getSubscribedEvents()
	{
		return [
			'core.user_setup'	=> 'add_language',
			'core.page_header'	=> 'showandclosebox_img_path'
		];
	}

	public function add_language($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
			$lang_set_ext[] = [
			'ext_name'	=> 'showandclosebox/showandcloseyourbox',
			'lang_set'	=> 'showandcloseyourbox'
			];
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function showandclosebox_img_path()
	{
		$showandclosebox_style_img_path	= generate_board_url() . '/ext/showandclosebox/showandcloseyourbox/styles/' . rawurlencode($this->user->style['style_path']) . '/theme/images';
		$this->template->assign_vars([
			'T_EXT_SHOWANDCLOSEBOX_IMG_PATH'	=> $showandclosebox_style_img_path
		]);
	}
}
