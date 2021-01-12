<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function setPublishedAttribute($data)
    {
        if(array_key_exists('published', $data)){
            $data['published'] = 1;
        }
        else{
            $data['published'] = 0;
        }
        
        return $data;
    }
}
