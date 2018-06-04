<?php

class Station extends Model {
    protected $fillable = array('name','logo', 'url','description', 'categorys_id','phone',
    'email','city', 'country','website','facebook','twitter' );
//    protected $guarded = array('id', 'categorys_id');

    protected $table = 'stations';



    protected static $rules = [
        'name' => 'required',
        'url'=> 'required',
        'categorys_id'=> 'required',
    ];

    //Use this for custom messages
    protected static $messages = [
        'name.required' => 'Station name is required',
        'url.required' => 'Station Streaming url is required',
        'categorys_id.required' => 'Please assign station to a category'

    ];



    public function getcategoryname(){

        return Category::where('id',$this->categorys_id)->first()->name;
    }


    public function getCountry(){

        return Country::where('id', $this->country)->first()->name;
    }

    public function  category(){

        return $this->belongsTo('Category');
    }
}