<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $table="vehicles";
    protected $fillable = array('color', 'model','manufacturer_id');

    public function manufacturer()
    {
        return $this->belongsTo('\App\Manufacturer');
    }
}
