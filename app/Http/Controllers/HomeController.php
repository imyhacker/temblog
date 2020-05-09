<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Artikel;
use App\About;
use App\Contact;
use App\Disclaimer;
use App\TOS;
use App\Privacy;
use App\Adsen;
use App\Social;
use App\Pixel;
use App\Fp;
use DB;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
     $artikel = Artikel::orderBy('id', 'DESC')->get();
     $total = Artikel::count();
     $totaltag = Tag::count();
     $tag = Tag::all();
       //dd($total);
     return view('adm/index',['artikel'=>$artikel,'tag'=>$tag,'total'=>$total,'totaltag'=>$totaltag]);
   }
   public function post()
   {
    $tag = Tag::all();
    return view('adm/post', compact('tag'));
  }
  public function addtag(Request $request)
  {
   $data = Tag::create($request->all());
   return redirect('/home')->with('tag', 'Sukses Upload Tag');
 }
 public function kirimartikel(Request $request)
 {
  $this->validate($request,[
    'judul' => 'required',
    'tag' => 'required',
    'isi' => 'required',
    'author' => 'required',
    'tanggal' => 'required',
    'image' => 'required'
  ]);

  $kirim = new Artikel();
// 'label','judul','image','isi','posted','tanggal'
  $kirim->judul = $request->input('judul');
  $kirim->tag = $request->input('tag');
  $kirim->isi = $request->input('isi');
  $kirim->author = $request->input('author');
  $kirim->tanggal = $request->input('tanggal');

  if ($request->hasfile('image')) {
   $resorce = $request->file('image');
   $ext   = $resorce->getClientOriginalExtension();
   $filename = time().'.'.$ext;
   $resorce->move(\base_path() ."/public/images", $filename);
   $kirim->image = $filename;
 }


 $kirim->save();

 return redirect('home')->with('artikel', 'Sukses');
}
public function edit_ar(Request $request,$id)
{
  $data = Artikel::findOrFail($id);
  return view('/adm/edit_ar', compact('data'));
}
public function asdet(Request $request,$id)
{
 $data = Artikel::findOrFail($id);
 $data->update($request->all());
 return redirect('/home')->with('edit_ar', 'Sukses');
   //dd($data);

}
public function hapus_ar(Request $request,$id)
{
 $data = Artikel::findOrFail($id);
 $data->delete($request->all());
 return redirect('/home')->with('hapus_ar', 'Hapus');
   //dd($data);

}
public function hapus_tag(Request $request,$id)
{
 $data = Tag::findOrFail($id);
 $data->delete($request->all());
 return redirect('/home')->with('hapus_tag', 'Sukses');    
}

    //  SIDEBAR 


 // About
public function about(Request $request)
{
  $about = About::all();
  return view('adm/about', ['about'=>$about]);
}

public function yaabout(Request $request,$id)
{
  $data = About::findOrFail($id);
  return view('adm/editan/about',['data'=>$data]);
}

public function updateabout(Request $request,$id)
{
 $data = About::findOrFail($id);
 $data->update($request->all());
 return redirect('/home')->with('about', 'Sukses');
}

// Contact
public function contact()
{
  $contact = Contact::all();
  return view('adm/contact', ['contact'=>$contact]);
}

public function yacontact(Request $request,$id)
{
  $data = Contact::findOrFail($id);
  return view('adm/editan/contact',['data'=>$data]);
}
public function updatecontact(Request $request,$id)
{
 $data = Contact::findOrFail($id);
 $data->update($request->all());
 return redirect('/home')->with('contact', 'Sukses');
}

    // Disclaimer
public function disclaimer()
{
  $disclaimer = Disclaimer::all();
  return view('adm/disclaimer', ['disclaimer'=>$disclaimer]);
}
public function yadisclaimer(Request $request,$id)
{
  $data = Disclaimer::findOrFail($id);
  return view('adm/editan/disclaimer',['data'=>$data]);
}
public function updatedisclaimer(Request $request,$id)
{
 $data = Disclaimer::findOrFail($id);
 $data->update($request->all());
 return redirect('/home')->with('disclaimer', 'Sukses');
}

    // TOS

public function tos()
{
  $tos = TOS::all();
  return view('adm/tos', ['tos'=>$tos]);
  return view('adm/tos');
}
public function yatos(Request $request,$id)
{
  $data = TOS::findOrFail($id);
  return view('adm/editan/tos',['data'=>$data]);
}
public function updatetos(Request $request,$id)
{
 $data = TOS::findOrFail($id);
 $data->update($request->all());
 return redirect('/home')->with('tos', 'Sukses');
}
    // PRIVACY

public function privacy()
{
  $privacy = Privacy::all();
  return view('adm/privacy', ['privacy'=>$privacy]);

}
public function yaprivacy(Request $request,$id)
{
  $data = Privacy::findOrFail($id);
  return view('adm/editan/privacy',['data'=>$data]);
}
public function updateprivacy(Request $request,$id)
{
 $data = Privacy::findOrFail($id);
 $data->update($request->all());
 return redirect('/home')->with('privacy', 'Sukses');
}


    // ADSEN

public function adsen()
{
  $adsen = Adsen::all();
  return view('adm/adsen', ['adsen'=>$adsen]);

}
public function yaadsen(Request $request,$id)
{
  $data = adsen::findOrFail($id);
  return view('adm/editan/adsen',['data'=>$data]);
}
public function updateadsen(Request $request,$id)
{
 $data = Adsen::findOrFail($id);
 $data->update($request->all());
 return redirect('/home')->with('adsen', 'Sukses');
}

public function social()
{
        # code...
  $social = Social::all();
  return view('adm/social', ['social'=>$social]);
}
public function yasocial(Request $request,$id)
{
  $data = Social::findOrFail($id);
  return view('adm/editan/social',['data'=>$data]);
}

public function possocial(Request $request,$id)
{
        # code...
  $data = Social::findOrFail($id);
  $data->update($request->all());
  return redirect('/home')->with('social', 'Sukses');
}

public function pixel()
{
  $pixel = Pixel::all();
  return view('adm/pixel', ['pixel'=>$pixel]);
}
public function yapixel(Request $request,$id)
{
 $data = Pixel::findOrFail($id);
 return view('adm/editan/pixel',['data'=>$data]);
}

public function updatepixel(Request $request,$id)
{
        # code...
  $data = Pixel::findOrFail($id);
  $data->update($request->all());
  return redirect('/home')->with('pixel', 'Sukses');
}





public function fp()
{
  $fp = Fp::all();
  return view('adm/fp', ['fp'=>$fp]);
}
public function yafp(Request $request,$id)
{
 $data = Fp::findOrFail($id);
 return view('adm/editan/fp',['data'=>$data]);
}

public function updatefp(Request $request,$id)
{
        # code...
  $data = Fp::findOrFail($id);
  $data->update($request->all());
  return redirect('/home')->with('fp', 'Sukses');
}


}
