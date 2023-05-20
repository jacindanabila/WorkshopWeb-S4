<?php
namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function index()
    // {
    //     return view('auth.login');
    // }
     public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string', //validasi kolom username
            'password' => 'required|string|min:6',
        ]);
        $loginType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $login = [
            $loginType => $request->username,
            'password' => $request->password,
        ];
        if (auth()->attempt($login)) {
            return redirect()->route('home');
        }
        return redirect()->route('login')->with(['error' => 'Email/Password salah!']);
    }
}
