<?php

namespace App\Http;

use Illuminate\Http\Request;

trait RedirectTrait
{
    /**
     * Where to redirect users after register/login/reset based in roles.
     *
     * @param \Iluminate\Http\Request  $request
     * @param mixed $user
     * @return mixed
     */
    public function RedirectBasedInRole(Request $request, $user) {

    $route = '';

    switch ($user->getRole()) {
        # Admin
        case '1':
            $route = '/a/home';  // route admin
            break;
        # Pendamping
        case '2':
            $route = '/p/home'; // route pendamping
            break;
        # Toko
        case '3':
        $route = '/t/home'; // route toko
        break;
        # User
        case '4':
            $route = '/u/home'; // route user
            break;
        default: break;
    }

    return redirect()->intended($route);
    }

}