<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Crypt;
use App\Http\Utility\Common;
use App\Http\Service\DataService;
use App\Http\Utility\Defaults;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException;
;
use Validator;
use DB;
use App\Models\User;
use App\Models\Restaurant;
use App\Models\Restrotiming;
use App\Models\Restrocontact;
use App\Models\Product;

class RestroController extends Controller{
	public function __construct(){
     	DB::enableQueryLog();
 	}

 	public function dashboard(Request $request){ 
 		$restroId	                =	$request->session()->get('id');
 		$restroObj 	                =	new Restaurant();
 		$prodObj                    =   new Product();
 		$restro_timeObj             =   new Restrotiming();
 		$contactObj                 =   new Restrocontact();
 		
 		/*Restro General information */
 		$restroInfo                 =   $restroObj->get_record_single(['id'=>$restroId]);
 		$data['restroInfo']         =   json_decode($restroInfo);
 		
 		/*Restro timing schedule */
        $data["sunday_record"]      =   $restro_timeObj->where(['restro_id'=>$restroId,"day"=>7])->get()->toArray();
        $data["monday_record"]      =   $restro_timeObj->where(['restro_id'=>$restroId,"day"=>1])->get()->toArray();
        $data["tuesday_record"]     =   $restro_timeObj->where(['restro_id'=>$restroId,"day"=>2])->get()->toArray();
        $data["wednesday_record"]   =   $restro_timeObj->where(['restro_id'=>$restroId,"day"=>3])->get()->toArray();
        $data["thursday_record"]    =   $restro_timeObj->where(['restro_id'=>$restroId,"day"=>4])->get()->toArray();
        $data["friday_record"]      =   $restro_timeObj->where(['restro_id'=>$restroId,"day"=>5])->get()->toArray();
        $data["saturday_record"]    =   $restro_timeObj->where(['restro_id'=>$restroId,"day"=>6])->get()->toArray();
        
        /*Restro contacts */
        $data['myContacts']         =   $contactObj->where(['restro_id'=>$restroId])->get()->toArray();

        /*Restro products */
        $data['myProducts']         =   $prodObj->get_record_all('*',['restro_id'=>$restroId],$limit=4);
        
        $data['timeSlots']			=	array("12:00 AM","12:30 AM","01:00 AM","01:30 AM","02:00 AM","02:30 AM","03:00 AM","03:30 AM","04:00 AM","04:30 AM","05:00 AM","05:30 AM","06:00 AM","06:30 AM","07:00 AM","07:30 AM","08:00 AM","08:30 AM","09:00 AM","09:30 AM","10:00 AM","10:30 AM","11:00 AM","11:30 AM","12:00 PM","12:30 PM","01:00 PM","01:30 PM","02:00 PM","02:30 PM","03:00 PM","03:30 PM","04:00 PM","04:30 PM","05:00 PM","05:30 PM","06:00 PM","06:30 PM","07:00 PM","07:30 PM","08:00 PM","08:30 PM","09:30 PM","10:00 PM","10:30 PM","11:00 PM","11:30 PM");
      
 		return view("dashboard")->with(array("data"=>$data));
 	}

 	/* Address validation */
 	public function ad_validation(Request $request)
 	{
 		$response = [
         'success' => false,
         'msg' => 'success',
         'csrfHash' => csrf_token()
    	];

 		if ($request->header('X-CSRF-TOKEN') != csrf_token()) {
 			$response = [
	         'success' => false,
	         'msg' => 'success',
	         'csrfHash' => csrf_token()
    		];
        
     	}else {
     		$messages = [
        		'a.required'   => trans('msg.Address is required'),
             	'c.required' =>trans('msg.Country is required'),
             	//'pc.required'=>'Postal ',
             	'lt.required'=>trans('msg.Invalid address'),
             	'ln.required'=>trans('msg.Invalid address')
	    	];

     		$rules   = ['a'   => 'required',
            	'c' =>'required',
            	//'pc'=>'required',
            	'lt'=>'required',
            	'ln'=>'required'
         	];

	     	$validator  = Validator::make($request->all(), $rules,$messages);
	     	$msg= '';
	     	if ($validator->fails()) {
	         $data   	= $validator->messages();
	         $msg 		= $data->first();
	     	}

	     	if($msg !== ''){
	     		$response = [
		         'success' => false,
		         'csrfHash' => csrf_token(),
		         'msg' => $msg,
		    	];
	     	}else{
	     		DB::beginTransaction();
	     		try{
	     			$restroObj 	=	new Restaurant();
		     		$restroId	=	$request->session()->get('id');
		     		$update		=	array('address'=>$request->a,'country'=>$request->c,'latitude'=>$request->lt,'longitude'=>$request->ln);
		     		if(!empty($request->pc)){
		     			$update['postal_code'] = $request->pc;
		     		}

		     		$restroObj->update_record(['id'=>$restroId],$update);
		     		DB::commit();
		     		$response = [
			         'success' => true,
			         'msg' => 'success',
			         'csrfHash' => csrf_token()
			    	];
				}catch(\Illuminate\Database\QueryException $ex){
	     			DB::rollback();
	     			$response = [
			         'success' => false,
			         'csrfHash' => csrf_token(),
			         'msg' => $ex->getMessage()
			    	];
	     		}

	     	}
         //return response()->json(['error' => 'token is not expired']);
     	}
    	return response()->json($response);
 	}

