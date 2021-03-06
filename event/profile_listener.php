<?php

namespace paul999\profileguestbook\event;


class profile_listener implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
{
	/** @var \phpbb\user */
	private $user;
	/** @var \phpbb\template\template */
	private $template;
	/** @var \phpbb\db\driver\driver_interface */
	private $db;
	/** @var string */
	private $table;

	/**
	 * @param \phpbb\template\template          $template
	 * @param \phpbb\user                       $user
	 * @param \phpbb\db\driver\driver_interface $db
	 * @param string                            $table
	 */
	public function __construct(\phpbb\template\template $template, \phpbb\user $user, \phpbb\db\driver\driver_interface $db, $table)
	{
		$this->template = $template;
		$this->user     = $user;
		$this->db       = $db;
		$this->table    = $table;
	}

	static public function getSubscribedEvents()
	{
		return array(
			//        'core.user_setup'            => 'load_language_on_setup',
			//        'core.page_header'            => 'add_page_header_link',
			'core.memberlist_view_profile' => 'add_guestbook_profile',
		);
	}

	public function add_guestbook_profile()
	{
		$this->user->add_lang_ext('paul999/profileguestbook', 'profile_guestbook');
	}
}
