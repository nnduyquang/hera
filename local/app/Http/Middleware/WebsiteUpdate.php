<?php

namespace App\Http\Middleware;

use App\Config;
use Closure;

class WebsiteUpdate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $config=new Config();
        $is_update=$config->getConfigByName('website-update');

        if($is_update=='1'){
            return redirect()->route('frontend.baotri');
        }
        return $next($request);
    }
}
