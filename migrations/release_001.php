<?php

namespace paul999\profileguestbook\migrations;

/** @noinspection PhpUndefinedClassInspection */
class release_001 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array(
			'\paul999\profileguestbook\migrations\create_table'
		);
	}

	public function update_data()
	{
		return array(
			array('config.add', array('profile_guestbook_version', '0.0.1'))
		);
	}
}
