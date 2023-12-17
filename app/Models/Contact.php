<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    use \App\Scopes\Contact\ContactScope;

    protected $fillable = [
        'name',
        'gender',
        'phone_number',
        'email',
    ];

    protected $casting = [
        'name'         => 'string',
        'gender'       => 'string',
        'phone_number' => 'string',
        'email'        => 'string',
    ];

    
}
