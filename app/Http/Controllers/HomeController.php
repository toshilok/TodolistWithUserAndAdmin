<?php

namespace App\Http\Controllers;
use App\Todolist;
use Illuminate\Http\Request;
use DB;
use App\User;
use Session;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Todolist $todolist,$id)
     {

         //$todolist = Todolist::orderBy('id','desc')->paginate(5);
         //return view('home', compact('todolist'));


        $todolist = $todolist::where('user_id', $id)->get();

        return view('home',compact('todolist'));
        //return "You have arrived";

     }
     public function add()
     {
      return view('add');

     }
     public function save(Request $request,User $user,$id){
       $this->validate($request, ['body' => 'required|min:5|max:100',
     ]);
     $this->validate($request, ['title' => 'required|min:3|max:100',
   ]);
   $this->validate($request, ['date' => 'required',
 ]);
      $user = $user->find($id)->id;

       $todolist = new Todolist;

       $todolist->title = $request->title;
       $todolist->body = $request->body;
       $todolist->date = $request->date;
       $todolist->user_id = $id;

       $todolist->save();




      //  $data= request()->all();
      //  $title = $data['title'];
      //  $body = $data['body'];
      //  DB::table('todolists')->insert(['title' => $title, 'body' => $body]);
        Session::flash('success', 'New has been succesfully added!');



       return back();

     }
     public function edit($id){
       $todo = DB::table('todolists')->find($id);
       return view('edit', compact('todo'));


     }
     public function update(Request $request,$id){
         $this->validate($request, ['body' => 'required|min:5|max:100',
       ]);

       $data = request()->all();
       $title = $data['title'];
       $body = $data['body'];
       DB::table('todolists')->where('id',$id)->update(['title' => $title, 'body' => $body]);
              Session::flash('success', 'New has been succesfully added!');
       return back();
     }

     public function delete($id){
       DB::table('todolists')->where('id', $id)->delete();
       return back();


     }

}
