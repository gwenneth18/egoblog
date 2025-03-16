<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Libraries\CIAuth;
use App\Libraries\Hash;
use App\Models\User;
use App\Models\PasswordResetToken;
use Carbon\Carbon;


class AuthController extends BaseController
{
    protected $helpers = ['url','form','CIMail'];
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
    public function forgotform(){
        $data = array(
            'pageTitle'=>'Forgot password',
            'validation'=>null,

        );
        return view('backend/pages/auth/forgot',$data);
    }
  

    public function SendPasswordResetLink(){
    $isValid = $this->Validate([
     'email'=> [
         'rules'=>'required|Valid_email|is_not_unique[users.email]',
         'errors'=>[
             'required'=> 'Email is required',
             'valid_email'=> 'Please check email field. It does not appears to be valid.',
             'is_not_unique'=> 'Email not exists in system',
         ]
     ]
     ]);
 
     if(!$isValid){
         return view('backend/pages/auth/forgot',[
           'pageTitle' => 'Forgot password',
           'validation' =>$this->validator, 
         ]);
     }else{
         //Get user (admin) details
         $user=new User();
         $user_info= $user->asObject()->where('email',$this->request->getVar('email'))->first();
 
         //Generate token
         $token=bin2hex(openssl_random_pseudo_bytes(65));
 
         //Get reset password token
         $password_reset_token = new PasswordResetToken();
         $isOldTokenExists = $password_reset_token->asObject()->where('email', $user_info->email)->first();
 
         if($isOldTokenExists){
              //Update existing token
             $password_reset_token->where('email', $user_info->email)
                                 ->set(['token'=>$token, 'created_at'=>Carbon::now()])
                                 ->update();
         }else{
             $password_reset_token->insert([
                 'email'=> $user_info->email,
                 'token'=> $token,
                 'created_at'=>Carbon::now(),
             ]);
         }
         
         //Create action link
         $actionLink = route_to('admin.reset-password',$token);
         
         // DEVELOPMENT MODE - Display Reset Link Directly
         
// Display Reset Link Directly
echo "<!DOCTYPE html>
<html>
<head>
    <title>Password Reset</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; margin: 0; padding: 20px; }
        .container { max-width: 800px; margin: 0 auto; background: #f7f7f7; padding: 20px; border-radius: 5px; border: 1px solid #ddd; }
        .header { background: #4e73df; color: white; padding: 10px 20px; margin: -20px -20px 20px; border-radius: 5px 5px 0 0; }
        .btn { display: inline-block; background: #4e73df; color: white; padding: 10px 15px; text-decoration: none; border-radius: 3px; }
        pre { background: #f1f1f1; padding: 10px; border-radius: 3px; overflow-x: auto; word-break: break-all; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h2>Password Reset</h2>
        </div>
        <p>A password reset has been requested for your account.</p>
        <h3>Account Details:</h3>
        <p><strong>User:</strong> {$user_info->name}</p>
        <p><strong>Email:</strong> {$user_info->email}</p>
        <h3>Reset Link:</h3>
        <pre>{$actionLink}</pre>
        <p><a href='{$actionLink}' class='btn' target='_blank'>Reset Password</a></p>
        <p>This link will be active for 15 minutes. After that, you'll need to request a new password reset.</p>
        <p><a href='".route_to('admin.forgot.form')."'>← Back to forgot password form</a></p>
    </div>
</body>
</html>
";
         exit; // Stop execution after displaying the link
         
         /* 
         // Original email sending code - commented out for development
         $mail_data = array(
             'actionLink'=>$actionLink,
             'user'=>$user_info,
         );
 
         $view = \Config\Services::renderer();
         $mail_body= $view->setVar('mail_data', $mail_data)->render('email-templates/forgot-email-template');
 
         $mailConfig = array(
             'mail_from_email'=>env('EMAIL_FROM_ADDRESS'),
             'mail_from_name'=>env('EMAIL_FROM_NAME'),
             'mail_recipient_email'=>$user_info->email,
             'mail_subject'=> 'Reset Password',
             'mail_body' =>$mail_body
         );
         //Send email
         if(sendEmail($mailConfig)){
             return redirect()->route('admin.forgot.form')->with('success','We have emailed your password reset link.');
         }else{
             return redirect()->route('admin.forgot.form')->with('fail','Something went wrong');
         }
         */
     
        }
    }


  public function resetPassword($token = null)
{
    // Validate token exists and is not expired
    $passwordResetToken = new PasswordResetToken();
    $tokenRecord = $passwordResetToken->where('token', $token)->first();

    if (!$tokenRecord) {
        return redirect()->route('admin.login.form')->with('fail', 'Invalid or expired reset token.');
    }

    // Check token expiration (15 minutes)
    $tokenCreatedAt = Carbon::parse($tokenRecord['created_at']);
    if ($tokenCreatedAt->diffInMinutes(Carbon::now()) > 15) {
        // Token expired, delete it
        $passwordResetToken->where('token', $token)->delete();
        return redirect()->route('admin.forgot.form')->with('fail', 'Reset token has expired. Please request a new one.');
    }

    // Prepare data for reset password view
    $data = [
        'pageTitle' => 'Reset Password',
        'token' => $token,
        'validation' => null
    ];

    return view('backend/pages/auth/reset', $data);
}

public function updatePassword()
{
    // Validate input
    $isValid = $this->validate([
        'token' => 'required',
        'new_password' => [
            'rules' => 'required|min_length[5]|max_length[45]',
            'errors' => [
                'required' => 'Password is required',
                'min_length' => 'Password must have at least 5 characters',
                'max_length' => 'Password must not exceed 45 characters'
            ]
        ],
        'confirm_password' => [
            'rules' => 'required|matches[new_password]',
            'errors' => [
                'required' => 'Confirm password is required',
                'matches' => 'Passwords do not match'
            ]
        ]
    ]);

    if (!$isValid) {
        return view('backend/pages/auth/reset', [
            'pageTitle' => 'Reset Password',
            'token' => $this->request->getPost('token'),
            'validation' => $this->validator
        ]);
    }

    // Validate token
    $passwordResetToken = new PasswordResetToken();
    $tokenRecord = $passwordResetToken->where('token', $this->request->getPost('token'))->first();

    if (!$tokenRecord) {
        return redirect()->route('admin.login.form')->with('fail', 'Invalid reset token.');
    }

    // Find user by email
    $user = new User();
    $userInfo = $user->where('email', $tokenRecord['email'])->first();

    if (!$userInfo) {
        return redirect()->route('admin.login.form')->with('fail', 'User not found.');
    }

    // Hash new password
    $newPassword = Hash::make($this->request->getPost('new_password'));

    // Update user password
    $user->update($userInfo['id'], ['password' => $newPassword]);

    // Delete the used token
    $passwordResetToken->where('token', $this->request->getPost('token'))->delete();

    // Redirect with success message
    return redirect()->route('admin.login.form')->with('success', 'Password has been reset successfully. Please log in.');
}}

         