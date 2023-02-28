<?php

namespace App\Http\Controllers;

// use App\Models\Employee;
// use App\Models\User;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index(){
        return 'Hello from UserController';
    }

    public function login(){
        if(View::exists('user.login')){
            return view('user.login');
        }else{
            return abort(404);
            // return response()->view('errors.404');
        }
        
    }

    public function process(Request $request){
        $validated = $request->validate([
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required'
        ]);

        if(auth()->attempt($validated)){
            $request->session()->regenerate();

            return redirect('/')->with('message', 'Welcome Back!');
        }
    }

    public function register(){
        return view('user.register');
    }

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'LogOut Successful');
    }

    public function store(Request $request){
        $validated = $request->validate([
            "name" => ['required', 'min:4'],
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        $validated['password'] = bcrypt( $validated['password']);

        $user = User::create($validated);

        auth()->login($user);
        // return $user;
    }

    // public function store(Request $request){
    //     $validated = $request->validate([
    //         "name" => ['required', 'min:4'],
    //         "email" => ['required', 'email', Rule::unique('users', 'email')],
    //         'password' => 'required|confirmed|min:6'
    //     ]);

    //     $validated['password'] = Hash::make( $validated['password']);                
        
    //     $user = User::create($validated);

    //     auth()->login($user);
    //     // dd($user);
    //     // return $user;
    // }

    // public function store(Request $request){
    //     $name = $request->name;
    //     $email = $request->email;
    //     $password = $request->password;


    //     $empl = new Employee();
    //     $empl->name = $name;
    //     $empl->email = $email;
    //     $empl->password = $password;
    //     $empl->save;
    // }

    public function show($id){
        $data =["data" => "data from database"];
        return view('user')
            ->with('data', $data)
            ->with('name', 'Airyne')
            ->with('age', 22)
            ->with('email', 'yonchanlai@mail,com')
            ->with('id', $id);
    }
}
