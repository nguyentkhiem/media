<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'user_client';
    protected $primaryKey = 'client_id';
    protected $guarded = [];
}
