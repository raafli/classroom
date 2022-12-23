<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\dtugas;
use App\Models\Pengumpulan;
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

             $this->validate($request,[
                 'mapel' => 'required',
             ],[
                 'mapel.required' => 'Harus diisi',
             ]);

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
            $count = Pengumpulan::where('mapels_id', $id)->count();
            if($count > 0){
                return back()->with('error', 'Mapel sedang digunakan');
            }
            $count = Mapel::where('mapels_id', $id)->count();
            if($count > 0){
                return back()->with('error', 'Mapel sedang digunakan');
            }
            $data = mapel::find($id);
            $data->delete();

            return redirect()->route('datamapel')->with('succes', 'Data Berhasil Di Delete');
        }
}
