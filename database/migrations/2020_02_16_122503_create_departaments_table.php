<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateDepartamentsTable
 * @author Ibra Aushev <aushevibra@yandex.ru>
 */
class CreateDepartamentsTable extends Migration
{
    const TABLE_NAME = 'departaments';

    /**
     * Run the migrations.
     *
     * @return void
     *
     * @author Ibra Aushev <aushevibra@yandex.ru>
     */
    public function up()
    {
        Schema::create(static::TABLE_NAME, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description');
            $table->string('logo')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     *
     * @author Ibra Aushev <aushevibra@yandex.ru>
     */
    public function down()
    {
        Schema::dropIfExists(static::TABLE_NAME);
    }
}
