<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Libraries\CIAuth;
use App\Libraries\Hash;
use App\Models\User;


class AuthController extends BaseController
{
    protected $helpers = ['url','form'];
    public function loginform()
    {
       $data = [
        'pageTitle'=> 'Login',
        'validation'=>null
       ];
       return view('backend/pages/auth/login', $data);
    }
    public function loginHandler(){
        $fieldType = filter_var($this->request->getvar('login_id'), FILTER_VALIDATE_EMAIL) ?'email':'username';

       if($fieldType == 'email'){
        $isvalid = $this->validate([
            'login_id' =>[
                'rules'=> 'required|valid_email|is_not_unique[users.email]',
                'errors' =>[
                    'required'=>'Email is required',
                    'valid_email'=>'please, check the email field. It does not appears to be valid.',
                   'is_not_unique'=> 'Email is not exist in our system'

                ]
                ],
                'password'=>[
                    'rules'=> 'required|min_length[5]|max_length[45]',
                    'errors'=>[
                        'required'=> 'Password is required',
                        'min_length'=> 'Password must have atleast 5 characters in length.',
                        'max_length'=> 'Password must not have characters more than 45 in length.',



                ]
                
            ]
         ]);
        
        }else{
            $isvalid = $this->validate([
                'login_id' =>[
                    'rules'=> 'required|is_not_unique[users.username]',
                    'errors' =>[
                        'required'=>'Username is required',
                       'is_not_unique'=> 'Username is not exist in our system'
    
                    ]
                    ],
                    'password'=>[
                        'rules'=> 'required|min_length[5]|max_length[45]',
                        'errors'=>[
                            'required'=> 'Password is required',
                            'min_length'=> 'Password must have atleast 5 characters in length.',
                            'max_length'=> 'Password must not have characters more than 45 in length.',
    
    
    
                    ]
                    
                ]
             ]);
    

       }
       if(!$isvalid){
        return view('backend/pages/auth/login',[
            'pageTitle'=> 'login',
            'validation'=> $this->validator
        ]);

       }else{
        $user= new User();
        $userInfo= $user->where($fieldType, value: $this->request->getVar('login_id'))->first();
        $check_password= Hash::check( $this->request->getVar('password'), $userInfo['password']);

        if(!$check_password){
            return redirect()->route('admin.login.form')->with('fail','wrong password')->withInput();
        }else{
            CIAuth::setCIAuth($userInfo); //Important line
            return redirect()->route('admin.home');
        }
    }

    }
}
