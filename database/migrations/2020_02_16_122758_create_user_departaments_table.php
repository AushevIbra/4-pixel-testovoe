<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDepartamentsTable extends Migration
{
    const TABLE_NAME = 'user_departaments';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(static::TABLE_NAME, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('departament_id');
            $table->timestamps();

            $table->foreign('user_id', 'fk-' . static::TABLE_NAME . '[user]')->on('users')->references('id');
            $table->foreign('departament_id',
                'fk-' . static::TABLE_NAME . '[departament]')->on('departaments')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(static::TABLE_NAME);
    }
}
