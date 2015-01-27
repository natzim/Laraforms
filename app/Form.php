<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

use Illuminate\Database\Eloquent\Model;

class Form extends Model {

    protected $table = 'forms';
    public $timestamps = true;

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];

    public function elements()
    {
        return $this->hasMany('FormElement');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }

}