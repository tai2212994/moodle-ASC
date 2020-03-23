<?php
defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {

    $page = new admin_settingpage('local_autologin',
        get_string('pluginname', 'local_autologin', null, true));

    $ADMIN->add('localplugins', $page);

}