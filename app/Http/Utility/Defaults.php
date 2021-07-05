<?php

namespace App\Http\Utility;
use Authy;
use Datetime;

final class Defaults{

	public static function  encode($data){
		$encodedata=json_encode($data);
		return $encodedata;
	}

	public static function otpnumber(){
		$otpnumber = mt_rand(100000, 999999);
   		return $otpnumber;
   	}
	
	public function imageUpload($image,$pathName){

		$filesize = filesize($image);
		$fileName = $image->getClientOriginalName();
		$fileExtension   = $image->getClientOriginalExtension();
		$fileName        = 'image'.rand(11111, 99999) . '.' . $fileExtension;
		$destinationPath = 'images/'.$pathName;
		$upload_success  = $image->move($destinationPath, $fileName);
		$images          = $pathName.'/'.$fileName;


		return $images;
	}   

	public static function getOtp($mobile,$cc){
		if($mobile && $cc)
     {
        $authy_api = new Authy\AuthyApi('82e3cb8542b9b8ad827e1a545bf4d3d8');
        $verification =$authy_api->phoneVerificationStart($mobile, $cc , 'sms');
        if($verification->ok()){
             $response=false;       
        }else{
             $response=true;  
        }

     } else {
         $response=true;   
     }
     return $response;
	}
	
	public static function verifyOtp($mobile,$cc,$otp){
		if($mobile && $cc && $otp)
     {
        $authy_api = new Authy\AuthyApi('authy_key');

        $verification =$authy_api->phoneVerificationCheck($mobile, $cc, $otp);

        if($verification->ok()){
               $response=false;
        
        } else {
               $response=true;         
        }
       
     } else {
        $response=true;        
     }
     return $response;
	}

    public static function getDate(){
        //date_default_timezone_set('Europe/Paris');
        $todayDate = date('Y-m-d H:i:s');
        return $todayDate;
    }
	public static function getOnlyDate(){
        //date_default_timezone_set('Europe/Paris');
        $todayDate = date('Y-m-d');
        return $todayDate;
    }

    public static function getOnlyTime(){
        //date_default_timezone_set('Europe/Paris');
        $todayDate = date('H:i:s');
        return $todayDate;
    }

    public static function getCurrentTimeStamp(){
        //date_default_timezone_set('Europe/Paris');
        $d2 = new Datetime("now");
        return $d2->format('U');
    }
    
    public static function getmonth($_mountnmbr)
    {
        switch ($_mountnmbr) {
        case '01':
            return 'Janvier';
            break;
        case '02':
            return 'Février';
            break;
        case '03':  
            return 'Mars';
            break;
        case '04':  
            return 'Avril';
            break;
        case '05':
            return 'Mai';
            break;
        case '06':  
            return 'Juin';
            break;
        case '07':  
            return 'Juillet';
            break;
        case '08':
            return 'Août';
            break;
        case '09':  
            return 'Septembre';
            break;
        case '10':  
            return 'Octobre';
            break;
        case '11':
            return 'Novembre';
            break;
        case '12':  
            return 'Décembre';
            break;
        }
    }
    
    public static function getDay($_mountnmbr)
    {
        switch ($_mountnmbr) {
        case '1':
            return 'lundi';
            break;
        case '2':
            return 'mardi';
            break;
        case '3':  
            return 'mercredi';
            break;
        case '4':  
            return 'jeudi';
            break;
        case '5':
            return 'vendredi';
            break;
        case '6':  
            return 'samedi';
            break;
        case '7':  
            return 'dimanche';
            break;
        }
    }
    
}