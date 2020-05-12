<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Insert Data</title>
</head>
<body>
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center">
            Insert Data
        </div>
        <div class="card-body">
            <a href="/cabang" class="btn btn-primary">Back</a>
            <br/>
            <br/>

            <form action="/cabang/store" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="kodeigr">Kode IGR</label>
                    <input name="kodeigr" type="text" class="form-control" id="kodeigr" placeholder="Kode IGR">
                </div>
                <div class="form-group">
                    <label for="recordid">Record ID</label>
                    <input name="recordid" type="text" class="form-control" id="recordid" placeholder="Record ID">
                </div>
                <div class="form-group">
                    <label for="kodecabang">Kode Cabang</label>
                    <input name="kodecabang" type="text" class="form-control" id="kodecabang" placeholder="Kode Cabang">
                </div>
                <div class="form-group">
                    <label for="kodewilayah">Kode Wilayah</label>
                    <input name="kodewilayah" type="text" class="form-control" id="kodewilayah" placeholder="Kode Wilayah">
                </div>
                <div class="form-group">
                    <label for="namacabang">Nama Cabang</label>
                    <input name="namacabang" type="text" class="form-control" id="namacabang" placeholder="Nama Cabang">
                </div>
                <div class="form-group">
                    <label for="singkatancabang">Singkatan Cabang</label>
                    <input name="singkatancabang" type="text" class="form-control" id="singkatancabang" placeholder="Singkatan Cabang">
                </div>
                <div class="form-group">
                    <label for="alamat1">Alamat 1</label>
                    <input name="alamat1" type="text" class="form-control" id="alamat1" placeholder="Alamat 1">
                </div>
                <div class="form-group">
                    <label for="alamat2">Alamat 2</label>
                    <input name="alamat2" type="text" class="form-control" id="alamat2" placeholder="Alamat 2">
                </div>
                <div class="form-group">
                    <label for="alamat3">Alamat 3</label>
                    <input name="alamat3" type="text" class="form-control" id="alamat3" placeholder="Alamat 3">
                </div>
                <div class="form-group">
                    <label for="tlpcabang">Telepon Cabang</label>
                    <input name="tlpcabang" type="number" class="form-control" id="tlpcabang" placeholder="Telepon Cabang">
                </div>
                <div class="form-group">
                    <label for="faxcabang">Fax Cabang</label>
                    <input name="faxcabang" type="number" class="form-control" id="faxcabang" placeholder="Fax Cabang">
                </div>
                <div class="form-group">
                    <label for="npwpcabang">NPWP Cabang</label>
                    <input name="npwpcabang" type="text" class="form-control" id="npwpcabang" placeholder="NPWP Cabang">
                </div>
                <div class="form-group">
                    <label for="nosk">No. SK</label>
                    <input name="nosk" type="text" class="form-control" id="nosk" placeholder="No. SK">
                </div>
                <div class="form-group">
                    <label for="tglsk">Tgl SK</label>
                    <input name="tglsk" type="datetime-local" class="form-control" id="tglsk">
                </div>
                <div class="form-group">
                    <label for="alamatpajak1">Alamat Faktur Pajak 1</label>
                    <input name="alamatpajak1" type="text" class="form-control" id="alamatpajak1" placeholder="Alamat Pajak 1">
                </div>
                <div class="form-group">
                    <label for="alamatpajak2">Alamat Faktur Pajak 2</label>
                    <input name="alamatpajak2" type="text" class="form-control" id="alamatpajak2" placeholder="Alamat Pajak 2">
                </div>
                <div class="form-group">
                    <label for="alamatpajak3">Alamat Faktur Pajak 3</label>
                    <input name="alamatpajak3" type="text" class="form-control" id="alamatpajak3" placeholder="Alamat Pajak 3">
                </div>
                <div class="form-group">
                    <label for="tglbuka">Tgl Buka</label>
                    <input name="tglbuka" type="datetime-local" class="form-control" id="tglbuka">
                </div>
                <div class="form-group">
                    <label for="classcabang">Class Cabang</label>
                    <input name="classcabang" type="text" class="form-control" id="classcabang" placeholder="Class Cabang">
                </div>
                <div class="form-group">
                    <label for="tipehrg">Tipe Harga</label>
                    <input name="tipehrg" type="text" class="form-control" id="tipehrg" placeholder="Tipe Harga">
                </div>
                <div class="form-group">
                    <label for="nokpp">No. KPP</label>
                    <input name="nokpp" type="text" class="form-control" id="nokpp" placeholder="No. KPP">
                </div>
                <div class="form-group">
                    <label for="flagtransaksi">Flag Transaksi</label>
                    <input name="flagtransaksi" type="text" class="form-control" id="flagtransaksi" placeholder="Flag Transaksi">
                </div>
                <div class="form-group">
                    <label for="emailfrom">Email From</label>
                    <input name="emailfrom" type="email" class="form-control" id="emailfrom" placeholder="Email From">
                </div>
                <div class="form-group">
                    <label for="emailto">Email To</label>
                    <input name="emailto" type="email" class="form-control" id="emailto" placeholder="Email To">
                </div>
                <div class="form-group">
                    <label for="emailcc1">Email CC 1</label>
                    <input name="emailcc1" type="email" class="form-control" id="emailcc1" placeholder="Email CC 1">
                </div>
                <div class="form-group">
                    <label for="emailcc2">Email CC 2</label>
                    <input name="emailcc2" type="email" class="form-control" id="emailcc2" placeholder="Email CC 2">
                </div>
                <div class="form-group">
                    <label for="useremail">User Email</label>
                    <input name="useremail" type="text" class="form-control" id="useremail" placeholder="User Email">
                </div>
                <div class="form-group">
                    <label for="pwdemail">Password Email</label>
                    <input name="pwdemail" type="text" class="form-control" id="pwdemail" placeholder="Password Email">
                </div>
                <div class="form-group">
                    <label for="createby">Create By</label>
                    <input name="createby" type="text" class="form-control" id="createby" placeholder="Create By">
                </div>
                <div class="form-group">
                    <label for="createdt">Create Date</label>
                    <input name="createdt" type="datetime-local" class="form-control" id="createdt">
                </div>
                <div class="form-group">
                    <label for="modifyby">Modify By</label>
                    <input name="modifyby" type="text" class="form-control" id="modifyby" placeholder="Modify By">
                </div>
                <div class="form-group">
                    <label for="modifydt">Modify Date</label>
                    <input name="modifydt" type="datetime-local" class="form-control" id="modifydt">
                </div>
                <div class="form-group">
                    <label for="efaktur">E Faktur</label>
                    <input name="efaktur" type="text" class="form-control" id="efaktur" placeholder="E Faktur">
                </div>
                <div class="form-group">
                    <label for="kodecbganak">Kode Cabang Anak</label>
                    <input name="kodecbganak" type="text" class="form-control" id="kodecbganak" placeholder="Kode Cabang Anak">
                </div>
                <div class="form-group">
                    <label for="kodewilayahanak">Kode Wilayah Anak</label>
                    <input name="kodewilayahanak" type="text" class="form-control" id="kodewilayahanak" placeholder="Kode Wilayah Anak">
                </div>
                <div class="form-group">
                    <label for="namacbganak">Nama Cabang Anak</label>
                    <input name="namacbganak" type="text" class="form-control" id="namacbganak" placeholder="Nama Cabang Anak">
                </div>
                <div class="form-group">
                    <label for="singkatancabanganak">Singkatan Cabang Anak</label>
                    <input name="singkatancabanganak" type="text" class="form-control" id="singkatancabanganak" placeholder="Singkatan Cabang Anak">
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
