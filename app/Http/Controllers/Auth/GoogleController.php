<?php
/**
 * Created by PhpStorm.
 * User: Jlaupa
 * Date: 6/8/2017
 * Time: 16:54
 */
namespace App\Http\Controllers\Auth;

use Socialite;
use App\Http\Controllers\Controller;


class GoogleController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();
        dd($user);
        echo url();
        // $user->token;
    }
}