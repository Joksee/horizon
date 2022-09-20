<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Servicelists extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'Services_id',
        'name_Servicelists',
        'description_Servicelists',
        'exclusive_Servicelists',
        'image_Servicelists'
    ];

    protected $dates = [
        'deleted_at',
    ];

    public function Services()
    {
        return $this->belongsTo(Services::class); 
    }
}
