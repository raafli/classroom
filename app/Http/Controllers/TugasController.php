<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\tugas;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index(){

        $data = tugas::with('mapel')->get();
        return view('tugas.datatugas',compact('data'));
    }

    public function tambahtugas(){
        $data = mapel::all();
        return view('tugas.tambahtugas', compact('data'));
    }

    public function inserttugas(Request $request){

             $this->validate($request,[
                 'hal' => 'required',
                 'mapels_id' => 'required',
                 'dl' => 'required',
                 'foto' => 'required',
             ],[
                 'hal.required' => 'Harus diisi',
                 'mapels_id.required' => 'Harus diisi',
                 'dl.required' => 'Harus diisi',
                 'foto.required' => 'Harus diisi',
             ]);

            $data = tugas::create([
                'hal' =>$request->hal,
                'mapels_id' =>$request->mapels_id,
                'dl' =>$request->dl,
                'foto' =>$request->foto,
            ]);
            // dd($request->all);

            if($request->hasFile('foto')){
                $request->file('foto')->move('fototugas/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }

            return redirect()->route('datatugas')->with('succes', 'Data Berhasil Ditambahkan');
        }
        public function tampilkandatatugas($id){
            $datass = tugas::findOrfail($id);
            $data = mapel::all();

            return view('tugas.tampiltugas', compact('data','datass'));
        }

        public function updatedatatugas(Request $request, $id){
            $data = tugas::find($id);
            $data->update([
                'hal' =>$request->hal,
                'mapels_id' =>$request->mapels_id,
                'dl' =>$request->dl,
            ]);
            if($request->hasFile('foto')){
                $request->file('foto')->move('fototugas/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }
            return redirect()->route('datatugas')->with('succes', 'Data Berhasil Di Update');
        }

        public function deletetugas($id){
            $data = tugas::find($id);
            $data->delete();

            return redirect()->route('datatugas')->with('succes', 'Data Berhasil Di Delete');
        }
}
