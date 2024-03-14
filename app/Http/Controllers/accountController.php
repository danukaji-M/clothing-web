<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use SoapClient;
use Tests\TestCase;
use Laravel\Socialite\Facades\Socialite;

class accountController extends Controller

{
    //signup function
    function signUp(Request $req)
    {

        $gender = DB::select("
            SELECT * FROM `gender`
        ");
        //get Json data $req with
        $jsonData = $req->json()->all();

        $fn = isset($jsonData['fn']) ? $jsonData['fn'] : null;
        $ln = isset($jsonData['ln']) ? $jsonData['ln'] : null;
        $email = isset($jsonData['email']) ? $jsonData['email'] : null;
        $ps1 = isset($jsonData['ps1']) ? $jsonData['ps1'] : null;
        $ps2 = isset($jsonData['ps2']) ? $jsonData['ps2'] : null;
        $mobile = isset($jsonData['mobile']) ? $jsonData['mobile'] : null;
        $gendertb = isset($jsonData['gender']) ? $jsonData['gender'] : null;

        $name = $fn . " " . $ln;
        if ($fn != null) {
            //validation
            $validator = Validator::make(
                $jsonData,
                [
                    'fn' => 'required|min:3|max:20',
                    'ln' => 'required|min:3|max:20',
                    'email' => 'required|email|min:10|max:100|unique:users,email',
                    'ps1' => 'required|min:8|max:20',
                    'ps2' => 'required|min:8|max:20|same:ps1',
                    'mobile' => 'required|min:10|max:15|unique:users,mobile',
                    'gender' => 'required'
                ],
                [
                    'fn.required' => 'First name is required.',
                    'fn.min' => 'First name must be at least :min characters.',
                    'fn.max' => 'First name may not be greater than :max characters.',
                    'ln.required' => 'Last name is required.',
                    'ln.min' => 'Last name must be at least :min characters.',
                    'ln.max' => 'Last name may not be greater than :max characters.',
                    'email.required' => 'Email is required.',
                    'email.unique' => 'Email already exists.',
                    'email.email' => 'Email must be a valid email address.',
                    'email.min' => 'Email must be at least :min characters.',
                    'email.max' => 'Email may not be greater than :max characters.',
                    'ps1.required' => 'Password is required.',
                    'ps1.min' => 'Password must be at least :min characters.',
                    'ps1.max' => 'Password may not be greater than :max characters.',
                    'ps2.required' => 'Confirm password is required.',
                    'ps2.min' => 'Confirm password must be at least :min characters.',
                    'ps2.max' => 'Confirm password may not be greater than :max characters.',
                    'ps2.same' => 'Confirm password must match the password field.',
                    'mobile.required' => 'Mobile number is required.',
                    'mobile.min' => 'Mobile number must be at least :min characters.',
                    'mobile.max' => 'Mobile number may not be greater than :max characters.',
                    'mobile.unique' => 'Mobile number already exists.',
                    'gender.required' => 'Gender selection is required.'
                ]
            );
            //validation response
            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()]);
            } else {
                try {
                    if ($fn != null) {
                        DB::insert("
                        INSERT INTO `users`(`name`,`email`,`password`,`remember_token`,`mobile`,`gender_id`) 
                        VALUES('" . $name . "', '" . $email . "', '" . $ps1 . "', '0', '" . $mobile . "', '" . $gendertb . "')
                    ");
                    }
                } catch (\Exception $exception) {
                    return response()->json(['error' => 'Err: ' . $exception->getMessage()]);
                }
            }
        }
        //return response
        if ($req->ajax()) {
            return response()->json(['satatus' => 'Success']);
        } else {
            return view('createAccount', ['genders' => $gender]);
        }
    }



    //login function 
    function signin(Request $req)
    {
        // Retrieve email and password from request
        $alljson = $req->json()->all();
        $email = isset($alljson['email']) ? $alljson['email'] : null;
        $password = isset($alljson['password']) ? $alljson['password'] : null;
        $cookie = isset($alljson['cookies']) ? $alljson['cookies'] : null;

        // Check if email and password match in the database
        if ($email != null) {
            $user = DB::table('users')->where('email', $email)->first();
            if ($user && $user->password === $password) {
                // Set session
                $req->session()->put('user', $user);

                // Check if cookie value is 1
                if ($req->cookie('cookie') == 1) {
                    // Create cookies for email and password
                    $cookieEmail = cookie('email', $email, 60);
                    $cookiePassword = cookie('password', $password, 60);

                    // Return response with cookies
                    return response()->json(['status' => 'Success'])->withCookie($cookieEmail)->withCookie($cookiePassword);
                }

                // Return success response
                return response()->json(['status' => 'Success']);
            }
            // Return error response
            return response()->json(['error' => 'Invalid email or password']);
        }
        return view('login');
    }

    //google login redirrect
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }


    public function handleGoogleCallBack()
    {
        $user = Socialite::driver('google')->user();
        $user = DB::table('users')->where('email', $user->email)->first();
        if ($user) {
            session()->put('user', $user);
            return redirect('/');
        } else {
            return redirect('/signup');
        }
    }

    //logout function

    //user Account function 
    public function userAccount(Request $request)
    {
        return view('userAccount');
    }
}