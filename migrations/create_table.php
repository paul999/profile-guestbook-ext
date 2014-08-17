<?php
namespace paul999\profileguestbook\migrations;

class create_table extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array();
	}

	public function update_schema()
	{
		return array(
			'add_tables' => array(
				$this->table_prefix . 'profile_guestbook' => array(
					'COLUMNS'     => array(
						'guestbook_id'    => array('UINT', null, 'auto_increment'),
						'user_id'         => array('UINT', 0),
						'poster_id'       => array('UINT', 0),
						'post_time'       => array('TIMESTAMP', 0),
						'bbcode_bitfield' => array('VCHAR:255', ''),
						'bbcode_uid'      => array('VCHAR:8', ''),
						'post_message'    => array('MTEXT_UNI', ''),
					),
					'PRIMARY_KEY' => 'guestbook_id',
					'KEYS'        => array(
						'u_id' => array('INDEX', 'user_id'),
						'p_id' => array('INDEX', 'poster_id'),
					)
				),
			),
		);
	}

	public function revert_schema()
	{
		return array(
			'drop_tables' => array(
				$this->table_prefix . 'profile_guestbook',
			),
		);
	}
}