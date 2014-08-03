<?php

namespace paul999\profileguestbook\guestbook\entity;


class post {
	private $user;
	private $poster;
	private $text;
	private $posttime;
	private $ip;
	private $bbcode_uuid;
	private $bbcode_bitfield;

	/**
	 * @param mixed $ip
	 */
	public function setIp($ip)
	{
		$this->ip = $ip;
	}

	/**
	 * @return mixed
	 */
	public function getIp()
	{
		return $this->ip;
	}

	/**
	 * @param mixed $posttime
	 */
	public function setPosttime($posttime)
	{
		$this->posttime = $posttime;
	}

	/**
	 * @return mixed
	 */
	public function getPosttime()
	{
		return $this->posttime;
	}

	/**
	 * @param string $bbcode_bitfield
	 */
	public function setBbcodeBitfield($bbcode_bitfield)
	{
		$this->bbcode_bitfield = $bbcode_bitfield;
	}

	/**
	 * @return string
	 */
	public function getBbcodeBitfield()
	{
		return $this->bbcode_bitfield;
	}

	/**
	 * @param string $bbcode_uuid
	 */
	public function setBbcodeUuid($bbcode_uuid)
	{
		$this->bbcode_uuid = $bbcode_uuid;
	}

	/**
	 * @return string
	 */
	public function getBbcodeUuid()
	{
		return $this->bbcode_uuid;
	}

	/**
	 * @param int $poster
	 */
	public function setPoster($poster)
	{
		$this->poster = $poster;
	}

	/**
	 * @return int
	 */
	public function getPoster()
	{
		return $this->poster;
	}

	/**
	 * @param string $text
	 */
	public function setText($text)
	{
		$this->text = $text;
	}

	/**
	 * @return string
	 */
	public function getText()
	{
		return $this->text;
	}

	/**
	 * @param int $user
	 */
	public function setUser($user)
	{
		$this->user = $user;
	}

	/**
	 * @return int
	 */
	public function getUser()
	{
		return $this->user;
	}
}
