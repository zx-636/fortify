<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id'); // PRIMARY KEY
               $table->bigInteger('category_id')->unsigned(); // FOREIGN KEY
               $table->string('first_name', 255);
               $table->string('last_name', 255);
               $table->tinyInteger('gender'); // 1:男性, 2:女性, 3:その他
               $table->string('email', 255);
               $table->string('tell', 255);
               $table->string('address', 255);
               $table->string('building', 255)->nullable();
               $table->text('detail');
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
        Schema::dropIfExists('contacts');
    }
}