 	/* Service validation */
 	public function service_validation(Request $request)
 	{
 		$response = [
         'success' => false,
         'msg' => 'success',
         'csrfHash' => csrf_token()
    	];

 		if ($request->header('X-CSRF-TOKEN') != csrf_token()) {
 			$response = [
	         'success' => false,
	         'msg' => 'success',
	         'csrfHash' => csrf_token()
    		];
        
     	}else {
     		$messages = [
	    		'a.required'   => trans('msg.Service type is required')
	    	];

     		$rules   = ['a'   => 'required'];

	     	$validator  = Validator::make($request->all(), $rules,$messages);
	     	$msg= '';
	     	if ($validator->fails()) {
	         $data   	= $validator->messages();
	         $msg 		= $data->first();
	     	}

	     	if($msg !== ''){
	     		$response = [
		         'success' => false,
		         'csrfHash' => csrf_token(),
		         'msg' => $msg,
		    	];
	     	}else{
	     		DB::beginTransaction();
	     		try{
	     			$restroObj 	=	new Restaurant();
		     		$restroId	=	$request->session()->get('id');
		     		$update		=	array('service_type'=>"$request->a");
		     		
		     		$restroObj->update_record(['id'=>$restroId],$update);
		     		DB::commit();
		     		$response = [
			         'success' => true,
			         'msg' => 'success',
			         'csrfHash' => csrf_token()
			    	];
				}catch(\Illuminate\Database\QueryException $ex){
	     			DB::rollback();
	     			$response = [
			         'success' => false,
			         'csrfHash' => csrf_token(),
			         'msg' => $ex->getMessage()
			    	];
	     		}

	     	}
         //return response()->json(['error' => 'token is not expired']);
     	}
    	return response()->json($response);
 	}

 	/* Web address validation */
 	public function weburl_validation(Request $request)
 	{
 		$response = [
         'success' => false,
         'msg' => 'success',
         'csrfHash' => csrf_token()
    	];

 		if ($request->header('X-CSRF-TOKEN') != csrf_token()) {
 			$response = [
	         'success' => false,
	         'msg' => 'success',
	         'csrfHash' => csrf_token()
    		];
        
     	}else {
     		$messages = [
	    		'a.required'   => trans('msg.Add web address')
	    	];

     		$rules   = ['a'   => 'required'];

	     	$validator  = Validator::make($request->all(), $rules,$messages);
	     	$msg= '';
	     	if ($validator->fails()) {
	         $data   	= $validator->messages();
	         $msg 		= $data->first();
	     	}

	     	if($msg !== ''){
	     		$response = [
		         'success' => false,
		         'csrfHash' => csrf_token(),
		         'msg' => $msg,
		    	];
	     	}else{
	     		DB::beginTransaction();
	     		try{
	     			$restroObj 	=	new Restaurant();
		     		$restroId	=	$request->session()->get('id');
		     		$update		=	array('website'=>$request->a);
		     		
		     		$restroObj->update_record(['id'=>$restroId],$update);
		     		DB::commit();
		     		$response = [
			         'success' => true,
			         'msg' => 'success',
			         'csrfHash' => csrf_token()
			    	];
				}catch(\Illuminate\Database\QueryException $ex){
	     			DB::rollback();
	     			$response = [
			         'success' => false,
			         'csrfHash' => csrf_token(),
			         'msg' => $ex->getMessage()
			    	];
	     		}

	     	}
         //return response()->json(['error' => 'token is not expired']);
     	}
    	return response()->json($response);
 	}

 	/* Description validation */
 	public function desc_validation(Request $request)
 	{
 		$response = [
         'success' => false,
         'msg' => 'success',
         'csrfHash' => csrf_token()
    	];

 		if ($request->header('X-CSRF-TOKEN') != csrf_token()) {
 			$response = [
	         'success' => false,
	         'msg' => 'success',
	         'csrfHash' => csrf_token()
    		];
        
     	}else {
     		$messages = [
	    		'aboutMe.required'   => trans('msg.Add some information')
	    	];

     		$rules   = ['aboutMe'   => 'required'];

	     	$validator  = Validator::make($request->all(), $rules,$messages);
	     	$msg= '';
	     	if ($validator->fails()) {
	         $data   	= $validator->messages();
	         $msg 		= $data->first();
	     	}

	     	if($msg !== ''){
	     		$response = [
		         'success' => false,
		         'csrfHash' => csrf_token(),
		         'msg' => $msg,
		    	];
	     	}else{
	     		DB::beginTransaction();
	     		try{
	     			$restroObj 	=	new Restaurant();
		     		$restroId	=	$request->session()->get('id');
		     		$update		=	array('business_info'=>$request->aboutMe);
		     		
		     		$restroObj->update_record(['id'=>$restroId],$update);
		     		DB::commit();
		     		$response = [
			         'success' => true,
			         'msg' => 'success',
			         'csrfHash' => csrf_token()
			    	];
				}catch(\Illuminate\Database\QueryException $ex){
	     			DB::rollback();
	     			$response = [
			         'success' => false,
			         'csrfHash' => csrf_token(),
			         'msg' => $ex->getMessage()
			    	];
	     		}

	     	}
         //return response()->json(['error' => 'token is not expired']);
     	}
    	return response()->json($response);
 	}

