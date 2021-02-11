<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Laratrust\Models\LaratrustPermission;

class Permission extends LaratrustPermission
{
    use SoftDeletes;
    public $guarded = [];

    public function roles(){
        return $this->belongsToMany(Role::class);
    }
}
