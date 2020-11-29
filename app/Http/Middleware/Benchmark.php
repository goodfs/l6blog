<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class Benchmark
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
        //前置
        $sTime=microtime(true);
        dd($request->fullUrl());
        $response= $next($request);
        $runTime=microtime(true)-$sTime;
        Log::info("benchmark",[
            'url'=>$request->url(),
            'input'=>$request->input(),
            'time'=>$runTime."ms",
        ]);
        return  $response;
    }
}
