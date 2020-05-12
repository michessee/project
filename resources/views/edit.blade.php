<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Data</title>
</head>
<body>
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center">
            Edit Data
        </div>
        <div class="card-body">
            <a href="/cabang" class="btn btn-primary">Back</a>
            <br/>

            @foreach($data as $cabang)
                <form action="/cabang/update" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $cabang->id }}"> <br/>
                    <div class="form-group">
                        <label for="kodeigr">Kode IGR</label>
                        <input type="text" class="form-control" name="kodeigr" value="{{ $cabang->CAB_KODEIGR }}">
                    </div>
                    <div class="form-group">
                        <label for="recordid">Record ID</label>
                        <input type="text" class="form-control" name="recordid" value="{{ $cabang->CAB_RECORDID }}">
                    </div>
                    <div class="form-group">
                        <label for="kodecabang">Kode Cabang</label>
                        <input type="text" class="form-control" name="kodecabang" value="{{ $cabang->CAB_KODECABANG }}">
                    </div>
                    <div class="form-group">
                        <label for="kodewilayah">Kode Wilayah</label>
                        <input type="text" class="form-control" name="kodewilayah" value="{{ $cabang->CAB_KODEWILAYAH }}">
                    </div>
                    <div class="form-group">
                        <label for="namacabang">Nama Cabang</label>
                        <input name="namacabang" type="text" class="form-control" value="{{ $cabang->CAB_NAMACABANG }}">
                    </div>
                    <div class="form-group">
                        <label for="singkatancabang">Singkatan Cabang</label>
                        <input name="singkatancabang" type="text" class="form-control" value="{{ $cabang->CAB_SINGKATANCABANG }}">
                    </div>
                    <div class="form-group">
                        <label for="alamat1">Alamat 1</label>
                        <input name="alamat1" type="text" class="form-control" value="{{ $cabang->CAB_ALAMAT1 }}">
                    </div>
                    <div class="form-group">
                        <label for="alamat2">Alamat 2</label>
                        <input name="alamat2" type="text" class="form-control" value="{{ $cabang->CAB_ALAMAT2 }}">
                    </div>
                    <div class="form-group">
                        <label for="alamat3">Alamat 3</label>
                        <input name="alamat3" type="text" class="form-control" value="{{ $cabang->CAB_ALAMAT3 }}">
                    </div>
                    <div class="form-group">
                        <label for="tlpcabang">Telepon Cabang</label>
                        <input name="tlpcabang" type="number" class="form-control" value="{{ $cabang->CAB_TELEPONCABANG }}">
                    </div>
                    <div class="form-group">
                        <label for="faxcabang">Fax Cabang</label>
                        <input name="faxcabang" type="number" class="form-control" value="{{ $cabang->CAB_FAXCABANG }}">
                    </div>
                    <div class="form-group">
                        <label for="npwpcabang">NPWP Cabang</label>
                        <input name="npwpcabang" type="text" class="form-control" value="{{ $cabang->CAB_NPWPCABANG }}">
                    </div>
                    <div class="form-group">
                        <label for="nosk">No. SK</label>
                        <input name="nosk" type="text" class="form-control" value="{{ $cabang->CAB_NOSK }}">
                    </div>
                    <div class="form-group">
                        <label for="tglsk">Tgl SK</label>
                        <input name="tglsk" type="text" class="form-control" value="{{ $cabang->CAB_TGLSK }}">
                    </div>
                    <div class="form-group">
                        <label for="alamatpajak1">Alamat Faktur Pajak 1</label>
                        <input name="alamatpajak1" type="text" class="form-control" value="{{ $cabang->CAB_ALAMATFAKTURPAJAK1 }}">
                    </div>
                    <div class="form-group">
                        <label for="alamatpajak2">Alamat Faktur Pajak 2</label>
                        <input name="alamatpajak2" type="text" class="form-control" value="{{ $cabang->CAB_ALAMATFAKTURPAJAK2 }}">
                    </div>
                    <div class="form-group">
                        <label for="alamatpajak3">Alamat Faktur Pajak 3</label>
                        <input name="alamatpajak3" type="text" class="form-control" value="{{ $cabang->CAB_ALAMATFAKTURPAJAK3 }}">
                    </div>
                    <div class="form-group">
                        <label for="tglbuka">Tgl Buka</label>
                        <input name="tglbuka" type="text" class="form-control" value="{{ $cabang->CAB_TGLBUKA }}">
                    </div>
                    <div class="form-group">
                        <label for="classcabang">Class Cabang</label>
                        <input name="classcabang" type="text" class="form-control" value="{{ $cabang->CAB_CLASSCABANG }}">
                    </div>
                    <div class="form-group">
                        <label for="tipehrg">Tipe Harga</label>
                        <input name="tipehrg" type="text" class="form-control" value="{{ $cabang->CAB_TIPEHRG }}">
                    </div>
                    <div class="form-group">
                        <label for="nokpp">No. KPP</label>
                        <input name="nokpp" type="text" class="form-control" value="{{ $cabang->CAB_NOKPP }}">
                    </div>
                    <div class="form-group">
                        <label for="flagtransaksi">Flag Transaksi</label>
                        <input name="flagtransaksi" type="text" class="form-control" value="{{ $cabang->CAB_FLAGTRANSAKSI }}">
                    </div>
                    <div class="form-group">
                        <label for="emailfrom">Email From</label>
                        <input name="emailfrom" type="email" class="form-control" value="{{ $cabang->CAB_EMAILFROM }}">
                    </div>
                    <div class="form-group">
                        <label for="emailto">Email To</label>
                        <input name="emailto" type="email" class="form-control" value="{{ $cabang->CAB_EMAILTO }}">
                    </div>
                    <div class="form-group">
                        <label for="emailcc1">Email CC 1</label>
                        <input name="emailcc1" type="email" class="form-control" value="{{ $cabang->CAB_EMAILCC1 }}">
                    </div>
                    <div class="form-group">
                        <label for="emailcc2">Email CC 2</label>
                        <input name="emailcc2" type="email" class="form-control" value="{{ $cabang->CAB_EMAILCC2 }}">
                    </div>
                    <div class="form-group">
                        <label for="useremail">User Email</label>
                        <input name="useremail" type="text" class="form-control" value="{{ $cabang->CAB_USEREMAIL }}">
                    </div>
                    <div class="form-group">
                        <label for="pwdemail">Password Email</label>
                        <input name="pwdemail" type="text" class="form-control" value="{{ $cabang->CAB_PWDEMAIL }}">
                    </div>
                    <div class="form-group">
                        <label for="createby">Create By</label>
                        <input name="createby" type="text" class="form-control" value="{{ $cabang->CAB_CREATE_BY }}">
                    </div>
                    <div class="form-group">
                        <label for="createdt">Create Date</label>
                        <input name="createdt" type="text" class="form-control" value="{{ $cabang->CAB_CREATE_DT }}">
                    </div>
                    <div class="form-group">
                        <label for="modifyby">Modify By</label>
                        <input name="modifyby" type="text" class="form-control" value="{{ $cabang->CAB_MODIFY_BY }}">
                    </div>
                    <div class="form-group">
                        <label for="modifydt">Modify Date</label>
                        <input name="modifydt" type="text" class="form-control" value="{{ $cabang->CAB_MODIFY_DT }}">
                    </div>
                    <div class="form-group">
                        <label for="efaktur">E Faktur</label>
                        <input name="efaktur" type="text" class="form-control" value="{{ $cabang->CAB_EFAKTUR }}">
                    </div>
                    <div class="form-group">
                        <label for="kodecbganak">Kode Cabang Anak</label>
                        <input name="kodecbganak" type="text" class="form-control" value="{{ $cabang->CAB_KODECABANG_ANAK }}">
                    </div>
                    <div class="form-group">
                        <label for="kodewilayahanak">Kode Wilayah Anak</label>
                        <input name="kodewilayahanak" type="text" class="form-control" value="{{ $cabang->CAB_KODEWILAYAH_ANAK }}">
                    </div>
                    <div class="form-group">
                        <label for="namacbganak">Nama Cabang Anak</label>
                        <input name="namacbganak" type="text" class="form-control" value="{{ $cabang->CAB_NAMACABANG_ANAK }}">
                    </div>
                    <div class="form-group">
                        <label for="singkatancabanganak">Singkatan Cabang Anak</label>
                        <input name="singkatancabanganak" type="text" class="form-control" value="{{ $cabang->CAB_SINGKATANCABANG_ANAK }}">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Submit">
                    </div>
                </form>
            @endforeach
        </div>
    </div>
</div>
</body>
</html>
