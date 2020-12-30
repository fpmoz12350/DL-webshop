<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
    use SoftDeletes;
    public $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
