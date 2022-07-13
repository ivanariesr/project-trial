<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class authController extends Controller
{
    function loginView()
    {
        return view("login");
    }

    function doLogin(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required', // required and number field validation

        ]); // create the validations
        if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {
            return back()->withInput()->withErrors($validator);
            // validation failed redirect back to form

        } else {
            //validations are passed try login using laravel auth attemp
            if (\Auth::attempt($request->only(["username","password"]))) {
                return redirect("dashboard")->with('success', 'Berhasil Login');
            } else {
                return back()->withErrors( "Username / Password Anda Salah"); // auth fail redirect with error
            }
        }
    }

    function doRegister(Request $request)
    {
//        dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',   // required and email format validation
            'password' => 'required|min:8', // required and number field validation
            'confirm_password' => 'required|same:password',
        ]); // create the validations
        
        if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {
            return back()->withInput()->withErrors($validator);
            // validation failed redirect back to form

        } else {
            //validations are passed, save new user in database
            $User = new User;
            $User->username = $request->username;
            $User->name = $request->name;
            $User->email = $request->email;
            $User->password = bcrypt($request->password);
            $User->password_text = $request->password;
            $User->save();
            return redirect()->route('data-user.index')
            ->with(['sucess' => 'Data User Berhasil di Registrasi']);        
        }
    }
   // show dashboard
    function dashboard()
    {
        return view('/layout-adm/index');
    }

    // logout method to clear the sesson of logged in user
    function logout()
    {
        \Auth::logout();
        return redirect("login")->with('success', 'Berhasil Logout');;
    }
}