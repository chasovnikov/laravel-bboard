<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->timestamps();
        });

        Schema::table('adverts', function (Blueprint $table) {
            $table->foreign('status_id')
                ->references('id')
                ->on('statuses')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });

        // Schema::table('offers', function (Blueprint $table) {
        //     $table->foreign('status_id')
        //         ->references('id')
        //         ->on('statuses')
        //         ->onDelete('restrict')
        //         ->onUpdate('restrict');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statuses');
    }
};