 	/* Cashback validation */
 	public function cashback_validation(Request $request)
 	{
 		$response = [
         'success' => false,
         'msg' => 'success',
         'csrfHash' => csrf_token()
    	];

 		if ($request->header('X-CSRF-TOKEN') != csrf_token()) {
 			$response = [
	         'success' => false,
	         'msg' => 'success',
	         'csrfHash' => csrf_token()
    		];
        
     	}else {
     		$msg = '';
     		if((int)$request->allowcashback){
     			if(empty($request->cashbackVal)){
     				$messages = [
			    		'cashbackVal.required'   => trans('msg.Enter cashback percentage')
			    	];

		     		$rules   = ['cashbackVal'   => 'required'];

			     	$validator  = Validator::make($request->all(), $rules,$messages);
			     	if ($validator->fails()) {
			         $data   	= $validator->messages();
			         $msg 		= $data->first();
			     	}
     			}
     		}

	     	if($msg !== ''){
	     		$response = [
		         'success' => false,
		         'csrfHash' => csrf_token(),
		         'msg' => $msg,
		    	];
	     	}else{
	     		DB::beginTransaction();
	     		try{
	     			$restroObj 	=	new Restaurant();
		     		$restroId	=	$request->session()->get('id');

		     		$update		=	array('cashback_allow'=>"$request->allowcashback");
		     		if(!empty($request->cashbackVal)){
		     			$update['cashback_val'] = $request->cashbackVal;
		     		}
		     		
		     		$restroObj->update_record(['id'=>$restroId],$update);
		     		DB::commit();
		     		$response = [
			         'success' => true,
			         'msg' => 'success',
			         'csrfHash' => csrf_token()
			    	];
				}catch(\Illuminate\Database\QueryException $ex){
	     			DB::rollback();
	     			$response = [
			         'success' => false,
			         'csrfHash' => csrf_token(),
			         'msg' => $ex->getMessage()
			    	];
	     		}

	     	}
        }
    	return response()->json($response);
 	}
 	
