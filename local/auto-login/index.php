<?php
    require('../../config.php');
        $PAGE->set_title($SITE->fullname);
        $PAGE->set_heading($SITE->fullname);
        echo $OUTPUT->header();
        //get url
        $url = $PAGE->url;
        //get key
        $parts = parse_url($url);
        parse_str($parts['query'], $query);
        //check user exist
        $key = decryptkey($query['key']);
        $user = $DB->get_record('user',array('username'=>$key));
        if ($user) {
            complete_user_login($user);
            \core\session\manager::apply_concurrent_login_limit($user->id, session_id());
            redirect("$CFG->wwwroot/?redirect=0");

        }
        else{
           echo  '<script>alert("username not exist");</script>';
            require_logout();
            redirect("$CFG->wwwroot/?redirect=0");
        }
        echo $OUTPUT->box_end();
        echo $OUTPUT->footer();

    function decryptkey($plaintext){

//        $date = getdate();
//        $date = date("dmY");
        $date = date_format(getdate(),"dmY");
        // Store the encryption key
        $password = $date;
        // CBC has an IV and thus needs randomness every time a message is encrypted
        $method = 'aes-256-cbc';

        // Must be exact 32 chars (256 bit)
        // You must store this secret random key in a safe place of your system.
        $key = substr(hash('sha256', $password, true), 0, 32);
        echo "Password:" . $password . "\n";

        // Most secure key
        // IV must be exact 16 chars (128 bit)
        $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);

        $encrypted = base64_encode(openssl_encrypt($plaintext, $method, $key, OPENSSL_RAW_DATA, $iv));

        $decrypted = openssl_decrypt(base64_decode($encrypted), $method, $key, OPENSSL_RAW_DATA, $iv);

        return $decrypted;
    }
