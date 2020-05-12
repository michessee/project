<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbmasterCabangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbmaster_cabang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('CAB_KODEIGR', 2);
            $table->char('CAB_RECORDID', 1);
            $table->string('CAB_KODECABANG', 2);
            $table->string('CAB_KODEWILAYAH', 3);
            $table->string('CAB_NAMACABANG', 30);
            $table->string('CAB_SINGKATANCABANG', 10);
            $table->string('CAB_ALAMAT1', 30);
            $table->string('CAB_ALAMAT2', 30);
            $table->string('CAB_ALAMAT3', 30);
            $table->string('CAB_TELEPONCABANG', 30);
            $table->string('CAB_FAXCABANG', 10);
            $table->string('CAB_NPWPCABANG', 20);
            $table->string('CAB_NOSK', 30);
            $table->dateTime('CAB_TGLSK');
            $table->string('CAB_ALAMATFAKTURPAJAK1', 30);
            $table->string('CAB_ALAMATFAKTURPAJAK2', 30);
            $table->string('CAB_ALAMATFAKTURPAJAK3', 30);
            $table->dateTime('CAB_TGLBUKA');
            $table->char('CAB_CLASSCABANG', 1);
            $table->char('CAB_TIPEHRG', 1);
            $table->string('CAB_NOKPP', 2);
            $table->char('CAB_FLAGTRANSAKSI', 1);
            $table->string('CAB_EMAILFROM', 65);
            $table->string('CAB_EMAILTO', 65);
            $table->string('CAB_EMAILCC1', 65);
            $table->string('CAB_EMAILCC2', 65);
            $table->string('CAB_USEREMAIL', 50);
            $table->string('CAB_PWDEMAIL', 50);
            $table->string('CAB_CREATE_BY', 3);
            $table->dateTime('CAB_CREATE_DT');
            $table->string('CAB_MODIFY_BY', 3);
            $table->dateTime('CAB_MODIFY_DT');
            $table->char('CAB_EFAKTUR', 1);
            $table->string('CAB_KODECABANG_ANAK', 2);
            $table->string('CAB_KODEWILAYAH_ANAK', 3);
            $table->string('CAB_NAMACABANG_ANAK', 30);
            $table->string('CAB_SINGKATANCABANG_ANAK', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbmaster_cabang');
    }
}