 	public function calender_validation(Request $request)
 	{
 	    $response = [
            'success' => false,
            'msg' => 'success',
            'csrfHash' => csrf_token()
    	];

 		if ($request->header('X-CSRF-TOKEN') != csrf_token()) {
 			$response = [
	         'success' => false,
	         'msg' => 'success',
	         'csrfHash' => csrf_token()
    		];
        
     	}else {
     		$msg = '';
     		if(empty($request->sunday_open) && empty($request->monday_open) && empty($request->tuesday_open) && empty($request->wednesday_open) && empty($request->thursday_open) && empty($request->friday_open) && empty($request->saturday_open)){
     			$msg = trans('msg.Select atleast one day to submit time report');
     		}

	     	if($msg !== ''){
	     		$response = [
		         'success' => false,
		         'csrfHash' => csrf_token(),
		         'msg' => $msg,
		    	];
	     	}else{
	     		DB::beginTransaction();
	     		try{
	     			$restro_timeObj =	new Restrotiming();
		     		$restroId	    =	$request->session()->get('id');
                    
                    /* Sunday timing */
                    $sunday_day     = $request->sunday_day;
                    $sunday_open    = $request->sunday_open;
                    $res_set_sunday_id = $request->res_set_sunday_id;
                    if(empty($sunday_open))
                    {
                      $sunday_open = 0;
                    }
                    $sunday_starttime   =   $request->sunday_open_time;
                    $sunday_endtime     =   $request->sunday_close_time;
                    for($x=0; $x<count($sunday_starttime); $x++)
                    {
                        $insert_array = array(
                            "restro_id"=>$restroId,
                            "day"=>$sunday_day,
                            "starttime"=>$sunday_starttime[$x],
                            "endtime"=>$sunday_endtime[$x],
                        );
                        $record_count = $restro_timeObj->getCount($insert_array);
                        if(!$record_count)
                        {
                            $insert_array["open_close"] = "$sunday_open";
                            if($res_set_sunday_id[$x] == 0)
                            {
                                $restro_timeObj->saveData($insert_array);
                            }else{
                                $restro_timeObj->update_record(["id"=>$res_set_sunday_id[$x]],$insert_array);
                            }
                        }else{
                            $record_value   = $restro_timeObj->get_record_single($insert_array);
                            $restro_timeObj->update_record(["id"=>$record_value['id']],array("open_close"=>"$sunday_open"));
                        }
                    }
                    
                    /* Monday timing */
                    $monday_day     = $request->monday_day;
                    $monday_open    = $request->monday_open;
                    $res_set_monday_id = $request->res_set_monday_id;
                    if(empty($monday_open))
                    {
                      $monday_open = 0;
                    }
                    $monday_starttime   =   $request->monday_open_time;
                    $monday_endtime     =   $request->monday_close_time;
                    for($x=0; $x<count($monday_starttime); $x++)
                    {
                        $insert_array = array(
                            "restro_id"=>$restroId,
                            "day"=>$monday_day,
                            "starttime"=>$monday_starttime[$x],
                            "endtime"=>$monday_endtime[$x],
                        );
                        $record_count = $restro_timeObj->getCount($insert_array);
                        if(!$record_count)
                        {
                            $insert_array["open_close"] = "$monday_open";
                            if($res_set_monday_id[$x] == 0)
                            {
                                $restro_timeObj->saveData($insert_array);
                            }else{
                                $restro_timeObj->update_record(["id"=>$res_set_monday_id[$x]],$insert_array);
                            }
                        }else{
                            $record_value   = $restro_timeObj->get_record_single($insert_array);
                            $restro_timeObj->update_record(["id"=>$record_value['id']],array("open_close"=>"$monday_open"));
                        }
                    }
                    
                    /* Tuesday timing */
                    $tuesday_day     = $request->tuesday_day;
                    $tuesday_open    = $request->tuesday_open;
                    $res_set_tuesday_id = $request->res_set_tuesday_id;
                    if(empty($tuesday_open))
                    {
                      $tuesday_open = 0;
                    }
                    $tuesday_starttime   =   $request->tuesday_open_time;
                    $tuesday_endtime     =   $request->tuesday_close_time;
                    for($x=0; $x<count($tuesday_starttime); $x++)
                    {
                        $insert_array = array(
                            "restro_id"=>$restroId,
                            "day"=>$tuesday_day,
                            "starttime"=>$tuesday_starttime[$x],
                            "endtime"=>$tuesday_endtime[$x],
                        );
                        $record_count = $restro_timeObj->getCount($insert_array);
                        if(!$record_count)
                        {
                            $insert_array["open_close"] = "$tuesday_open";
                            if($res_set_tuesday_id[$x] == 0)
                            {
                                $restro_timeObj->saveData($insert_array);
                            }else{
                                $restro_timeObj->update_record(["id"=>$res_set_tuesday_id[$x]],$insert_array);
                            }
                        }else{
                            $record_value   = $restro_timeObj->get_record_single($insert_array);
                            $restro_timeObj->update_record(["id"=>$record_value['id']],array("open_close"=>"$tuesday_open"));
                        }
                    }
                    /* Update tuesday open-close status for all timing */
                    $restro_timeObj->update_record(["restro_id"=>$restroId,'day'=>$tuesday_day],array("open_close"=>"$tuesday_open"));
                    /********/
                    
                    
                    /* Wednesday timing */
                    $wednesday_day     = $request->wednesday_day;
                    $wednesday_open    = $request->wednesday_open;
                    $res_set_wednesday_id = $request->res_set_wednesday_id;
                    if(empty($wednesday_open))
                    {
                      $wednesday_open = 0;
                    }
                    $wednesday_starttime   =   $request->wednesday_open_time;
                    $wednesday_endtime     =   $request->wednesday_close_time;
                    for($x=0; $x<count($wednesday_starttime); $x++)
                    {
                        $insert_array = array(
                            "restro_id"=>$restroId,
                            "day"=>$wednesday_day,
                            "starttime"=>$wednesday_starttime[$x],
                            "endtime"=>$wednesday_endtime[$x],
                        );
                        $record_count = $restro_timeObj->getCount($insert_array);
                        if(!$record_count)
                        {
                            $insert_array["open_close"] = "$wednesday_open";
                            if($res_set_wednesday_id[$x] == 0)
                            {
                                $restro_timeObj->saveData($insert_array);
                            }else{
                                $restro_timeObj->update_record(["id"=>$res_set_wednesday_id[$x]],$insert_array);
                            }
                        }else{
                            $record_value   = $restro_timeObj->get_record_single($insert_array);
                            $restro_timeObj->update_record(["id"=>$record_value['id']],array("open_close"=>"$wednesday_open"));
                        }
                    }
                    
                    /* Thursday timing */
                    $thursday_day     = $request->thursday_day;
                    $thursday_open    = $request->thursday_open;
                    $res_set_thursday_id = $request->res_set_thursday_id;
                    if(empty($thursday_open))
                    {
                      $thursday_open = 0;
                    }
                    $thursday_starttime   =   $request->thursday_open_time;
                    $thursday_endtime     =   $request->thursday_close_time;
                    for($x=0; $x<count($thursday_starttime); $x++)
                    {
                        $insert_array = array(
                            "restro_id"=>$restroId,
                            "day"=>$thursday_day,
                            "starttime"=>$thursday_starttime[$x],
                            "endtime"=>$thursday_endtime[$x],
                        );
                        $record_count = $restro_timeObj->getCount($insert_array);
                        if(!$record_count)
                        {
                            $insert_array["open_close"] = "$thursday_open";
                            if($res_set_thursday_id[$x] == 0)
                            {
                                $restro_timeObj->saveData($insert_array);
                            }else{
                                $restro_timeObj->update_record(["id"=>$res_set_thursday_id[$x]],$insert_array);
                            }
                        }else{
                            $record_value   = $restro_timeObj->get_record_single($insert_array);
                            $restro_timeObj->update_record(["id"=>$record_value['id']],array("open_close"=>"$thursday_open"));
                        }
                    }
                    
                    /* Friday timing */
                    $friday_day     = $request->friday_day;
                    $friday_open    = $request->friday_open;
                    $res_set_friday_id = $request->res_set_friday_id;
                    if(empty($friday_open))
                    {
                      $friday_open = 0;
                    }
                    $friday_starttime   =   $request->friday_open_time;
                    $friday_endtime     =   $request->friday_close_time;
                    for($x=0; $x<count($friday_starttime); $x++)
                    {
                        $insert_array = array(
                            "restro_id"=>$restroId,
                            "day"=>$friday_day,
                            "starttime"=>$friday_starttime[$x],
                            "endtime"=>$friday_endtime[$x],
                        );
                        $record_count = $restro_timeObj->getCount($insert_array);
                        if(!$record_count)
                        {
                            $insert_array["open_close"] = "$friday_open";
                            if($res_set_friday_id[$x] == 0)
                            {
                                $restro_timeObj->saveData($insert_array);
                            }else{
                                $restro_timeObj->update_record(["id"=>$res_set_friday_id[$x]],$insert_array);
                            }
                        }else{
                            $record_value   = $restro_timeObj->get_record_single($insert_array);
                            $restro_timeObj->update_record(["id"=>$record_value['id']],array("open_close"=>"$friday_open"));
                        }
                    }
	     		    
                    /* Saturday timing */
                    $saturday_day     = $request->saturday_day;
                    $saturday_open    = $request->saturday_open;
                    $res_set_saturday_id = $request->res_set_saturday_id;
                    if(empty($saturday_open))
                    {
                      $saturday_open = 0;
                    }
                    $saturday_starttime   =   $request->saturday_open_time;
                    $saturday_endtime     =   $request->saturday_close_time;
                    for($x=0; $x<count($saturday_starttime); $x++)
                    {
                        $insert_array = array(
                            "restro_id"=>$restroId,
                            "day"=>$saturday_day,
                            "starttime"=>$saturday_starttime[$x],
                            "endtime"=>$saturday_endtime[$x],
                        );
                        $record_count = $restro_timeObj->getCount($insert_array);
                        if(!$record_count)
                        {
                            $insert_array["open_close"] = "$saturday_open";
                            if($res_set_saturday_id[$x] == 0)
                            {
                                $restro_timeObj->saveData($insert_array);
                            }else{
                                $restro_timeObj->update_record(["id"=>$res_set_saturday_id[$x]],$insert_array);
                            }
                        }else{
                            $record_value   = $restro_timeObj->get_record_single($insert_array);
                            $restro_timeObj->update_record(["id"=>$record_value['id']],array("open_close"=>"$saturday_open"));
                        }
                    }
	     		    
		     		DB::commit();
		     		//dd(DB::getQueryLog());
		     		
		     		$response = [
			         'success' => true,
			         'msg' => 'success',
			         'csrfHash' => csrf_token()
			    	];
				}catch(\Illuminate\Database\QueryException $ex){
	     			DB::rollback();
	     			$response = [
			         'success' => false,
			         'msg' => 'success',
			         'csrfHash' => csrf_token(),
			         'msg' => $ex->getMessage()
			    	];
	     		}

	     	}
        }
    	return response()->json($response);
 	}

