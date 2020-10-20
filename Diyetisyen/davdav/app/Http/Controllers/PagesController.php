<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Sayfa;
use App\Yorumlar;
use DB;

class PagesController extends Controller
{
    public function index(){       
        $sayfalar = Sayfa::where('sayfa_kategori','Tarif')->paginate(3);
        return view('pages.index', ['sayfalar' => $sayfalar] );
    }

    public function about(){
        return view('pages.about');
    }

    public function diyet(){
        return view('pages.diyet');
    }

    public function services(){
        return view('pages.services');
    }

    public function tarif(){
        $sayfalar = Sayfa::where('sayfa_kategori','Tarif')->paginate(9);
        return view('pages.tarif', ['sayfalar' => $sayfalar] );
        
     
    }

    public function blog(){
        $sayfalar = Sayfa::where('sayfa_kategori','Blog')->paginate(9);
        return view('pages.blog', ['sayfalar' => $sayfalar] );
        
    }

    public function contact(){
        return view('pages.contact');
    }

    public function sayfalistele()
    {      
        $sayfalar = Sayfa::orderBy('created_at','desc')->paginate(6);
        return view('sayfalar.listele', ['sayfalar' => $sayfalar] );
    }


}
