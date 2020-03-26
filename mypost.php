<?php
       session_start();
        function __autoload($class){
            $myClass="support_methods.php";
            include_once("$myClass");
        }
        $obj = new mains_methods();
    
        if(isset($_POST['send_issue'])){
                $client_id      =   $_POST['client_id'];
                $channel_id     =   $_POST['tic_chanel'];
                $subject        =   $_POST['subject'];
                $sender_id      =   $_POST['sender_id'];
                $tic_date       =   $_POST['tic_date'];
                $tic_time       =   $_POST['tic_time'];
                $description    =   $_POST['description'];
                
                $obj->add_ticket($client_id, $channel_id, $subject, $sender_id, $tic_date, $tic_time, $description);
        }
        

?>
