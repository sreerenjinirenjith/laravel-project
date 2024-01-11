<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use App\models\modelregisteration;

use Illuminate\Support\Facades\Hash;
//use App\StudInsert;
//use Collective\Html\FormFacade as Form;

class register extends Controller
{
    public function reg(){
        return view('reg');
    }
    public function home(){
        return view('pages.index');
    }
    public function gift()
    {

    }
    public function hello(){
    
    }
    public function form(Request $request){
        $validateData = $request->validate([
            'sname'=>'required',
            'sadd'=>'required|max:25',
            'sage'=>'required|numeric',
            'semail'=>'required|email|max:25',
            'gender'=>'required',
           'sphone'=>'required|min:10',
            'state'=>'required',
            'psw'=>'required|min:6',
            'pic' => 'required|file|max:18240', // Max file size is 10MB (10240 KB)
            ]);
           //dd($validateData);

            
            //$validateData['psw']= bcrypt($request->psw);
            $validateData['psw']= password_hash($request->psw,PASSWORD_DEFAULT);
//$form = Newmodel::create($validateData);
//$form = modelregister::create($validateData);
$form = modelregisteration::create($validateData);





//dd($form);

if ($request->hasFile('pic')) {
    $file = $request->file('pic');
    $name = $file->getClientOriginalName();
    $file->move('images', $name);

    
   // $form->file = 'images/' . $name; 
    $form->pic = 'images/' . $name; 
    $form->save();
}
return redirect()->route('login')->with('success','successfully registered. you can now log in.');
//return redirect()->route('gift')->with('success','successfully registered. you can now log in.');
}
 public function index(){
    {

        $forms=modelregisteration::all();
        //return view('index',compact('modelregisterations'));
        return view('index',compact('forms'));
    }
 }
 public function delete($id)
    {
        $form = modelregisteration::findOrFail($id);
        $form->delete();
        return redirect()->route('index')->with('message', 'data deleted');
       
      // return redirect()->route('index')->with('success', 'Form entry deleted successfully');
    }
    public function edit($id)
    {
       
        $form=modelregisteration::findOrFail($id);
        return view('edit',compact('form'));
    }
   /* public function update(Request $request, $id)
    {
        // Validate the form data
       dd(DB::getQueryLog());
        $validations = Validator::make($request->all(), [
            'sname' => 'required|string|max:255',
            'sadd' => 'required|string|max:255',
            'sage' => 'required|integer',
            'semail' => 'required|email|max:255',
            'gender' => 'required|in:m,f',
            'sphone' => 'required|string|max:20',
            'pic' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming you want to update the image
            'state' => 'required|string',
        ]);
       

      // dd($request->all());
        if ($validations->passes()) {
        // Update the fields
        $form = modelregisteration::findOrFail($id);
       // dd($form->sname);
        $form->sname = $request->sname;
        $form->sadd = $request->sadd;
        $form->sage = $request->sage;
        $form->semail = $request->semail;
        $form->gender = $request->gender;
        $form->phone = $request->sphone;
        $form->state = $request->state;
//dd(modelregisteration);
//dd(DB::getQueryLog());
        // Handle the image update
        if ($request->hasFile('pic') && !empty($request->file('pic'))) {
            $file = $request->file('pic');
            $imageName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $image = public_path('images/');
            $file->move($image, $imageName);
            $form->file = 'images/' . $imageName;
        }

        // Save the updated model
        $form->update();

        
        return redirect()->route('index')->with(['msg' => 'Data updated !']);
    }
}*/

public function update(Request $request, $id)
{
    // Validate the form data
    $request->validate([
        'sname' => 'required|string|max:255',
        'sadd' => 'required|string|max:255',
        'sage' => 'required|integer',
        'semail' => 'required|email|max:255',
        'gender' => 'required|in:male,female',
        'sphone' => 'required|string|max:20',
        'pic' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming you want to update the image
        'state' => 'required|string',
    ]);
//dd($form);
    // Find the Form model instance by ID
    $form = modelregisteration::findOrFail($id);

    // Update the fields
    $form->sname = $request->input('sname');
    $form->sadd = $request->input('sadd');
    $form->sage = $request->input('sage');
    $form->semail = $request->input('semail');
    $form->gender = $request->input('gender');
    $form->sphone = $request->input('sphone');
    $form->state = $request->input('state');

    // Handle the image update
    if ($request->hasFile('pic')) {
        $image = $request->file('pic');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        $form->pic = 'images/' . $imageName;
    }
//dd($form);
   
    $form->save();

  
    return redirect()->route('index', $id)->with('success', 'Form updated successfully');
}   
        
    
}

