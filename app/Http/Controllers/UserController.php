<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Http\Request;
use App\Rules\Twofieldrequest;
use Illuminate\Validation\Rule;

use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\isEmpty;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //Show Register/Create Form 
    public function create() {
        return view("users.register");
    }

    // Create new user 
    //,"email",Rule::unique("users","email")
    public function store(Request $request) 
    {
        $formFields = $request->validate([
            "name"=> ["required","min:3"],
            "email"=> ["required"],
            "password"=> ["required","confirmed","min:2"]
            
        ]);

        $formFields ["password"] = bcrypt($formFields ["password"]);


        
        $user = User::create($formFields);
        auth()->login($user);

        return redirect('/listings')->with('message','User created and logged in');

    }

    // logout 
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/listings')->with('message','Logged out');
    }

    public function login(Request $request) {
        return view('users.login');
    }

    public function authenticate(Request $request) {
        
        


        $formFields = $request->validate([
            "name"=> ["required","max:100", 
            function ($attribute, $value, $fail) {
                $existsInEmail = DB::table('users')->where('email', $value)->exists();
                $existsInName = DB::table('users')->where('name', $value)->exists();
                if (!$existsInEmail && !$existsInName) {
                    $fail('invalid credentials');
                }
            }],
            "password"=> ["required","min:2"]
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('listings')->with('message','logged in');
        }

        return back()->withErrors(['password'=> 'invalid credentials']);

        
    }
}


// TO DO: MAKE THIS SHIT MAKE SENSE (Two fields: "name" and email" if only one is full and it passes and validates it )
/*if (empty($request->name) && empty($request->email)) {
            return redirect('register')
                ->withErrors(['Either name or email must be filled.'])
                ->withInput();
        }

        $validator = Validator::make($request->all(), [
            'password'=>["required","min:2"]
        ]);


        $validator->sometimes('name', 'required|min:3', function ($input) {
            $temp_bool = false;
            if (isEmpty($input->email)) {
                $temp_bool = true;
            }
            return $temp_bool;
        });

        
        $validator->sometimes('email', 'required|email', function ($input) {
            $temp_bool2 = false;
            if (isEmpty($input->name)) {
                $temp_bool = true;
            }
            return $temp_bool2;
        });

        if ($validator->fails()) {
            return redirect('/login')->withErrors($validator)->withInput();
        }


        /* $formFields = $request->validate([
            "password"=> ["required","min:2"],
            "name"=> [""],
            "email" => ["email","require_if "] 
            
        ]);*/
