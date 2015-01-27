<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormElementItem extends Model {

    protected $table = 'form_element_items';
    public $timestamps = true;

    public function element()
    {
        return $this->belongsTo('FormElement');
    }

}