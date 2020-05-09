<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Tag;
use App\About;
use App\Contact;
use App\Disclaimer;
use App\TOS;
use App\Privacy;
use App\Adsen;
use App\Social;
use App\Fp;
use DB;

class ClientController extends Controller
{
    //
    public function index()
    {
        $soc = Social::all();
    	$artikel = Artikel::orderBy('id', 'DESC')->paginate(4);
    	$tag = Tag::all();
    	$ads = Adsen::all();
        $fp = Fp::all();
    	return view('pub/index', ['artikel'=>$artikel,'tag'=>$tag,'ads'=>$ads,'soc'=>$soc,'fp'=>$fp]);
    }
    public function tag($label)
    {
        $lbl = DB::table('artikel')->where('tag', $label)->get();
        $ads = Adsen::all();
        $tag = Tag::all();
        $soc = Social::all();
        $fp = Fp::all();
    	//dd($tagg);
    	return view('pub/tag', ['lbl'=>$lbl,'ads'=>$ads,'tag'=>$tag,'soc'=>$soc,'fp'=>$fp]);
    }
    public function baca(Request $request,$id)
    {
        $baca = Artikel::findOrFail($id);
        $tag = Tag::all();
        $ads = Adsen::all();
        $soc = Social::all();
        $fp = Fp::all();
       return view('pub/baca', ['baca'=>$baca,'tag'=>$tag,'ads'=>$ads,'soc'=>$soc,'fp'=>$fp]);
    }

    public function about()
    {
    	$tag = Tag::all();
        $about = About::all();
        $ads = Adsen::all();
        $soc = Social::all();
                $fp = Fp::all();
                
    	return view('pub/about', ['tag'=>$tag,'about'=>$about,'ads'=>$ads,'soc'=>$soc,'fp'=>$fp]);
    }
    public function contact()
    {
    	$tag = Tag::all();
        $contact = Contact::all();
        $soc = Social::all();
        $ads = Adsen::all();
                $fp = Fp::all();
                
        return view('pub/contact', ['tag'=>$tag,'contact'=>$contact,'ads'=>$ads,'soc'=>$soc,'fp'=>$fp]);
    }
    public function disclaimer()
    {
    	$tag = Tag::all();
        $Dis = Disclaimer::all();
        $soc = Social::all();
        $ads = Adsen::all();
                $fp = Fp::all();
                
        return view('pub/Dis', ['tag'=>$tag,'Dis'=>$Dis,'ads'=>$ads,'soc'=>$soc,'fp'=>$fp]);
    }
    public function tos()
    {
        $tag = Tag::all();
        $tos = TOS::all();
        $soc = Social::all();
        $ads = Adsen::all();
                $fp = Fp::all();
                
        return view('pub/tos', ['tag'=>$tag,'tos'=>$tos,'ads'=>$ads,'soc'=>$soc,'fp'=>$fp]);
    }
    public function privacy()
    {
        $tag = Tag::all();
        $privacy = Privacy::all();
        $ads = Adsen::all();
        $soc = Social::all();
                $fp = Fp::all();
                
        return view('pub/privacy', ['tag'=>$tag,'privacy'=>$privacy,'ads'=>$ads,'soc'=>$soc,'fp'=>$fp]);
    }
    public function c19()
    {
        $tag = Tag::all();
        $privacy = Privacy::all();
        $ads = Adsen::all();
        $soc = Social::all();
                $fp = Fp::all();
                
        return view('pub/c19', ['tag'=>$tag,'privacy'=>$privacy,'ads'=>$ads,'soc'=>$soc,'fp'=>$fp]);
    }
}
