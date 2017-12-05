<?php

namespace App\Http\Controllers\Session;

use App\Http\Controllers\Controller;
use App\Repositories\User\UserRepository;
use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

 public function __construct(UserRepository $userRepository, User $user){

     $this->userRepository = $userRepository;
     $this->user = $user;

 }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('landing.auth.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        
        /*
        |--------------------------------------------------------------------------
        | USER ACCOUNT CREATION
        |--------------------------------------------------------------------------
        |
        */
        
        // VALIDATION
        
           //Inicia validação de dados recebidos
                   $this->validate(request(), [
                       'user_name' => 'required',
                       'user_email' => 'required|email',
                       'password' => 'required|confirmed',
                       'password_confirmation' => 'required',
                       'user_province' => 'required',
                       'user_city' => 'required'
                     ]);
        

        // lets check if user already exists
        if($this->userRepository->checkExists($request->user_email)){

         session()->flash('error','Email already exists.');
         return redirect()->back();


        } else {

            // Proceed with user creation

            $newUser = $this->user->create([
                'name' => $request->user_name,
                'email' => $request->user_email,
                'password' => bcrypt($request->password),
                'province_id' => $request->user_province,
                'city_id' => $request->user_city
            ]);


         if($newUser) {
             session()->flash('success','Welcome aboard! Your user was created successfully!');

             return redirect()->back();
         } else {
             session()->flash('error','An error occurred while trying to create your user.');

             return redirect()->back();
         }






        }


        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
