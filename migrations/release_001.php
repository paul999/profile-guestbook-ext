<?php

namespace paul999\profileguestbook\migrations;

use phpbb\db\migration\migration;

class release_001 extends migration
{
	static public function depends_on()
	{
		return array(
			'\paul999\profileguestbook\migrations\create_table',
			'\paul999\profileguestbook\migrations\add_permissions',
		);
	}

	public function update_data()
	{
		return array(
			array('config.add', array('profile_guestbook_version', '0.0.1'))
		);
	}
}
