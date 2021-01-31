<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormalMessageSignators extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formal_message_signators', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('formal_message_id');
            $table->bigInteger('user_id');
            $table->text('status')->default('notified');
            $table->text('attachment_1')->default('');
            $table->text('attachment_2')->default('');
            $table->text('attachment_3')->default('');
            $table->text('attachment_4')->default('');
            $table->text('attachment_5')->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formal_message_signators');
    }
}