 	public function calender_delete(Request $request)
 	{
 		$response = [
         	'success' => false,
         	'msg' => 'success',
         	'csrfHash' => csrf_token()
        ];

        try{
        	$id = (int)$request->d;
	 		$restro_timeObj =	new Restrotiming();
	 		$restroId	    =	$request->session()->get('id');
	 		$record_count 	= $restro_timeObj->getCount(['id'=>$id,'restro_id'=>$restroId]);
	 		if($record_count){	
	 			$restro_timeObj->deleteAd(['id'=>$id,'restro_id'=>$restroId]);

	 			$response = [
		         	'success' => true,
		         	'msg' => 'success',
		         	'csrfHash' => csrf_token()
		        ];
	 		}
        }catch(\Illuminate\Database\QueryException $ex){
 			DB::rollback();
 			$response = [
	         'success' => false,
	         'csrfHash' => csrf_token(),
	         'msg' => $ex->getMessage()
	    	];
 		}
 		DB::commit();
 		return response()->json($response);
 	}

 	public function reward_validation(Request $request)
 	{
 		$response = [
     		'success' => false,
     		'msg' => 'success',
     		'csrfHash' => csrf_token()
    	];

 		if ($request->header('X-CSRF-TOKEN') != csrf_token()) {
 			$response = [
     			'success' => false,
	         	'msg' => 'success',
	         	'csrfHash' => csrf_token()
    		];
        
     	}else {
     		DB::beginTransaction();
     		try{
     			$restroObj 	=	new Restaurant();
	     		$restroId	=	$request->session()->get('id');

	     		$update		=	array('accept_rewards'=>"$request->acceptReward");
	     		
	     		$restroObj->update_record(['id'=>$restroId],$update);
	     		DB::commit();
	     		$response = [
		         	'success' => true,
		         	'msg' => 'success',
		         	'csrfHash' => csrf_token()
		    	];
			}catch(\Illuminate\Database\QueryException $ex){
     			DB::rollback();
     			$response = [
		         	'success' => false,
		         	'csrfHash' => csrf_token(),
		         	'msg' => $ex->getMessage()
		    	];
     		}
        }
    	return response()->json($response);
 	}

