<?php

use App\Models\Insect;
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
        Schema::create('insects', function (Blueprint $table) {
            $table->id('insect_id');
            $table->string('name');
            $table->string('nomenclature');
            $table->boolean('extinct')->default(0);
            $table->foreignId('inserted_by')->references('user_id')->on('users');
            $table->timestamps();
        });
        Insect::create(['name' => 'Közönséges Feketehangya', 'nomenclature' => 'Lasius niger', 'inserted_by' => 1]);
        Insect::create(['name' => 'Kerti Feketehangya', 'nomenclature' => 'Lasius neglectus', 'inserted_by' => 1]);
        Insect::create(['name' => 'Vöröstorú Feketehangya', 'nomenclature' =>  'Lasius emarginatus', 'inserted_by' => 1]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insects');
    }
};
