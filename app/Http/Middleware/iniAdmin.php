<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class IniAdmin

{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user = Auth::user();
            // Define admin emails or criteria here
            $adminEmails = [
                'admin@example.com', // replace with actual admin email(s)
            ];
            if (in_array($user->email, $adminEmails)) {
                return $next($request);
            } else {
                return redirect('/')->withErrors('Anda tidak memiliki akses ke halaman ini.');
            }
        }
        return redirect('sesi')->withErrors('Silahkan Masukan Username Dan Password Yang Benar');
    }
}
