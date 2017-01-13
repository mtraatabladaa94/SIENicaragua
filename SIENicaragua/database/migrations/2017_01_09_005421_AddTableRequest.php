<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableRequest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Request', function (Blueprint $table) {
            $table->uuid('id')->unique();
            $table->string('companyName');
            $table->string('name');
            $table->string('lastName');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->enum('license', [0, 1, 2, 3])->default(0);
            $table->enum('countPC');
            $table->enum('countEmployees');
            $table->enum('countLicense');

            $table->boolean('IsSend');


            $table->boolean('IsActive');
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
        Schema::dropIfExists('Request');
    }
}