 	public function myinfo_validation(Request $request)
 	{
 		$response = [
         'success' => false,
         'msg' => 'success',
         'csrfHash' => csrf_token()
    	];

 		if ($request->header('X-CSRF-TOKEN') != csrf_token()) {
 			$response = [
	         'success' => false,
	         'msg' => 'success',
	         'csrfHash' => csrf_token()
    		];
        
     	}else {
     		$messages = [
        		'myname.required'   => trans('msg.Add your business info')
	    	];

     		$rules   = ['myname'   => 'required'
         	];

	     	$validator  = Validator::make($request->all(), $rules,$messages);
	     	$msg= '';
	     	if ($validator->fails()) {
	         	$data   	= $validator->messages();
	         	$msg 		= $data->first();
	     	}

	     	if($msg !== ''){
	     		$response = [
		         'success' => false,
		         'csrfHash' => csrf_token(),
		         'msg' => $msg,
		    	];
	     	}else{
	     		DB::beginTransaction();
	     		try{
	     			$restroObj 	=	new Restaurant();
		     		$restroId	=	$request->session()->get('id');
		     		$update		=	array('restro_name'=>$request->myname);

		     		$restroObj->update_record(['id'=>$restroId],$update);
		     		
		     		$response = [
			         'success' => true,
			         'msg' => 'success',
			         'csrfHash' => csrf_token()
			    	];
				}catch(\Illuminate\Database\QueryException $ex){
	     			DB::rollback();
	     			$response = [
			         'success' => false,
			         'csrfHash' => csrf_token(),
			         'msg' => $ex->getMessage()
			    	];
	     		}
	     		DB::commit();
	     	}
        }
    	return response()->json($response);
 	}

 	public function interior_validation(Request $request)
 	{
 	    $response = [
            'success' => false,
            'msg' => 'success',
            'csrfHash' => csrf_token()
    	];
 	    if ($request->header('X-CSRF-TOKEN') != csrf_token()) {
 			$response = [
    	         'success' => false,
    	         'msg' => 'success',
    	         'csrfHash' => csrf_token()
    		];
        }else {
     	    $messages = [
        		'image_loader.required_without_all' => trans('msg.Interior is required when none of Exterior / Logo are present.'),
                'image_exterior.required_without_all' => trans('msg.Exterior is required when none of Interior / Logo are present.'),
                'image_logo.required_without_all'   => trans('msg.Logo is required when none of Interior / Exterior are present.'),
                'image_loader.mimes'                =>  trans('msg.The Interior must be a file of type: jpg,jpeg'),
                'image_exterior.mimes'              =>  trans('msg.The Exterior must be a file of type: jpg,jpeg'),
                'image_logo.mimes'                  =>  trans('msg.The Logo must be a file of type: jpg,jpeg'),
	    	];

     		$rules   = [
     		    'image_loader' => 'required_without_all:image_exterior,image_logo|mimes:jpeg,jpg',
                'image_exterior' => 'required_without_all:image_loader,image_logo|mimes:jpeg,jpg',
                'image_logo' => 'required_without_all:image_loader,image_exterior|mimes:jpeg,jpg',
         	];

	     	$validator  = Validator::make($request->all(), $rules,$messages);
	     	$msg= '';
	     	if ($validator->fails()) {
	         	$data   	= $validator->messages();
	         	$msg 		= $data->first();
	     	}
	     	if($msg !== ''){
	     		$response = [
		         'success' => false,
		         'csrfHash' => csrf_token(),
		         'msg' => $msg,
		    	];
	     	}else{
	     	    DB::beginTransaction();
	     		try{
	     		    $restroId	=	$request->session()->get('id');
             	    $restroObj 	=	new Restaurant();
             		$alreadyImg =   $restroObj->get_record_single(['id'=>$restroId]); 
             		/* Interior Image */
             		if($request->hasFile('image_loader')){
                 		$interiror  =   $request->file('image_loader');
                 		$x          =   $request->x;
                		$y          =   $request->y;
                		$new_w      =   $request->w;
                		$new_h      =   $request->h;
                		$folder     =   'public/assets/uploads/interior/';
                        $orig_w     =   67; $orig_h = 60;
                		$imageFile  =   $interiror->getPathName();
                		$ext        =   $interiror->getClientOriginalExtension();
                		$filename   =   'interior'.'_'.$restroId.substr(md5(time()), 0, 4).'.'.$ext;
                        $imgUpload  =   $this->convertImg($imageFile,$x,$y,$orig_w,$orig_h,$new_w,$new_h,$folder,$filename);
                        if($imgUpload){
                            if(!empty($alreadyImg->interior_img)){
                                if (file_exists($alreadyImg->interior_img)) {
                                    unlink($alreadyImg->interior_img);
                                }
                            }
                            
                            $finalImg   =   $folder.$filename;
                     		$update		=	array('interior_img'=>$finalImg);
                
                     		$restroObj->update_record(['id'=>$restroId],$update);
                        }
             		}
                    
                    /* Exterior Image */
                    if($request->hasFile('image_exterior')){
                 		$exteriror  =   $request->file('image_exterior');
                 		$x          =   $request->ex;
                		$y          =   $request->ey;
                		$new_w      =   $request->ew;
                		$new_h      =   $request->eh;
                		$folder     =   'public/assets/uploads/exterior/';
                        $orig_w     =   67; $orig_h = 60;
                		$imageFile  =   $exteriror->getPathName();
                		$ext        =   $exteriror->getClientOriginalExtension();
                     	$filename   =   'exterior'.'_'.$restroId.substr(md5(time()), 0, 4).'.'.$ext;
                     	$imgUpload  =   $this->convertImg($imageFile,$x,$y,$orig_w,$orig_h,$new_w,$new_h,$folder,$filename);
                     	if($imgUpload){
                     	    if(!empty($alreadyImg->exterior_img)){
                                if (file_exists($alreadyImg->exterior_img)) {
                                    unlink($alreadyImg->exterior_img);
                                }
                            }
                            
                            $finalImg   =   $folder.$filename;
                     		$update		=	array('exterior_img'=>$finalImg);
                
                     		$restroObj->update_record(['id'=>$restroId],$update);
                        }
                    }
                    
                    /* Logo Image */
                    if($request->hasFile('image_logo')){
                 		$logo       =   $request->file('image_logo');
                 		$x          =   $request->lx;
                		$y          =   $request->ly;
                		$new_w      =   $request->lw;
                		$new_h      =   $request->lh;
                		$folder     =   'public/assets/uploads/logo/';
                        $orig_w     =   67; $orig_h = 60;
                		$imageFile  =   $logo->getPathName();
                		$ext        =   $logo->getClientOriginalExtension();
                		$filename   =   'logo'.'_'.$restroId.substr(md5(time()), 0, 4).'.'.$ext;
                     	$imgUpload  =   $this->convertImg($imageFile,$x,$y,$orig_w,$orig_h,$new_w,$new_h,$folder,$filename);
                        if($imgUpload){
                            if(!empty($alreadyImg->logo_img)){
                                if (file_exists($alreadyImg->logo_img)) {
                                    unlink($alreadyImg->logo_img);
                                }
                            }
                            
                            $finalImg   =   $folder.$filename;
                     		$update		=	array('logo_img'=>$finalImg);
                
                     		$restroObj->update_record(['id'=>$restroId],$update);
                        }
                    }
                    $response = [
    	                'success' => true,
    	                'msg' => 'success',
    	                'csrfHash' => csrf_token()
        	    	];
	     		}catch(\Illuminate\Database\QueryException $ex){
	     			DB::rollback();
	     			$response = [
    			         'success' => false,
    			         'csrfHash' => csrf_token(),
    			         'msg' => $ex->getMessage()
			    	];
	     		}
	     		DB::commit();
	     		
	     	}
	     	return response()->json($response);
     	}
    }

