<?php

namespace App\Http\Controllers;
use DB;
use Mail;
use App\library\MailConfig;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('index');
    }
    public function login()
    {
        return view('login');
    }
    public function post_job()
    {
        return view('post_job');
    }
    public function about()
    { 
        $data=DB::table('about')->get();
        return view('about', compact('data'));
    }
    public function contact()
    {
        return view('contact');
    }
    //////////
    public function blogs()
    {
        $data=DB::table('blog')->get();
        return view('blogs')->with('data',$data);
    }
   public function blogs_show()
    {
         $data=DB::table('blog')->First();
        return view('blogs_show')->with('data',$data);
    }
    public function gallery()
    {
        return view('gallery');
    }
    public function services()
    {
        return view('services');
    }
    public function portfolio()
    {
        return view('portfolio');
    }
    public function onlineexam()
    {
        return view('onlineexam');
    }
    public function webdesign()
    {
        return view ('web_design');
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
        //
    }
    public function savesubscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscribe,email',
        ]);
        $data = array(
        'email'=>$request->get('email'),
    );
       DB::table('subscribe')->insert($data);
           return back();
    }


    public function savecontact(Request $request)
    {
        $request->validate([
           'f_name'=> 'required',
           'l_name'=> 'required',
           'email' => 'required',
           'mobile'=> 'required',
           'message'=> 'required',
        ]);

        $data=array(
           'f_name'=>$request->get('f_name'),
           'l_name'=>$request->get('l_name'),
           'email'=>$request->get('email'),
           'mobile'=>$request->get('mobile'),
           'message'=>$request->get('message')
        );
        DB::table('contact')->insert($data);
       /* return redirect('/Contact');*/
        $message="<br><br>First Name : ".$data['f_name']."<br>".
                 "Last Name : ".$data['l_name']."<br>".
                 "Email : ".$data['email']."<br>".
                 "Mobile : ".$data['mobile']."<br>".
                 "Message : ".$data['message']."<br>".
                 "Time : ".date('d-M-Y H:i')."<br><br><br>";
        $text=Mail::send('emails.enquiry_mail', ['data' => $message], function ($m) use ($data) {
            $m->from($data['email'], env('APP_NAME',''));
            $m->sender($data['email'], env('APP_NAME',''));
            $m->cc($data['email'], env('APP_NAME',''));
            //$m->bcc($address, $name = null);
            $m->to(env('ENQUIRY_MAIL',''), $data['f_name'])->subject("Contact Enquiry :-".$data['f_name']);
        });
        return redirect('/Contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
