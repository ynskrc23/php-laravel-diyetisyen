<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Sayfa;
use App\Yorumlar;
use DB;

class SayfalarController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        // $sayfalar = Sayfa::all();        
        // $sayfalar = Sayfa::orderBy('title','desc')->take(1)->get();
        // $sayfalar = Sayfa::orderBy('title','desc')->get();
        // $sayfalar = Sayfa::where('kategori','Blog')->get();
        // $sayfalar = DB::select('SELECT * FROM sayfas');
       // $sayfalar = Sayfa::orderBy('created_at','desc')->take(6)->get();
        //return view('sayfalar.index', ['sayfalar' => $sayfalar] );
        //return view('sayfalar.index')->with('sayfalar',$sayfalar);
        
        $sql='SELECT * FROM sayfas  order by created_at desc';
        $sayfalar = DB::select($sql);
        
        return view('sayfalar.index', ['sayfalar' => $sayfalar]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sayfalar.create');
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
        $this->validate($request, [
            'sayfa_adi' => 'required',
            'sayfa_icerik'  => 'required' ,
            'sayfa_kategori'  => 'required',
            'cover_image'  => 'image|nullable|max:1999'
        ]);

        if($request->hasFile('cover_image')){

            $fileNameWithExt =$request->file('cover_image')->getClientOriginalName();
            
            $filename =pathinfo($fileNameWithExt,PATHINFO_FILENAME);

            $extension = $request->file('cover_image')->getClientOriginalExtension();

            $fileNameToStore = $filename.''.time().'.'.$extension;

            $path = $request->file('cover_image')->storeAs('public/cover_image',$fileNameToStore);
        }else{
            $fileNameToStore ='noimage.jpg';
        }
 
        //Sayfalar Create
 
        $sayfa =new Sayfa;
        $sayfa->sayfa_adi = $request->input('sayfa_adi');
        $sayfa->sayfa_icerik = $request->input('sayfa_icerik');
        $sayfa->sayfa_kategori = $request->input('sayfa_kategori');
        $sayfa->cover_image = $fileNameToStore;
        
        $sayfa->save();
        return redirect('/sayfalar')->with('success','Basarlıyla Kayettiniz');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($sayfa_id)
    {
    
        $sql= ' select sayfa_id,sayfa_adi,name,comment,cover_image, count(id) as toplam_yorum from yorumlars 			
        inner join sayfas on sayfas.sayfa_id = yorumlars.yorum_sayfa_id  			
        group by sayfa_id   					
        order by toplam_yorum desc limit 5 ';
        
        $popüleryorumlar = DB::select($sql);   
        $popüleryorum_menu = "";

        foreach($popüleryorumlar as $yorum){
            $popüleryorum_menu .= "         
               
                <li class='list-group-item'>     
                    <a href='".$yorum->sayfa_id."'> 
                        <img style='width:80px;height:60px; ' src='/storage/cover_image/".$yorum->cover_image."'>                           
                        " .$yorum->sayfa_adi." <br>                                      
                </li>	
                       		  
               
               ";
        } //die;
        


        $sql= ' select * from yorumlars   
        inner join sayfas on sayfas.sayfa_id = yorumlars.yorum_sayfa_id 				
        order by id desc limit 5  ';

        $yorumlar = DB::select($sql);   
        $yorum_menu = "";

        foreach($yorumlar as $yorum){
            $yorum_menu .= "                  
                <li class='list-group-item'>     
                    <a href='".$yorum->sayfa_id."'>            
                        " .$yorum->name." <br>                  
                        " .$yorum->comment." <br>             
                </li>                 			  
               ";
        } //die;


    $sayfalar = Sayfa::find($sayfa_id);           
    // return view('sayfalar.show')->with('sayfalar', $sayfalar);
    return view('sayfalar.show')->with(compact('sayfalar','yorum_menu','popüleryorum_menu'));
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($sayfa_id)
    {
        //
       
        $sayfalar = Sayfa::find($sayfa_id); 
        return view('sayfalar.edit')->with('sayfalar', $sayfalar);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $sayfa_id)
    {
   //
   $this->validate($request, [
    'sayfa_adi' => 'required',
    'sayfa_icerik'  => 'required' ,
    'sayfa_kategori'  => 'required'
    ]);

        //Sayfalar Update
        if($request->hasFile('cover_image')){

            $fileNameWithExt =$request->file('cover_image')->getClientOriginalName();
            
            $filename =pathinfo($fileNameWithExt,PATHINFO_FILENAME);

            $extension = $request->file('cover_image')->getClientOriginalExtension();

            $fileNameToStore = $filename.''.time().'.'.$extension;

            $path = $request->file('cover_image')->storeAs('public/cover_image',$fileNameToStore);
        }

        $sayfa = Sayfa::find($sayfa_id);  
        $sayfa->sayfa_adi = $request->input('sayfa_adi');
        $sayfa->sayfa_icerik = $request->input('sayfa_icerik');
        $sayfa->sayfa_kategori = $request->input('sayfa_kategori');
        if($request->hasFile('cover_image'))
        {
            $sayfa->cover_image = $fileNameToStore;
        }

        $sayfa->save();
        return redirect('/sayfalar')->with('success','Basarlıyla Güncellendi');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($sayfa_id)
    {
        //
        $sayfa =Sayfa::find($sayfa_id);

        if($sayfa->cover_image !='noimage.jpg')
        {
            Storage::delete('public/cover_image/'.$sayfa->cover_image);
        }
        $sayfa-> delete();
        return redirect('/sayfalar')->with('success','Basarlıyla Silindi');
    }
}
