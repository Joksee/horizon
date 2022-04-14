<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name_contacts',
        'email_contacts',
        'message_contacts'
    ];
}
