<?php

namespace paul999\profileguestbook\migrations;

class release_001 extends \phpbb\db\migration\migration
{
    static public function depends_on()
    {
        return array(

        );
    }

    public function update_data()
    {
        return array(
            array('config.update', array('profile_guestbook_version', '0.0.1'))
        );
    }
}