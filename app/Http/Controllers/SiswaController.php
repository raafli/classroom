<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use App\Models\kelas;
use App\Models\Pengumpulan;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){

        $data = siswa::with('kelas')->get();
        return view('datasiswa',compact('data'));
    }

    public function tambahsiswa(){
        $data = kelas::all();
        return view('tambahsiswa', compact('data'));
    }

    public function insertsiswa(Request $request){

             $this->validate($request,[
                 'nis' => 'required',
                 'nama' => 'required',
                 'agama' => 'required',
                 'kelas_id' => 'required',
                 'alamat' => 'required',
                 'notelpon' => 'required',
                 'jeniskelamin' => 'required',

             ],[
                 'nis.required' => 'Harus diisi',
                 'nama.required' => 'Harus diisi',
                 'agama.required' => 'Harus diisi',
                 'kelas_id.required' => 'Harus diisi',
                 'alamat.required' => 'Harus diisi',
                 'notelpon.required' => 'Harus diisi',
                 'jeniskelamin.required' => 'Harus diisi',
             ]);

            $data = Siswa::create([
                'nis' =>$request->nis,
                'nama' =>$request->nama,
                'agama' =>$request->agama,
                'kelas_id' =>$request->kelas_id,
                'alamat' =>$request->alamat,
                'notelpon' =>$request->notelpon,
                'jeniskelamin' =>$request->jeniskelamin,
                'foto' =>$request->foto,
            ]);

            if($request->hasFile('foto')){
                $request->file('foto')->move('fotosiswa/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }

            return redirect()->route('datasiswa')->with('succes', 'Data Berhasil Ditambahkan');
        }
        public function tampilkandatasiswa($id){
            $data = Siswa::findOrfail($id);
            $datas = kelas::all();
            //dd($data);

            return view('tampilkandatasiswa', compact('data','datas'));
        }

        public function updatedatasiswa(Request $request, $id){
            $data = Siswa::find($id);
            $data->update([
                'nis' =>$request->nis,
                'nama' =>$request->nama,
                'agama' =>$request->agama,
                'kelas_id' =>$request->kelas_id,
                'alamat' =>$request->alamat,
                'notelpon' =>$request->notelpon,
                'jeniskelamin' =>$request->jeniskelamin,
            ]);
            if($request->hasFile('foto')){
                $request->file('foto')->move('fotosiswa/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }
            return redirect()->route('datasiswa')->with('succes', 'Data Berhasil Di Update');
        }

        public function deletesiswa($id){
            // $siswa = siswa::where('siswas_id', '$id');







            $count = Pengumpulan::where('siswas_id', $id)->count();
            if($count > 0){
                return back()->with('error', 'Nama siswa sedang digunakan');
            }
            $data = Siswa::find($id);
            $data->delete();

            return redirect()->route('datasiswa')->with('succes', 'Data Berhasil Di Delete');
        }
}
