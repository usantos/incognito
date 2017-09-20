<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('generate_user'))
{
    function generate_user()
    {
        $url_random_user = "https://randomuser.me/api/?results=1&nat=br";
        // Get cURL resource
        $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url_random_user,
            CURLOPT_USERAGENT => $userAgent = 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.2 (KHTML, like Gecko) Chrome/22.0.1216.0 Safari/537.2'
        ));
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        $obj = json_decode($resp);
        // Close request to clear up some resources
        curl_close($curl);
        $data = array(
            'name' => $obj->{'results'}[0]->{"name"}->{"first"} ." ". $obj->{'results'}[0]->{"name"}->{"last"},
            'gender' => $obj->{'results'}[0]->{"gender"},
            'email' => $obj->{'results'}[0]->{"email"},   
            'username' => $obj->{'results'}[0]->{"login"}->{"username"},
            'password' => $obj->{'results'}[0]->{"login"}->{"password"}   
         );
         return $data;
    }   
}