<?php

namespace App\Http\Controllers;

use App\Models\mapel;
use App\Models\dtugas;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index(){

        $data = mapel::all();
        return view('mapel.datamapel',compact('data'));
    }

    public function tambahmapel(){
        return view('mapel.tambahmapel');
    }

    public function insertmapel(Request $request){

            //  $this->validate($request,[
            //      'nis' => 'required',
            //      'nama' => 'required',
            //      'agama' => 'required',
            //      'hobi' => 'required',
            //      'alamat' => 'required',
            //      'notelpon' => 'required',
            //      'jeniskelamin' => 'required',

            //  ],[
            //      'nis.required' => 'Harus diisi',
            //      'nama.required' => 'Harus diisi',
            //      'agama.required' => 'Harus diisi',
            //      'hobi.required' => 'Harus diisi',
            //      'alamat.required' => 'Harus diisi',
            //      'notelpon.required' => 'Harus diisi',
            //      'jeniskelamin.required' => 'Harus diisi',
            //  ]);

            $data = mapel::create([
                'mapel' =>$request->mapel,
            ]);

            return redirect()->route('datamapel')->with('succes', 'Data Berhasil Ditambahkan');
        }
        public function tampilmapel($id){
            $data = mapel::findOrfail($id);
            //dd($data);

            return view('mapel.tampilmapel', compact('data'));
        }

        public function updatedatamapel(Request $request, $id){
            $data = mapel::find($id);
            $data->update([
                'mapel' =>$request->mapel,
            ]);
            return redirect()->route('datamapel')->with('succes', 'Data Berhasil Di Update');
        }

        public function deletemapel($id){
            $data = mapel::find($id);
            $data->delete();

            return redirect()->route('datamapel')->with('succes', 'Data Berhasil Di Delete');
        }
}
