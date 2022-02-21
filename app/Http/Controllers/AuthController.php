<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AuthController extends Controller {

    public function index() {
        return view( 'login' );
    }

    public function postLogin( Request $request ) {
        $credentials = $request->validate( [
            'email' => 'required|email:dns',
            'password' => 'required',
        ] );

        if ( Auth::attempt( $credentials ) ) {
            $request->session()>regenerate();
            return redirect()->intended( 'welcome' );
        }

        return back()->with( 'error', 'Email or Password Wrong!' );

        // dd( 'berhasil login!' );

        // $credentials = $request->only( 'email', 'password' );
    }

    public function register() {
        return view( 'register' );
    }

}