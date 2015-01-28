<?php namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Form extends Model {

    protected $table = 'forms';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function elements()
    {
        return $this->hasMany('App\FormElement');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}