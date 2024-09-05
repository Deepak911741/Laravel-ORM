<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orms', function (Blueprint $table) {
            $table->id();
            $table->string('name',80);
            $table->string('email',80)->unique()->nullable();
            $table->string('age',30);
            $table->string('phone', 70);
            $table->string('city', 80);
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
        Schema::dropIfExists('orm');
    }
}
