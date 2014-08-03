<?php

namespace paul999\profileguestbook\event;


class profile_listener implements Symfony\Component\EventDispatcher\EventSubscriberInterface {

	private $user;
	private $template;
	private $db;

	/**
	 * @param \phpbb\template\template $template
	 * @param \phpbb\user $user
	 * @param \phpbb\db\driver\driver_interface $db
	 */
	public function __construct(\phpbb\template\template $template, \phpbb\user $user, \phpbb\db\driver\driver_interface $db)
	{
		$this->template = $template;
		$this->user =  $user;
		$this->db = $db;
	}

	static public function getSubscribedEvents()
	{
		return array(
	//        'core.user_setup'            => 'load_language_on_setup',
	//        'core.page_header'            => 'add_page_header_link',
			'core.memberlist_view_profile'  => 'add_guestbook_profile',
		);
	}

	public function add_guestbook_profile()
	{

	}
}
