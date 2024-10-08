<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreatePlayerTable extends Migration
{
    public function up()
    {
        Schema::create('player', function (Blueprint $table) {
        $table->id();
        $table->string('nama_pemain');
        $table->integer('no_punggung');
        $table->string('posisi');
        $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('player');
    }
}