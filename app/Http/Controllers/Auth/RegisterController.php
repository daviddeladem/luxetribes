<?php

namespace App\Http\Controllers\Auth;


use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function store(Request $request)
    {

        if($request->hasfile('profile'))
            {
                if(request('profile')->getSize() == false){
                    Alert::error('Image Size Too large', 'Please upload image with size less than 2MB');
                    return back();
                }
            }
        $validator = Validator::make($request->all(), [
            'fullname' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'date_of_birth' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required','min:8',
               'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%@^&]).*$/'],[Rules\Password::defaults()],
            'profile.*' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',

            'bio' => 'string|max:555',
        ]);


        if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {

            return back()->withInput()->withErrors($validator);

        }
        else
        {
            if($request->hasfile('profile'))
            {
                   $path = Storage::putFile('Profile', $request->file('profile'));
            }
            $user = User::create([
            'fullname' => $request->fullname,
            'bio' => $request->bio,
            'date_of_birth' => $request->date_of_birth,
            'nationality' => $request->country,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'profile' => $path ?? NULL,
            'email_verified_at' => Carbon::now()

        ]);
       auth()->login($user);
       Alert::success('Registeration Successful');
        return redirect('/user');
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */

}