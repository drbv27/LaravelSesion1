<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('profesion');
            $table->unsignedBigInteger('profesion_id');
            $table->foreign('profesion_id')
            ->references('id')
            ->on('professions')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('users', function (Blueprint $table) {

            $table->dropForeign('profesion_id_foreign'); //pendiente da un error
            $table->dropColumn('profesion_id');
            $table->string('profesion', 100)->nullable()->after('password');
        });
    }
}
