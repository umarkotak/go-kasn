<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormalMessages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formal_messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->text('title')->default('');
            $table->text('description')->default('');
            $table->text('notes')->default('');
            $table->text('status')->default('created');
            $table->bigInteger('user_id');
            $table->bigInteger('formal_message_type_id');
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
        Schema::dropIfExists('formal_messages');
    }
}
