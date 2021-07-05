<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = true;
    protected $table = 'product';
    protected $fillable = ['restro_id','prod_name','prod_ingredient','prod_type','prod_about','prod_img','prod_status'];

   	public function get_record_single($whr)
    {
        $x = $this->where($whr)->first();
        return $x;
    }

    public function get_record_all($select='*',$whr='',$limit=4)
    {
        //skip = OFFSET
        //skip(0)->take(10)  //get first 10 rows
        //->skip(10)->take(10)  //get next 10 rows
        
        $all_record = $this->select($select)->where($whr)->orderBy("id","desc");
        if(!empty($limit)){
            //$all_record->skip($offset)->take($limit);
            $all_record->take($limit);
        }
        
        return $all_record->get()->toArray();
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
