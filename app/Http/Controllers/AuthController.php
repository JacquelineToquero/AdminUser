<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
  
class AuthController extends Controller
{
    public function register()
    {
        return view('auth/register');
    }
  
    public function registerSave(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ])->validate();
  
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => 'Admin'
        ]);
  
        return redirect()->route('login');
    }
  
    public function login()
    {
        return view('auth/login');
    }
  
    public function loginAction(Request $request)
{
    // Validate the incoming request
    Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required',
    ])->validate();

    // Attempt to authenticate the user
    if (Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
        // Regenerate the session after successful login
        $request->session()->regenerate();

        // Get the authenticated user
        $user = Auth::user();

        // Check user type and redirect accordingly
        if ($user && $user->type === 'admin') {
            return redirect()->route('user.index'); // Ensure this route exists
        } else {
            return redirect()->route('home'); // Ensure this route exists
        }
    }

    // If authentication failed, return with an error message
    throw ValidationException::withMessages([
        'email' => trans('auth.failed'), // Ensure this translation exists
    ]);
}

  
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
  
        $request->session()->invalidate();
  
        return redirect('/');
    }
 
    public function profile()
    {
        return view('profile');
    }
    
}