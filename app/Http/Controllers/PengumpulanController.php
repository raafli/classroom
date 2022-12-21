<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Models\siswa;
use App\Models\Pengumpulan;
use Illuminate\Http\Request;

class PengumpulanController extends Controller
{
    public function index(){

        $data = pengumpulan::with('mapel','nama')->get();
        return view('pengumpulan.pengumpulan',compact('data'));
    }

    public function tpengum(){
        $data = mapel::all();
        $datas = siswa::all();
        return view('pengumpulan.tpengumpulan', compact('data','datas'));
    }

    public function intpengum(Request $request){

             $this->validate($request,[
                 'siswas_id' => 'required',
                 'hal' => 'required',
                 'mapels_id' => 'required',
                 'ket' => 'required',

             ],[
                 'siswas_id.required' => 'Harus diisi',
                 'hal.required' => 'Harus diisi',
                 'mapels_id.required' => 'Harus diisi',
                 'ket.required' => 'Harus diisi',

             ]);

            $data = pengumpulan::create([
                'siswas_id' =>$request->siswas_id,
                'hal' =>$request->hal,
                'mapels_id' =>$request->mapels_id,
                'ket' =>$request->ket,
                'foto' =>$request->foto,
            ]);


            if($request->hasFile('foto')){
                $request->file('foto')->move('fotopengum/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }

            return redirect()->route('pengumpulan')->with('succes', 'Data Berhasil Ditambahkan');
        }
        public function tlpengum($id){
            $data = pengumpulan::findOrfail($id);
            $datas = mapel::all();
            $datass = siswa::all();
            //dd($data);

            return view('pengumpulan.tlpengumpulan', compact('data','datas','datass'));
        }

        public function uppengum(Request $request, $id){
            $data = pengumpulan::find($id);
            $data->update([
                'siswas_id' =>$request->siswas_id,
                'hal' =>$request->hal,
                'mapels_id' =>$request->mapels_id,
                'ket' =>$request->ket,
                'ket' =>$request->ket,
            ]);

            if($request->hasFile('foto')){
                $request->file('foto')->move('fotopengum/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }
            return redirect()->route('pengumpulan')->with('succes', 'Data Berhasil Di Update');
        }

        public function delpengum($id){
            $data = pengumpulan::find($id);
            $data->delete();

            return redirect()->route('pengumpulan')->with('succes', 'Data Berhasil Di Delete');
        }
}
