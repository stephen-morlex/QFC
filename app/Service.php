<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Service extends Model
{
    use Resizable;
    protected $guarded = [];
    public function cat()
    {
        return $this->belongsTo('App\ServiceCategory');
    }
}