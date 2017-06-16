<?php

/**
 * User: Edgardo Acosta
 * Wraper for MailChimp: https://github.com/drewm/mailchimp-api
 */
class functions
{

    function __construct()
    {
        $GLOBALS["id_list"] = "fa2e6c9770";
        $GLOBALS["client_secret"] = "32057971e1a1b692a5a74210dee70450fa3d14ee835253b05a";
        $GLOBALS["client_id"] = "840916762175";
        $GLOBALS["api_key"] = "758a7a6cc4c19a6eee90b15b21f4c6c9-us16";
    }

    // Destructor
    function __destruct()
    {
    }


    public function add_user_to_mailchimp($MailChimp,$email, $name, $last)
    {
        if($email != "" && $name != "" && $last != ""){
            //echo('lists/'+$GLOBALS["id_list"]+'/members' + "Hola");
            $result = $MailChimp->post('lists/fa2e6c9770/members', [
                'email_address' => $email,
                'merge_fields' => ['FNAME' => $name, 'LNAME' => $last],
                'status' => 'subscribed'
            ]);
        }
        else{
            $result = $MailChimp->post('lists/'+$GLOBALS["id_list"]+'/members', [
                'email_address' => $email,
                'status' => 'subscribed'
            ]);
        }

        if ($MailChimp->success()) {
            return $MailChimp->getLastResponse();
            #return true;
        } else {
            #return false;
            return $MailChimp->getLastError();
        }
    }
    public function delete_contact($MailChimp,$email){


        $subscriber_hash = $MailChimp->subscriberHash($email);

        $result = $MailChimp->delete('lists/'+$GLOBALS["id_list"]+'members/'+ $subscriber_hash);

        if ($MailChimp->success()) {
            return true;
        } else {
            return false;
            #return $MailChimp->getLastError();
        }

    }
    public function update_user(){

    }


}