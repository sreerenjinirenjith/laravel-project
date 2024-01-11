<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelregisteration;
use Illuminate\Support\Facades\Session;
class Userauth extends Controller
{
    function userlogin(Request $req)
    {
        $email = $req->input('semail');
        // dd($email);
         $password = $req->input('psw');
 
       // dd($email,$password);
        if ($this->isValidUser($email, $password)) {
            // Store user information in the session
            //dd($email,$password);
            Session::put('user', ['semail' => $email]);

            return redirect('/index'); // Redirect to a protected area
        }

//return $req->input;
    }
    private function isValidUser($email, $password)
    {
        
        $user = modelregisteration::where('semail', $email)->first();
        /*if ($user) {
           // dd($password, $user->psw); // Add these lines to check the password and hashed password
            if (password_verify($password, $user->psw)) {
                 dd($password, $user->psw); 
                return true; // User exists and password matches
            }
        }*/
        /***my pgmm */
     
      if($user){
      $pwd= $user->psw;
       
       $uemail=$user->semail;
      // dd($pwd,$uemail,$email,$password);
       if($email==$uemail)
       {
    //dd($pwd,$uemail,$email,$password);
        return true;
    } 
    return false;
      }
    /***my pgm */
    
    /****main   pgmmmmmmm */
    
     // Debug input and user
    //dd($user->psw);
       /* if ($user && password_verify($password, $user->psw)) {
            dd("Email: " . $email, "User: " . json_encode($user));
          // dd("hai"); // Debug message
            return true; // User exists and password matches
        }
    
        return false; // Invalid user or password
    }*/
        }
}
