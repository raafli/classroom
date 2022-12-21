<?php

namespace App\Http\Controllers;

use App\Models\guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index(){

        $data = guru::all();
        return view('guru.dataguru',compact('data'));
    }

    public function tambahguru(){
        return view('guru.tambahguru');
    }

    public function insertguru(Request $request){

             $this->validate($request,[
                 'nip' => 'required',
                 'nama' => 'required',
                 'agama' => 'required',
                 'ttl' => 'required',
                 'alamat' => 'required',
                 'notelpon' => 'required',
                 'jeniskelamin' => 'required',

             ],[
                 'nip.required' => 'Harus diisi',
                 'nama.required' => 'Harus diisi',
                 'agama.required' => 'Harus diisi',
                 'ttl.required' => 'Harus diisi',
                 'alamat.required' => 'Harus diisi',
                 'notelpon.required' => 'Harus diisi',
                 'jeniskelamin.required' => 'Harus diisi',
             ]);

            $data = guru::create([
                'nip' =>$request->nip,
                'nama' =>$request->nama,
                'agama' =>$request->agama,
                'ttl' =>$request->ttl,
                'alamat' =>$request->alamat,
                'notelpon' =>$request->notelpon,
                'jeniskelamin' =>$request->jeniskelamin,
                'foto' =>$request->foto,
            ]);
            // dd($request->all);

            if($request->hasFile('foto')){
                $request->file('foto')->move('fotoguru/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }

            return redirect()->route('dataguru')->with('succes', 'Data Berhasil Ditambahkan');
        }
        public function tampilkandataguru($id){
            $data = guru::findOrfail($id);
            //dd($data);

            return view('guru.tampilkanguru', compact('data'));
        }

        public function updatedataguru(Request $request, $id){
            $data = guru::find($id);
            $data->update([
                'nip' =>$request->nip,
                'nama' =>$request->nama,
                'agama' =>$request->agama,
                'ttl' =>$request->ttl,
                'alamat' =>$request->alamat,
                'notelpon' =>$request->notelpon,
                'jeniskelamin' =>$request->jeniskelamin,
            ]);
            if($request->hasFile('foto')){
                $request->file('foto')->move('fotoguru/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }
            return redirect()->route('dataguru')->with('succes', 'Data Berhasil Di Update');
        }

        public function deleteguru($id){
            $data = guru::find($id);
            $data->delete();

            return redirect()->route('dataguru')->with('succes', 'Data Berhasil Di Delete');
        }
}
