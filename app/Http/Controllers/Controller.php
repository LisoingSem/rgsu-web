<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $isLocaleKm;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->isLocaleKm = app()->getLocale() == config('dummy.locale.km');
            view()->share([
                'isLocaleKm'       => $this->isLocaleKm,
            ]);
            return $next($request);
        });
    }
}
