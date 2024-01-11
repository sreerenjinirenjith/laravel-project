<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\modelregisteration;
class controllerlogin extends Controller
{
    
    public function loginview(){
     return view('login');
    }
    public function loginnewview(){
        return view('loginnew');
    }
    public function loginnet(){
        return view('loginauth');
    }

    public function login(Request $request)
    {
        $email = $request->input('semail');
       // dd($email);
        $password = $request->input('psw');

        // Implement your own logic to check user credentials here
        if ($this->isValidUser($email, $password)) {
            // Store user information in the session
            Session::put('user', ['semail' => $email]);

            return redirect('/index'); // Redirect to a protected area
        }
        //return redirect()->back()->with('alert','hello');
        // Authentication failed
        return back()->withErrors(['semail' => 'Invalid credentials']);
    }

    public function logout()
    {
        // Clear the user session data
        Session::forget('user');

        return redirect('/login');
    }

    //private function isValidUser($email, $password)
    //{
        // Query the users table in the database to find a user with the provided email
        //$user = modelregisteration::where('semail',$email)->first();
       // dd($email,$password,$user->psw,$user->semail);
/*if(password_verify($password,$user->psw))
{
    dd("hai");
}*/
/*$passwordVerify = password_verify($password, $user->psw);
if($passwordVerify)
{
  
    dd($email,$password,$user-> psw,$user->semail);  
}*/


/*$hash = password_hash('$password', PASSWORD_DEFAULT);
if($hash){
   // dd("hai");

}

if (password_verify($hash,$user->psw)) {
dd("hai");*/
//dd($password);
//$options = [ "cost" =>15 ];
//$hash = password_hash($password, PASSWORD_BCRYPT);
/*if ($user && password_verify($hash,$user->psw)) {

     dd($email,$password,$user-> psw,$user->semail);
//dd("hai");
       return true; // User exists and password matches
   }

   return false; // Invalid user or password
}*/

   /*  if ($user && password_verify($password,$user->psw)) {

         //  dd($email,$password,$user-> psw,$user->semail);
//dd("hai");
            return true; // User exists and password matches
        }

        return false; // Invalid user or password
    }*/
    


    private function isValidUser($email, $password)
{
    
    $user = modelregisteration::where('semail', $email)->first();
   /* if ($user) {
       // dd($password, $user->psw); // Add these lines to check the password and hashed password
        if (password_verify($password, $user->psw)) {
            // dd($password, $user->psw); 
            return true; // User exists and password matches
        }*/
        
    

 
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

 /*// Debug input and user
//dd($user->psw);
  if ($user && password_verify($password, $user->psw)) {
      //  dd("Email: " . $email, "User: " . json_encode($user));
      // dd("hai"); // Debug message
        return true; // User exists and password matches
    }

    return false; // Invalid user or password
}*/
    

}
}