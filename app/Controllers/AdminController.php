<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Libraries\CIAuth;
use App\Models\User;  

class AdminController extends BaseController
{
    protected $helpers = ['url','form','CIMail','CIFunctions',];
    public function index()
    {
        $data =[
          'pageTitle'=> 'Dashboard',
        ];
        return view('backend/pages/home', $data);
    }
    public function logoutHandler(){
        CIAuth::forget();
        return redirect()->route('admin.login.form')->with('fail', 'Logged out sucessfully!');

    }
    public function profile(){
        $data = array(
            'pageTitle'=>'Profile'
        );
        return view('backend/pages/profile', $data);

    } 
    public function updatePersonalDetails(){
        $request = \Config\Services::request();
        $user_id = CIAuth::id();
    
        if ($request->isAJAX()){
            // Set validation rules
            $rules = [
                'name' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Full name is required'
                    ]
                ],
                'username' => [
                    'rules' => 'required|min_length[4]|is_unique[users.username,id,'.$user_id.']',
                    'errors' => [
                        'required' => 'Username is required',
                        'min_length' => 'Username must have miminum of 4 characters',
                        'is_unique' => 'Username is already taken!'
                    ]
                ] 
            ];
            
            // Run validation
            if (!$this->validate($rules)) {
                // Return validation errors
                return $this->response->setJSON([
                    'status' => 0,
                    'error' => $this->validator->getErrors()
                ]);
            }
            
            // Get form data
            $data = [
                'name' => $request->getPost('name'),
                'username' => $request->getPost('username')
            ];
            
            // Create model instance correctly
            $userModel = new User();
            $query = $userModel->update($user_id, $data);
            
            if ($query) {
                // Get updated user info
                $user_info = $userModel->find($user_id);
                
                return $this->response->setJSON([
                    'status' => 1, 
                    'msg' => 'Your personal details have been updated successfully',
                    'user_info' => $user_info
                ]);
            } else {
                return $this->response->setJSON([
                    'status' => 0, 
                    'msg' => 'Something went wrong'
                ]);
            }
        } else {
            return $this->response->setJSON([
                'status' => 0,
                'error' => 'Invalid request method'
            ]);
        }
    }}  