<?php
    require('../config.php');
    //    $PAGE->set_context($context);
    $PAGE->set_title($SITE->fullname);
    $PAGE->set_heading($SITE->fullname);
    echo $OUTPUT->header();

    $usernew = new stdClass();
    $usernew -> username = 'test5';
    $usernew -> mnethostid = $CFG->mnet_localhost_id; // Always local user.
    $usernew -> confirmed = 1;
    $usernew -> timecreated = time();

    $usernew -> password = 'abc';
    $usernew -> password = hash_internal_user_password($usernew->password);
    $usernew -> auth = 'sync';
    $usernew -> firstname = 'test1';
    $usernew -> lastname = 'nv';
    $user = $DB -> get_record('user', array('username' => $usernew->username));
    if ($user) {

        echo $usernew->username . ' exist';
    } else {
        $usernew->id = user_create_user($usernew, false, false);
        echo 'success';
    }


    echo $OUTPUT->box_end();
    echo $OUTPUT->footer();


