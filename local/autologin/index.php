
<?php
    require('../../config.php');
        $PAGE->set_title($SITE->fullname);
        $PAGE->set_heading($SITE->fullname);
        echo $OUTPUT->header();
        //get status for plugin
        $status = $DB->get_record('config_plugins',array('plugin'=>'local_autologin','name'=>'disable'));
        if ($status->value == 1) {
            echo  '<script>alert("Link not found");</script>';
            require_logout();
            redirect("$CFG->wwwroot/?redirect=0");
        }

        //get url
        $url = $PAGE->url;
        //get key
        $parts = parse_url($url);
        parse_str($parts['query'], $query);
        //check user exist
//        $key = decryptkey($query['key']);
        $key = $query['key'];
        $user = $DB->get_record('user',array('username'=>$key));
        if ($user){
            complete_user_login($user);
            \core\session\manager::apply_concurrent_login_limit($user->id, session_id());
            redirect("$CFG->wwwroot/?redirect=0");

        }
        else{

            require_logout();
//            redirect("$CFG->wwwroot/?redirect=0");?>
        <html>
        <head>
            <link rel="stylesheet" type="text/css" href="styles.css">
        </head>
        <body>
            <!-- The Modal -->
            <div id="myModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <p>Username is not exist</p>
                </div>
            </div>
        </body>
        </html>
<?php
        }
        echo $OUTPUT->box_end();
        echo $OUTPUT->footer();
        ?>
<script>
    // Get the modal
    var modal = document.getElementById("myModal");


    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    modal.style.display = "block";


    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";

    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";

        }

    }
    // $( function() {
    //     $( "#myModal" ).dialog({
    //         resizable: false,
    //         height: "auto",
    //         width: 400,
    //         modal: true,
    //         buttons: {
    //             "Delete all items": function() {
    //                 $( this ).dialog( "close" );
    //             },
    //             Cancel: function() {
    //                 $( this ).dialog( "close" );
    //             }
    //         }
    //     });
    // } );
</script>
//    function decryptkey($plaintext){
//
////        $date = getdate();
////        $date = date("dmY");
//        $date = date_format(getdate(),"dmY");
//        // Store the encryption key
//        $password = $date;
//        // CBC has an IV and thus needs randomness every time a message is encrypted
//        $method = 'aes-256-cbc';
//
//        // Must be exact 32 chars (256 bit)
//        // You must store this secret random key in a safe place of your system.
//        $key = substr(hash('sha256', $password, true), 0, 32);
//        echo "Password:" . $password . "\n";
//
//        // Most secure key
//        // IV must be exact 16 chars (128 bit)
//        $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
//
//        $encrypted = base64_encode(openssl_encrypt($plaintext, $method, $key, OPENSSL_RAW_DATA, $iv));
//
//        $decrypted = openssl_decrypt(base64_decode($encrypted), $method, $key, OPENSSL_RAW_DATA, $iv);
//
//        return $decrypted;
//    }
