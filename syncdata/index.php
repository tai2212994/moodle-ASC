
<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Manage files in folder in private area.
 *
 * @package   core_user
 * @category  files
 * @copyright 2010 Petr Skoda (http://skodak.org)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

    require('../config.php');
//    $PAGE->set_context($context);
    $PAGE->set_title($SITE->fullname);
    $PAGE->set_heading($SITE->fullname);
    echo $OUTPUT->header();
    echo '<a href="../syncdata/syncuser.php"  onclick="return validate();">Sync User</a>';
    echo '<br/>';
    echo '<a href="#">Sync Teacher</a>';
    echo '<br/>';
    echo '<a href="#">Sync Course</a>';
    echo '<br/>';
//    $user=$DB->get_records('user', array());
//   foreach($user as $record){
//       echo $record->username;
//    echo ' <br/>';
//   }
//$user = new stdClass();
//$user->username = 'test';
//$user->passwork = md5('test');
//$user = $DB->insert_record();

//   echo $user->usernames;
//    $usernew = new stdClass();
//    $usernew->username = 'test3';
//    $usernew->mnethostid = $CFG->mnet_localhost_id; // Always local user.
//    $usernew->confirmed  = 1;
//    $usernew->timecreated = time();
//    $usernew->password = 'abc';
//    $usernew->password = hash_internal_user_password($usernew->password);
//    $user = $DB->get_record('user',array('username'=>$usernew->username));
//    if($user) {
//
//        echo $usernew->username . ' exist';
//    }else{
//    $usernew->id = user_create_user($usernew, false, false);
//    }


    echo $OUTPUT->box_end();
    echo $OUTPUT->footer();

?>
<script language='JavaScript'>
    function validate()
    {
        conf = confirm("Are you sure you want to confirm?");
        if (conf)
            return true
        else
            return false;
    }
</script>