    protected function convertImg($imageFile,$x,$y,$orig_w,$orig_h,$new_w,$new_h,$folder,$filename)
    {
        $img_r  = imagecreatefromjpeg($imageFile);
        $dst_r  = imagecreatetruecolor($orig_w,$orig_h);
        imagecopyresampled($dst_r, $img_r, 0,0,$x,$y,$orig_w,$orig_h,$new_w,$new_h);
    
        header('Content-type: image/jpeg');
        imagejpeg($dst_r, $folder.$filename, 100);

        imagedestroy($dst_r);
        imagedestroy($img_r);
        return true;
    }
    
    public function contact_validation(Request $request)
    {
        $response = [
            'success' => false,
            'msg' => 'success',
            'csrfHash' => csrf_token()
    	];
 	    if ($request->header('X-CSRF-TOKEN') != csrf_token()) {
 			$response = [
    	         'success' => false,
    	         'msg' => 'success',
    	         'csrfHash' => csrf_token()
    		];
        }else {
            $msg = '';
            $new_contact_list = array();
            if(is_array($request->myContact)){  
	            $contact = array_filter($request->myContact);
				$new_contact_list = array_map(
				    function($value) { return trim($value); },
				    $contact
				);
	        }
	   
	        if(empty($new_contact_list)){
     			$msg = trans('msg.Add atleast one contact number');
     		}
	     	if($msg !== ''){
	     		$response = [
		         'success' => false,
		         'csrfHash' => csrf_token(),
		         'msg' => $msg,
		    	];
	     	}else{
	     	    DB::beginTransaction();
	     		try{
	     		    $restroId	=	$request->session()->get('id');
             	    $contactObj =	new Restrocontact();
             	    
             	    $new_code_list = array();
                    if(is_array($request->contactCountry)){  
        	            $contactcode = array_filter($request->contactCountry);
        				$new_code_list = array_map(
        				    function($value) { return trim($value); },
        				    $contactcode
        				);
        	        }
             		
             		for($x=0; $x<count($new_contact_list); $x++)
                    {
                        $insert_array = array(
                            "restro_id"=>$restroId,
                            "contact_number"=>$new_contact_list[$x]
                        );
                        if(!empty($new_code_list[$x])){
                            $insert_array["country_code"] = $new_code_list[$x];
                        }
                        
                        
                        $record_count = $contactObj->getCount($insert_array);
                        if(!$record_count)
                        {
                            $contactObj->saveData($insert_array);
                        }
                    }
                    $response = [
    	                'success' => true,
    	                'msg' => 'success',
    	                'csrfHash' => csrf_token()
        	    	];
	     		}catch(\Illuminate\Database\QueryException $ex){
	     			DB::rollback();
	     			$response = [
    			         'success' => false,
    			         'csrfHash' => csrf_token(),
    			         'msg' => $ex->getMessage()
			    	];
	     		}
	     		DB::commit();
	     		
	     	}
	     	return response()->json($response);
     	}
    }
    
