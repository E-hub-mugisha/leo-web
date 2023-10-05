<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('names');
            $table->integer('nid');
            $table->string('gender');
            $table->integer('phone');
            $table->string('email');
            $table->string('status');
            $table->string('education');
            $table->string('nextKinNames');
            $table->integer('nextKinPhone');
            $table->string('country')->default('rwanda');
            $table->string('province');
            $table->string('district');
            $table->string('sector');
            $table->string('cell');
            $table->string('village');
            $table->string('isibo');
            $table->string('businessNames');
            $table->integer('tinNumber');
            $table->string('businessCategory');
            $table->string('services');
            $table->string('id_doc');
            $table->string('rdb_certificate');
            $table->string('userImg');
            $table->string('certificateOfResidence');
            $table->string('CriminalRecordCertificate');
            $table->string('terms');
            $table->string('acceptance');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};
