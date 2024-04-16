<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100)->unique();
            $table->string('adress', 100)->nullable();
            $table->integer('aff_or_not')->default(0);
            $table->integer('owner_or_not')->default(0);
            $table->integer('is_active')->default(0);
            $table->string('email',50)->nullable();
            $table->string('telephone')->nullable();
            $table->string('code')->unique();
            $table->string('web_site', 50)->nullable();
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
        Schema::dropIfExists('companies');
    }
}
