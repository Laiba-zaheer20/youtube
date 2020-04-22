<?php

namespace App\Http\Controllers;
use Validator;
use App\video;
use Illuminate\Http\Request;
use App\User;
use Auth;
use App\youtuber;
class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $video=video::all();
        return view('show',compact('video'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $k=Validator::make($request->all(),[
            'selectfile'=>'required',
            'name'=>'required',
        ]);

        if($k->passes()){
          $video=new video();
          $n=$request->file('selectfile');
          $m=time().'.'. $n->getClientOriginalExtension();
          $n->move('D:/xampp/htdocs/LAIBASSS/video/',$m);
          $file='http://localhost/LAIBASSS/video/'.$m;
          $video->video_url=$file;
          $video->name=$request->name;
          if($request->cars == '1'){
            $video->status=1;
          }
          else{
            $video->status=0;
          }
          $video->count_clicks=0;
          $k=auth()->user()->name;
          $data= new youtuber;
          $n=$data->where('name','=',$k)->first();
          $video->youtuberID=$n->youtuberID;
        // return $n->id;  
          $video->save();
        // return $video;   
        $video=video::all();
        return view('show',compact('video'));
      }
     else{
        return response()->json(['error'=>$k->errors()->all()]);

      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(video $video)
    {
        //
        $video=video::all();
        view('show',compact('video'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(video $video)
    {
        //
    }
  
    public function count(request $request){
        $video=new video;
        $k=$video->where('video_url','=',$request->href)->first();
        if($k->count_clicks==0)
        $k->count_clicks=1;
        else{
            $k->count_clicks=$k->count_clicks+1;
        }
        $k->save();
        return 'done!';
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(video $video)
    {
        //
    }

    public function checklogin(Request $request){        
        
        $p=validator::make($request->all(), [
        'username' => 'required|email',
        'password' => 'required|alphaNum|min:5',
        ]);

       
        if($p->passes()){
        $user_data = array(
                'email' => $request->get('username'),
                'password' => $request->get('password'),
        );
       if(Auth::attempt($user_data)){ 
       return response()->json(['key'=>'done']);
       }
       else{
            return response()->json(['key'=>'YOU HAVE TO SIGN UP FIRST !!']);    
        }
    }
    else{
        return response()->json(['error'=>$p->errors()->all()]);
    }
    }


    public function checkSignIn(Request $request){

        $p=validator::make($request->all(), [
            'fname' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);
        
        if($p->passes()){
        $user_data = array(
            'name' => $request->get('fname'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        );

        $user = User::create($user_data);
        
        $data=new youtuber;
        $data->name=$request->get('fname');
        $data->email=$request->get('email');
        $data->password=$request->get('password');
        $data->save();

        return response()->json(['key'=>'done!']);
    }
    
    else{
        return response()->json(['error'=>$p->errors()->all()]);
    }
    }
    
    public function logout(){
        auth()->logout();
        $video=video::all();
        return view('show',compact('video'));
    }
    
    public function channel(){

        if(auth()->check()){
            $userID = auth()->user()->name;
        }
        else{
          $userID=0; 
        }
        $data=new youtuber;
        $n=$data->where('name','=',$userID)->first();
        $k=$n->scene;
        // $p=$k->where('status','=',1)->first();
        return view('channel',compact('k'));
    }

    public function up(request $request){
        $data=new video;
        $n=$data->where('id','=',$request->id)->first();
        $n->status =1;
        $n->save();
        return 'done';
    }

}
