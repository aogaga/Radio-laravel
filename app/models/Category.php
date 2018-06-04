<?php

class Category extends Model {

    protected $table = 'categorys';
    protected $fillable = array('name', 'description');


    protected static $rules = [
        'name' => 'required'
    ];

    //Use this for custom messages
    protected static $messages = [
        'name.required' => 'Category name is required'
    ];
}