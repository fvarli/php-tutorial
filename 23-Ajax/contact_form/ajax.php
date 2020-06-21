<?php
require 'db.php';
$result = [];
if(isset($_POST['type'])){
    if($_POST['type'] == 'contact'){
        $full_name = $_POST['full_name'] ?? false;
        $email = $_POST['email'] ?? false;
        $message = $_POST['message'] ?? false;

        if(!$full_name){
            $result['error'] = 'Full name can not be empty!';
            $result['target'] = 'full_name';
        }elseif (!$email){
            $result['error'] = 'Email can not be empty!';
            $result['target'] = 'email';
        }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result['error'] = 'Email is invalid!';
            $result['target'] = 'email';
        }elseif(!$message){
            $result['error'] = 'Message can not be empty!';
            $result['target'] = 'message';
        }else{
            $query = $db->prepare('INSERT INTO contact_form SET full_name = :full_name, email= :email, message = :message');
            $insert_result = $query->execute([
                'full_name' => $full_name,
                'email' => $email,
                'message' => $message
            ]);

            if($insert_result){
                $result['success'] = "Your message has been sent. Thank you!";
            }else{
                $result['error'] = "Your message couldn't send.";
            }
        }
    }

    echo json_encode($result);
}