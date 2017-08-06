<?php
/**
 * Created by PhpStorm.
 * User: Jlaupa
 * Date: 6/8/2017
 * Time: 16:54
 */
namespace App\Http\Controllers\Auth;

use Socialite;

class GmailController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('github')->user();

        // $user->token;
    }
}