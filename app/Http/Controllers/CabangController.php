<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CabangController extends Controller
{
    public function index(){
        $data = DB::table('tbmaster_cabang')
            ->orderBy('id')
            ->paginate(5);
        return view('index', ['data'=>$data]);
    }

    public function insert()
    {
        return view('insert');
    }

    public function store(Request $request)
    {
        $data = DB::table('tbmaster_cabang')->insert([
            'CAB_KODEIGR'=> $request->kodeigr,
            'CAB_RECORDID'=> $request->recordid,
            'CAB_KODECABANG'=>$request->kodecabang,
            'CAB_KODEWILAYAH'=>$request->kodewilayah,
            'CAB_NAMACABANG'=>$request->namacabang,
            'CAB_SINGKATANCABANG'=>$request->singkatancabang,
            'CAB_ALAMAT1'=>$request->alamat1,
            'CAB_ALAMAT2'=>$request->alamat2,
            'CAB_ALAMAT3'=>$request->alamat3,
            'CAB_TELEPONCABANG'=>$request->tlpcabang,
            'CAB_FAXCABANG'=>$request->faxcabang,
            'CAB_NPWPCABANG'=>$request->npwpcabang,
            'CAB_NOSK'=>$request->nosk,
            'CAB_TGLSK'=>$request->tglsk,
            'CAB_ALAMATFAKTURPAJAK1'=>$request->alamatpajak1,
            'CAB_ALAMATFAKTURPAJAK2'=>$request->alamatpajak2,
            'CAB_ALAMATFAKTURPAJAK3'=>$request->alamatpajak3,
            'CAB_TGLBUKA'=>$request->tglbuka,
            'CAB_CLASSCABANG'=>$request->classcabang,
            'CAB_TIPEHRG'=>$request->tipehrg,
            'CAB_NOKPP'=>$request->nokpp,
            'CAB_FLAGTRANSAKSI'=>$request->flagtransaksi,
            'CAB_EMAILFROM'=>$request->emailfrom,
            'CAB_EMAILTO'=>$request->emailto,
            'CAB_EMAILCC1'=>$request->emailcc1,
            'CAB_EMAILCC2'=>$request->emailcc2,
            'CAB_USEREMAIL'=>$request->useremail,
            'CAB_PWDEMAIL'=>$request->pwdemail,
            'CAB_CREATE_BY'=>$request->createby,
            'CAB_CREATE_DT'=>$request->createdt,
            'CAB_MODIFY_BY'=>$request->modifyby,
            'CAB_MODIFY_DT'=>$request->modifydt,
            'CAB_EFAKTUR'=>$request->efaktur,
            'CAB_KODECABANG_ANAK'=>$request->kodecbganak,
            'CAB_KODEWILAYAH_ANAK'=>$request->kodewilayahanak,
            'CAB_NAMACABANG_ANAK'=>$request->namacbganak,
            'CAB_SINGKATANCABANG_ANAK'=>$request->singkatancabanganak
        ]);

        return redirect('/cabang')->with('Success','Data has been added!');

    }

    public function edit($id)
    {
        $data = DB::table('tbmaster_cabang')->where('id',$id)->get();
        return view('edit',['data' => $data]);
    }

    public function update(Request $request)
    {
        DB::table('tbmaster_cabang')->where('id',$request->id)->update([
            'CAB_KODEIGR'=> $request->kodeigr,
            'CAB_RECORDID'=> $request->recordid,
            'CAB_KODECABANG'=>$request->kodecabang,
            'CAB_KODEWILAYAH'=>$request->kodewilayah,
            'CAB_NAMACABANG'=>$request->namacabang,
            'CAB_SINGKATANCABANG'=>$request->singkatancabang,
            'CAB_ALAMAT1'=>$request->alamat1,
            'CAB_ALAMAT2'=>$request->alamat2,
            'CAB_ALAMAT3'=>$request->alamat3,
            'CAB_TELEPONCABANG'=>$request->tlpcabang,
            'CAB_FAXCABANG'=>$request->faxcabang,
            'CAB_NPWPCABANG'=>$request->npwpcabang,
            'CAB_NOSK'=>$request->nosk,
            'CAB_TGLSK'=>$request->tglsk,
            'CAB_ALAMATFAKTURPAJAK1'=>$request->alamatpajak1,
            'CAB_ALAMATFAKTURPAJAK2'=>$request->alamatpajak2,
            'CAB_ALAMATFAKTURPAJAK3'=>$request->alamatpajak3,
            'CAB_TGLBUKA'=>$request->tglbuka,
            'CAB_CLASSCABANG'=>$request->classcabang,
            'CAB_TIPEHRG'=>$request->tipehrg,
            'CAB_NOKPP'=>$request->nokpp,
            'CAB_FLAGTRANSAKSI'=>$request->flagtransaksi,
            'CAB_EMAILFROM'=>$request->emailfrom,
            'CAB_EMAILTO'=>$request->emailto,
            'CAB_EMAILCC1'=>$request->emailcc1,
            'CAB_EMAILCC2'=>$request->emailcc2,
            'CAB_USEREMAIL'=>$request->useremail,
            'CAB_PWDEMAIL'=>$request->pwdemail,
            'CAB_CREATE_BY'=>$request->createby,
            'CAB_CREATE_DT'=>$request->createdt,
            'CAB_MODIFY_BY'=>$request->modifyby,
            'CAB_MODIFY_DT'=>$request->modifydt,
            'CAB_EFAKTUR'=>$request->efaktur,
            'CAB_KODECABANG_ANAK'=>$request->kodecbganak,
            'CAB_KODEWILAYAH_ANAK'=>$request->kodewilayahanak,
            'CAB_NAMACABANG_ANAK'=>$request->namacbganak,
            'CAB_SINGKATANCABANG_ANAK'=>$request->singkatancabanganak
        ]);

        return redirect('/cabang');
    }

    public function delete($id)
    {
        DB::table('tbmaster_cabang')->where('id',$id)->delete();
        return redirect('/cabang');
    }
}
