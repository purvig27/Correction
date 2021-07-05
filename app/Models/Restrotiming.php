<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restrotiming extends Model
{
   public $timestamps = true;
   protected $table = 'restro_timing';
   protected $fillable = ['restro_id','day','open_close','starttime','endtime'];

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

    public function deleteAd($where){
        $this->where($where)->delete();
        return;
    }
}
