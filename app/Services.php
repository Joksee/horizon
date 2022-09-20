<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Services extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name_services',
        'image_services',
        'description_services',
        'description2_services'
    ];

    protected $dates = [
        'deleted_at',
    ];
    //alterar depois o ainhamnto da tabela de servicelists
    public function Servicelists()
    {
        return $this->hasMany(Servicelists::class); 
    }
}
