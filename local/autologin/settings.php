<?php
defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {

    $page = new admin_settingpage('local_autologin','Auto login');

    // Add settings page to the appearance settings category.
    $ADMIN->add('users', $page);
    // Add a setting field to the settings for this page
    $link = "Link as ";
    $link .= "$CFG->wwwroot/local/autologin/index.php?key='value'";

    $page->add( new admin_setting_configcheckbox(
    'local_autologin/disable','Disable',$link,0
    ) );


}

