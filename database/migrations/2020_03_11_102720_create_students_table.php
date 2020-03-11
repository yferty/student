<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('surname');
            $table->String('email');
            $table->String('status');
            $table->Integer('semester1')->nullable();
            $table->Integer('semester2')->nullable();
            $table->Integer('semester3')->nullable();
            $table->Integer('rating')->default('0');
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);
        });

        DB::table('students')->insert([
            ['id' => 1, 'name' => 'John', 'surname' => 'Smith', 'semester1' => 74, 'semester2' => 55, 'semester3' => 11, 'email' => 'john@example.com', 'status' => 1],
            ['id' => 2, 'name' => 'Sata', 'surname' => 'Wall', 'semester1' => 64, 'semester2' => 79, 'semester3' => 25, 'email' => 'sata@gmail.com', 'status' => 1],
            ['id' => 3, 'name' => 'Keil', 'surname' => 'Bruck', 'semester1' => 76, 'semester2' => 100, 'semester3' => 65, 'email' => 'keil@mail.com', 'status' => 1],
            ['id' => 4, 'name' => 'Arnold', 'surname' => 'Geit', 'semester1' => 16, 'semester2' => 76, 'semester3' => 46, 'email' => 'arnold@example.com', 'status' => 1],
            ['id' => 5, 'name' => 'Azhab', 'surname' => 'Tamaev', 'semester1' => 74, 'semester2' => 44, 'semester3' => 76, 'email' => 'azhab@gmail.com', 'status' => 0],
            ['id' => 6, 'name' => 'Erika', 'surname' => 'Connars', 'semester1' => 88, 'semester2' => 63, 'semester3' => 77, 'email' => 'erika@example.com', 'status' => 0],
            ['id' => 7, 'name' => 'Morgan', 'surname' => 'Freeman', 'semester1' => 34, 'semester2' => 81, 'semester3' => 14, 'email' => 'morgan@index.com', 'status' => 1],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
