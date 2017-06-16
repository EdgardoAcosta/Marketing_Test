<?php

/**
 * User: Edgardo Acosta
 * Wraper for MailChimp: https://github.com/drewm/mailchimp-api
 */
class functions
{
    // Constructor
    function __construct()
    {
        #Global variables for mailchimp class
        $GLOBALS["id_list"] = "fa2e6c9770";
        $GLOBALS["client_secret"] = "32057971e1a1b692a5a74210dee70450fa3d14ee835253b05a";
        $GLOBALS["client_id"] = "840916762175";
        $GLOBALS["api_key"] = "758a7a6cc4c19a6eee90b15b21f4c6c9-us16";
    }

    // Destructor
    function __destruct()
    {
    }


    /**
     * @param $MailChimp
     * @param $email
     * @param $name
     * @param $last
     * @return mixed
     * Function to add user to the mailchimp list
     * will return the status of api
     */
    public function add_user_to_mailchimp($MailChimp, $email, $name, $last)
    {   //Add full user
        if($email != "" && $name != "" && $last != ""){
            //echo('lists/'+$GLOBALS["id_list"]+'/members' + "Hola");
            $result = $MailChimp->post('lists/fa2e6c9770/members', [
                'email_address' => $email,
                'merge_fields' => ['FNAME' => $name, 'LNAME' => $last],
                'status' => 'subscribed'
            ]);
        }
        //Add just email to list
        else{
            $result = $MailChimp->post('lists/fa2e6c9770/members', [
                'email_address' => $email,
                'status' => 'subscribed'
            ]);
        }
        //On succes of adding user
        if ($MailChimp->success()) {
            return $MailChimp->getLastResponse();
        }
        //Error adding user
        else {
            return $MailChimp->getLastError();
        }
    }

    /**
     * @param $MailChimp
     * @param $email
     * @return bool
     * Erase user from list (Not using this method)
     */
    public function delete_contact($MailChimp, $email){
        $subscriber_hash = $MailChimp->subscriberHash($email);

        $result = $MailChimp->delete('lists/'+$GLOBALS["id_list"]+'members/'+ $subscriber_hash);

        if ($MailChimp->success()) {
            return true;
        } else {
            return false;
            #return $MailChimp->getLastError();
        }

    }
}