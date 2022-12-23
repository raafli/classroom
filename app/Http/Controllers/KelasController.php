<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\siswa;
use App\Models\Pengumpulan;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(){

        $data = Kelas::all();
        return view('kelas.kelas',compact('data'));
    }

    public function tambahkelas(){
        return view('kelas.tambahkelas');
    }

    public function insertkelas(Request $request){

             $this->validate($request,[
                 'kelas' => 'required',

             ],[
                 'kelas.required' => 'Harus diisi',
             ]);

            $data = Kelas::create([
                'kelas' =>$request->kelas,
            ]);

            return redirect()->route('datakelas')->with('succes', 'Data Berhasil Ditambahkan');
        }
        public function tampilkelas($id){
            $data = Kelas::findOrfail($id);
            //dd($data);

            return view('kelas.tampilkelas', compact('data'));
        }

        public function updatedatakelas(Request $request, $id){
            $data = Kelas::find($id);
            $data->update([
                'kelas' =>$request->kelas,
            ]);
            return redirect()->route('datakelas')->with('succes', 'Data Berhasil Di Update');
        }

        public function deletekelas($id){
            $count = siswa::where('kelas_id', $id)->count();
            if($count > 0){
                return back()->with('error', 'Kelas sedang digunakan');
            }
            $data = Kelas::find($id);
            $data->delete();

            return redirect()->route('datakelas')->with('succes', 'Data Berhasil Di Delete');
        }
}
