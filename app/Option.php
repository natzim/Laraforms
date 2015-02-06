<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model {

    protected $table = 'options';
    public $timestamps = true;

    public function question()
    {
        return $this->belongsTo('App\Question');
    }

}