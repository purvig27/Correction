<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
   public $timestamps = true;
   protected $table = 'restaurant';
   protected $fillable = ['restro_name','retro_email','password','profile_status'
   ,'profile_status','address','country','postal_code','latitude','longitude','service_type'
   ,'website','business_info','cashback_allow','cashback_val','accept_rewards',
   'interior_img','exterior_img','logo_img'];

   	public function get_record_single($whr)
    {
        $x = $this->where($whr)->first();
        return $x;
    }

    public function get_record_all($select='*',$whr='')
    {
        $all_record = $this->select($select)->where($whr)->orderBy("id","desc")->get()->toArray();
        return $all_record;
    }

    public function update_record($where,$all_var)
    {
        $x = $this->where($where)->update($all_var);
        return $x;
    }

    public function getCount($whr){
        $x = $this->where($whr)->count();
        //dd(DB::getQueryLog());
        return $x;
    }

    public function saveData($insert){
        $this->create($insert);
        return;
    }
}
