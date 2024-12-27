<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Catatan;

class CatatanPerController extends Controller
{
    public function tampilog(){
        return view('Cp.login');
    }

    public function login(Request $request){

        $data = User::where('Email', $request->input('Email'))->where('Password', $request->input('Password'))->first();
        if($data == null){
            return redirect()->back()->with('warning', 'Username/Password Anda Salah!!');
        }else{
            session()->put('user', $data);
            return redirect('/home');
        }
    }

    public function tampilreg(){

        return view ('Cp.register');
    }

    public function aksiDariRegister(Request $request) {

        $data = new User();
        $data->Nama = $request->input('Nama');
        $data->Email =$request->input('Email');
        $data->Password =$request->input('Password');
        $data->save();
        return redirect('/login');
    }

    public function logout(){
        session()->flush();
        return redirect('/login');
    }

    public function tampilisi(){
        return view('Cp.isi');
    }

    public function simpanData(Request $request)
    {
        $data = new Catatan();
        $data->Tanggal = $request->input('Tanggal');
        $data->Waktu = $request->input('Waktu');
        $data->Lokasi = $request->input('Lokasi');
        $data->SuhuTubuh = $request->input('SuhuTubuh');
        $data->UserID = session('user')->UserID;
        $data->save();

        return redirect('/catatan');
    }

    public function editIsi($id){
        $data = Catatan::find($id);
        return view('Cp.edit', compact('data'));

    }

    public function aksiEdit(Request $request, $id)
    {
        $data = Catatan::find($id);

        $data->Tanggal = $request->input('Tanggal');
        $data->Waktu = $request->input('Waktu');
        $data->Lokasi = $request->input('Lokasi');
        $data->SuhuTubuh = $request->input('SuhuTubuh');
        $data->UserID = session('user')->UserID;
        $data->save();

        return redirect('/catatan');
    }

    public function catatan(){
        $data = Catatan::where('UserID', session()->get('user')->UserID) 
                        ->orderBy('Tanggal', 'asc') 
                        ->get(); 
    
        return view('Cp.catatan', compact('data'));
    }
    
    public function hapusData($PerjalananID) {
        $data = Catatan::find($PerjalananID);
        
        $data->delete();
        return redirect('/catatan');
    }

}
