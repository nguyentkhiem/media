<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    protected $table = 'vp_users';
    protected $primaryKey = 'user_id';
    protected $guarded = [];
}
