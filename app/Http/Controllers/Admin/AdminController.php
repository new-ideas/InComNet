<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function AdminLoginForm()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.auth.login');
    }

    /**
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {

        $this->validateLogin($request);

        $user = User::select('status')->where(['email' => $request->email, 'isAdmin' => 1])->first();

        if ($user) {
            if ($user->status == -1) {
                return redirect()->back()->withErrors(['Your account currently disabled.']);
            } elseif ($user->status == 0) {
                return redirect()->back()->withErrors(['Your account currently in-active.']);
            }
        }
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'isAdmin' => 1], 'remember')) {

            $last_login_ip = $request->ip();
            $last_login = \Carbon\Carbon::now();

            User::where('id', Auth::user()->id)->update([
                'last_login' => $last_login,
                'last_login_ip' => $last_login_ip
            ]);

            return redirect()->to('/admin/dashboard');
        }
        return redirect()->back()->withErrors(['Incorrect Email or Password!'])->withInput();
    }

    /**
     * @param Request $request
     */
    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }

}
