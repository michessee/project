<!DOCTYPE html>
<html>
<head>
    <title>Master Cabang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<div class="container-sm">
    <div class="card mt-5">
        <div class="card-header text-center">
            <strong>MASTER CABANG</strong>
        </div>
        <div class="card-body">
            <a href="/cabang/insert" class="btn btn-primary">Insert Data</a>
            <br/>
            <br/>
                @if(session('Success'))
                    <div class="alert alert-success" role="alert">
                        {{session('Success')}}
                    </div>
                @endif
            <div class="table-responsive">
                <table class="table table-md table-striped table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th>KODE IGR</th>
                        <th>RECORD ID</th>
                        <th>KODE CABANG</th>
                        <th>KODE WILAYAH</th>
                        <th>NAMA CABANG</th>
                        <th>SINGKATAN CABANG</th>
                        <th>ALAMAT 1</th>
                        <th>ALAMAT 2</th>
                        <th>ALAMAT 3</th>
                        <th>TELEPON CABANG</th>
                        <th>FAX CABANG</th>
                        <th>NPWP CABANG</th>
                        <th>NO. SK</th>
                        <th>TGL SK</th>
                        <th>ALAMAT FAKTUR PAJAK 1</th>
                        <th>ALAMAT FAKTUR PAJAK 2</th>
                        <th>ALAMAT FAKTUR PAJAK 3</th>
                        <th>TGL BUKA</th>
                        <th>CLASS CABANG</th>
                        <th>TIPE HARGA</th>
                        <th>NO. KPP</th>
                        <th>FLAG TRANSAKSI</th>
                        <th>EMAIL FROM</th>
                        <th>EMAIL TO</th>
                        <th>EMAIL CC 1</th>
                        <th>EMAIL CC 2</th>
                        <th>USER EMAIL</th>
                        <th>PWD EMAIL</th>
                        <th>CREATE BY</th>
                        <th>CREATE DATE</th>
                        <th>MODIFY BY</th>
                        <th>MODIFY DATE</th>
                        <th>EFAKTUR</th>
                        <th>KODE CABANG ANAK</th>
                        <th>KODE WILAYAH ANAK</th>
                        <th>NAMA CABANG ANAK</th>
                        <th>SINGKATAN CABANG ANAK</th>
                        <th>ACTION</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $cabang)
                        <tr>
                            <td> {{$cabang->CAB_KODEIGR }} </td>
                            <td> {{$cabang->CAB_RECORDID }} </td>
                            <td> {{$cabang->CAB_KODECABANG }} </td>
                            <td> {{$cabang->CAB_KODEWILAYAH }} </td>
                            <td> {{$cabang->CAB_NAMACABANG }} </td>
                            <td> {{$cabang->CAB_SINGKATANCABANG }} </td>
                            <td> {{$cabang->CAB_ALAMAT1 }} </td>
                            <td> {{$cabang->CAB_ALAMAT2 }} </td>
                            <td> {{$cabang->CAB_ALAMAT3 }} </td>
                            <td> {{$cabang->CAB_TELEPONCABANG }} </td>
                            <td> {{$cabang->CAB_FAXCABANG }} </td>
                            <td> {{$cabang->CAB_NPWPCABANG }} </td>
                            <td> {{$cabang->CAB_NOSK }} </td>
                            <td> {{$cabang->CAB_TGLSK }} </td>
                            <td> {{$cabang->CAB_ALAMATFAKTURPAJAK1 }} </td>
                            <td> {{$cabang->CAB_ALAMATFAKTURPAJAK2 }} </td>
                            <td> {{$cabang->CAB_ALAMATFAKTURPAJAK3 }} </td>
                            <td> {{$cabang->CAB_TGLBUKA }} </td>
                            <td> {{$cabang->CAB_CLASSCABANG }} </td>
                            <td> {{$cabang->CAB_TIPEHRG }} </td>
                            <td> {{$cabang->CAB_NOKPP }} </td>
                            <td> {{$cabang->CAB_FLAGTRANSAKSI }} </td>
                            <td> {{$cabang->CAB_EMAILFROM }} </td>
                            <td> {{$cabang->CAB_EMAILTO }} </td>
                            <td> {{$cabang->CAB_EMAILCC1 }} </td>
                            <td> {{$cabang->CAB_EMAILCC2 }} </td>
                            <td> {{$cabang->CAB_USEREMAIL }} </td>
                            <td> {{$cabang->CAB_PWDEMAIL }} </td>
                            <td> {{$cabang->CAB_CREATE_BY }} </td>
                            <td> {{$cabang->CAB_CREATE_DT }} </td>
                            <td> {{$cabang->CAB_MODIFY_BY }} </td>
                            <td> {{$cabang->CAB_MODIFY_DT }} </td>
                            <td> {{$cabang->CAB_EFAKTUR }}</td>
                            <td> {{$cabang->CAB_KODECABANG_ANAK }} </td>
                            <td> {{$cabang->CAB_KODEWILAYAH_ANAK }} </td>
                            <td> {{$cabang->CAB_NAMACABANG_ANAK }} </td>
                            <td> {{$cabang->CAB_SINGKATANCABANG_ANAK }} </td>
                            <td>
                                <a href="/cabang/edit/{{ $cabang->id }}" class="btn btn-warning">Edit</a>
                                <a href="/cabang/delete/{{ $cabang->id }}" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $data->links() }}
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>

