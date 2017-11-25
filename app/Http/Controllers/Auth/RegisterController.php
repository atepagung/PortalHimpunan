<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Profile;
use App\Picture;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;

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
    protected $redirectTo = '/home';

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
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        try {

            DB::beginTransaction();

            $waha = User::create([
                'username' => $data['username'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'role_id' => 0
            ]);


            if (isset($data['image'])) {
                $path = $data['image']->storeAs('storage/image', $waha->username.'_pp.jpg');
            }else {
                throw new Exception("Error Processing Request", 1);
            }
            
            Picture::create([
                'link' => $path,
                'user_id' => $waha->id,
                'picturable_id' => 0,
                'picturable_type' => 'hehe',
            ]);

            Profile::create([
                'user_id' => $waha->id,
                'npm' => $data['npm'],
                'firstname' => $data['firstname'],
                'surname' => $data['surname'],
                'JK' => $data['JK'],
                'date_of_birth' => $data['date_of_birth'],
                'address' => $data['address'],
                'phone' => $data['phone'],
                'pp' => $path,
                'about_me' => $data['about_me'],
            ]);

            DB::commit();

        }catch (Exception $e) {
            DB::rollBack();
            echo 'Message : '.$e->getMessage();
        }

        return $waha;
    }
}
