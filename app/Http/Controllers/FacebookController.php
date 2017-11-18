<?php

namespace Solar\Http\Controllers;

use Socialite;
use Illuminate\Http\Request;
use Solar\Services\SocialFacebookAccountService;

class FacebookController extends Controller
{
    /*
     * Create a redirect method to facebook api
     *
     * @return void
     */
    public function redirect()
    {
        return Socialite::drive('facebook')->redirect();
    }

    /*
     * Return a callback method from facebook api
     *
     * @return callback URL from facebook
     */
    public function callback()
    {
        $user = $service->createOrGetUser(Socialite::driver('facebook')->user());
        auth()->login($user);
        return redirect()->to('/');
    }
}
