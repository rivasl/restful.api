<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $table = "manufacturers";
    protected $fillable = array('name', 'website');

    // Oculta estos campos en el json
    protected $hidden=['created_at', 'updated_at'];

    public function vehicles()
    {
        return $this->hasMany('\App\Vehicle');
    }
}
