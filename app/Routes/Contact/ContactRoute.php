<?php

namespace App\Routes\Contact;

use App\Http\Controllers\Api\ContactController;
use Illuminate\Support\Facades\Route;

class ContactRoute
{
    public static function V1()
    {
        return Route::controller(ContactController::class)->group(function ()
        {
            Route::get('/index', 'index');
            Route::get('/{contact_id}/show', 'show');
            Route::post('/store', 'store');
            Route::post('/{contact_id}/update', 'update');
            Route::delete('/{contact_id}/delete', 'delete');
        });
    }
}