    public function drink_validation(Request $request)
    {
        $response = [
            'success' => false,
            'msg' => 'success',
            'csrfHash' => csrf_token()
    	];

 		if ($request->header('X-CSRF-TOKEN') != csrf_token()) {
 			$response = [
	         'success' => false,
	         'msg' => 'success',
	         'csrfHash' => csrf_token()
    		];
        }else {
     		$messages = [
        		'drinkImg.required'     =>trans('msg.Image is required'),
             	'drinkName.required'    =>trans('msg.Name is required'),
             	'drintGredient.required'=>trans('msg.What is in drink?'),
             	'description.required'  =>trans('msg.Add something about drink'),
             	'drinkImg.mimes'        =>trans('msg.The image must be a file of type: jpg,jpeg'),
	    	];

     		$rules   = ['drinkImg'   => 'required|mimes:jpeg,jpg',
            	'drinkName' =>'required',
            	'drintGredient'=>'required',
            	'description'=>'required'
         	];

	     	$validator  = Validator::make($request->all(), $rules,$messages);
	     	$msg= '';
	     	if ($validator->fails()) {
	            $data   	= $validator->messages();
	            $msg 		= $data->first();
	     	}

	     	if($msg !== ''){
	     		$response = [
		         'success' => false,
		         'csrfHash' => csrf_token(),
		         'msg' => $msg,
		    	];
	     	}else{
	     		DB::beginTransaction();
	     		try{
	     			$prodObj    =   new Product();
		     		$restroId	=	$request->session()->get('id');
		     		
		     		/* Drink Image */
		     		$finalImg   =   '';
             		if($request->hasFile('drinkImg')){
                 		$image      =   $request->file('drinkImg');
                 		$x          =   $request->dx;
                		$y          =   $request->dy;
                		$new_w      =   $request->dw;
                		$new_h      =   $request->dh;
                		$folder     =   'public/assets/uploads/products/';
                        $orig_w     =   67; $orig_h = 60;
                		$imageFile  =   $image->getPathName();
                		$ext        =   $image->getClientOriginalExtension();
                		$filename   =   'drink'.'_'.$restroId.substr(md5(time()), 0, 4).'.'.$ext;
                        $imgUpload  =   $this->convertImg($imageFile,$x,$y,$orig_w,$orig_h,$new_w,$new_h,$folder,$filename);
                        if($imgUpload){
                            $finalImg   =   $folder.$filename;
                     	}
             		}
		     		$insert		=	array('restro_id'=>$restroId,'prod_name'=>$request->drinkName,'prod_type'=>'1','prod_about'=>$request->description,'prod_img'=>$finalImg);
		     		if(!empty($request->drintGredient)){
		     			$insert['prod_ingredient'] = $request->drintGredient;
		     		}

		     		$prodObj->saveData($insert);
		     		DB::commit();
		     		$response = [
			            'success' => true,
			            'msg' => 'success',
			            'csrfHash' => csrf_token()
			    	];
				}catch(\Illuminate\Database\QueryException $ex){
	     			DB::rollback();
	     			$response = [
			            'success' => false,
			            'csrfHash' => csrf_token(),
			            'msg' => $ex->getMessage()
			    	];
	     		}
            }
        }
    	return response()->json($response);
    }
    
    public function update_prod_status(Request $request){
        $response = [
            'success' => false,
            'msg' => 'success',
            'csrfHash' => csrf_token()
    	];

 		if ($request->header('X-CSRF-TOKEN') != csrf_token()) {
 			$response = [
	            'success' => false,
	            'msg' => 'success',
	            'csrfHash' => csrf_token()
    		];
        }else {
     		$messages = [
        		'myId.required'     =>trans('msg.Image is required')
	    	];

     		$rules   = [
            	'myId' =>'required'
         	];

	     	$validator  = Validator::make($request->all(), $rules,$messages);
	     	$msg= '';
	     	if ($validator->fails()) {
	            $data   	= $validator->messages();
	            $msg 		= $data->first();
	     	}

	     	if($msg !== ''){
	     		$response = [
	                'success' => false,
	                'csrfHash' => csrf_token(),
	                'msg' => $msg,
		    	];
	     	}else{
	     		DB::beginTransaction();
	     		try{
	     			$prodObj    =   new Product();
		     		$restroId	=	$request->session()->get('id');
		     		$id         =   Crypt::decryptString($request->myId);
		     		$prodInfo   =   $prodObj->get_record_single(['restro_id'=>$restroId,'id'=>$id]);
		     		$update     =   ['prod_status'=>'1'];
		     		if($prodInfo->prod_status == '1'){
		     		    $update     =   ['prod_status'=>'0'];
		     		}
		     		
		     		$prodObj->update_record(['restro_id'=>$restroId,'id'=>$id],$update);
		     		DB::commit();
		     		$response = [
			            'success' => true,
			            'msg' => 'success',
			            'csrfHash' => csrf_token()
			    	];
				}catch(\Illuminate\Database\QueryException $ex){
	     			DB::rollback();
	     			$response = [
			            'success' => false,
			            'csrfHash' => csrf_token(),
			            'msg' => $ex->getMessage()
			    	];
	     		}
            }
        }
    	return response()->json($response);
    }




 	public function signout(Request $request){
 		$request->session()->flush();
    	return redirect ("/");
 	}
}