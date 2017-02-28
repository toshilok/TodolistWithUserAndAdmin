<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
class InformationController extends Controller
{

public function info(){
$user = Auth::user();

return view('info', compact('user'));
}
public function update_avatar(Request $request){

  if($request->hasFile('avatars')){
    $avatars = $request->file('avatars');
    $filename = time() . '.' . $avatars->getClientOriginalExtension();
    Image::make($avatars)->resize(300,300)->save(public_path('uploads/avatars/'. $filename));
    $user= Auth::user();
    $user->avatars = $filename;
    $user->save();

  }
  $user = Auth::user();

  return view('info', compact('user'));
}


}
