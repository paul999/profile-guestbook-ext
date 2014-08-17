<?php
namespace paul999\profileguestbook\controller;


class main
{
	/** @var \phpbb\config\config */
	private $config;
	/** @var \phpbb\controller\helper */
	private $helper;
	/** @var \phpbb\user */
	private $user;
	/** @var \phpbb\template\template */
	private $template;
	/** @var \phpbb\db\driver\driver_interface */
	private $db;
	/** @var string */
	private $table;

	/**
	 * @param \phpbb\config\config              $config
	 * @param \phpbb\controller\helper          $helper
	 * @param \phpbb\template\template          $template
	 * @param \phpbb\user                       $user
	 * @param \phpbb\db\driver\driver_interface $db
	 * @param string                            $table
	 */
	public function __construct(\phpbb\config\config $config, \phpbb\controller\helper $helper, \phpbb\template\template $template, \phpbb\user $user, \phpbb\db\driver\driver_interface $db, $table)
	{
		$this->config   = $config;
		$this->helper   = $helper;
		$this->template = $template;
		$this->user     = $user;
		$this->db       = $db;
		$this->table    = $table;
	}

	/**
	 * @param int $user
	 */
	public function postAction($user)
	{

	}

	/**
	 * @param int $user
	 * @param int $post
	 */
	public function  editAction($user, $post)
	{

	}

	/**
	 * @param int $user
	 * @param int $post
	 */
	public function deleteAction($user, $post)
	{

	}

	/**
	 * @param int $user
	 * @param int $post
	 */
	public function reportAction($user, $post)
	{

	}

	/**
	 * @param int $user
	 * @param int $post
	 */
	public function infoAction($user, $post)
	{

	}
} 
