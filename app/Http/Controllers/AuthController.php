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
            $user = Auth::user();
            $request->session()->regenerate();
            if ( $user->role == 'Admin' ) {
                return redirect()->intended( 'admin/welcome' );
            } else {
                return redirect()->intended( 'welcome' );
            }
        }

        return back()->with( 'error', 'Email or Password Wrong!' );
    }

    public function register() {
        return view( 'register' );
    }

    public function logout( Request $request ) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route( 'login' );
    }

}