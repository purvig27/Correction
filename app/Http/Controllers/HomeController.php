<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
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

class HomeController extends Controller
{
    public function __construct(){
        DB::enableQueryLog();
    }

    public function loginsubmit(Request $request){ 
        $messages= [
            'email.required' => trans('msg.Email required'),
            'email.email' => trans('msg.Email type must be of email'),
            'password.required' => trans('msg.Password required')
        ];
        $rules   = ['email'   => 'required|email',
            'password' =>'required'
            ];
        
        $validatedData  = $request->validate($rules,$messages);
        $email          = $request->email;
        $password       = $request->password;
        $restro_obj     = new Restaurant();
        
        $isExist = $restro_obj->getCount(['retro_email'=>$email]);
        if($isExist){
            $restroInfo     = $restro_obj->get_record_single(['retro_email'=>$email]);
            $hashedPassword = $restroInfo->password;
            if(Hash::check($request->password, $hashedPassword)){
                if($restroInfo->profile_status == '1'){
                    $remember_me = $request->rememberMe ? true : false;
                    if($remember_me) {
                    	setcookie ("coolreward_restro_login",$request->email,time()+ (10 * 365 * 24 * 60 * 60));
                    } else {
                    	setcookie ("coolreward_restro_login","");
                    }
                    
                    Session(array('id'=>$restroInfo->id));
                    $message =  trans("msg.Login successfully");
                    $request->session()->flash("message","<div class='alert  alert-success'><strong>".$message.".</strong></div>");
                    return redirect("dashboard");
                }else{
                    $message =  trans("msg.Account inactive");
                    $request->session()->flash("message","<div class='alert  alert-danger'><strong>".$message.".</strong></div>");
                    return redirect("/");
                }
            }else{
                $message =  trans("msg.Invalid password");
                $request->session()->flash("message","<div class='alert  alert-danger'><strong>".$message.".</strong></div>");
                return redirect("/");
            }
        }else{
            $message =  trans("msg.Account not exist");
            $request->session()->flash("message","<div class='alert  alert-danger'><strong>".$message.".</strong></div>");
            return redirect("/");
        }
        
    }
    
    public function signupSubmit(Request $request){
        $message = [
            'email.required' => trans('msg.Email required'),
            'email.email' => trans('msg.The email must be a valid email address.'),
            'email.unique' => trans('msg.The email has already been taken.'),
            'password.required' => trans('msg.Password required'),
            'password.min' => trans('msg.The password must be at least 8 characters.'),
            'cpassword.required' => trans('msg.Confirm Password required'),
            'cpassword.required_with' => trans('msg.The confirm password field is required when password is present.'),
            'cpassword.same' => trans('msg.The confirm password and password must match.'),
        ];
        $rules = [
            'email'    		=> 'required|email|unique:restaurant,retro_email',
			'password'    	=> 'required|min:8',
			'cpassword' =>'required|required_with:password|same:password',
	    ];
	    
	    $validatedData = $request->validate($rules,$message);

		/* Get and set data in DB */
		DB::beginTransaction();
     	try{
            $restro_obj     = new Restaurant();
            $email          = $request->email;
            $password       = Hash::make($request->password);

            $check_referal = 1;
            if(!empty($referal)){
                $check_referal = $userObj->getCount(array('referal_code'=>$referal));
            }
            
            if($check_referal == 0){
                $message =  'Invalid referal code';
                $request->session()->flash("message","<div class='alert  alert-danger'><strong>".$message.".</strong></div>");
                return redirect("register")->withInput();
            }else{
                $insert_data = array("retro_email" => $email,"password" => $password);
                
                $restro_obj->saveData($insert_data);
            }
 	    }catch(QueryException $ex){
    	    $message =  $ex->getMessage();
            DB::rollBack();
        	$request->session()->flash("message","<div class='alert  alert-danger'><strong>".$message.".</strong></div>");
        	return redirect("signup")->withInput();
        }
     	DB::commit();
     	
        $message =  "Registration successfully done";
		$request->session()->flash("message","<div class='alert  alert-success'><strong>".$message.".</strong></div>");
     	return redirect("/");
    }
}