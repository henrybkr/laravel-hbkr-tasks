<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_tasks', function (Blueprint $table) {
            // Main identifiers
            $table->bigIncrements('id');
            $table->integer('standard_order');
            $table->integer('pinned_order');

            // Content
            $table->text('title');
            $table->text('description')->nullable();
            $table->text('img_url')->nullable();
            $table->dateTime('due_date_time')->nullable();

            // Flags
            $table->boolean('completed')->default(false);
            $table->boolean('pinned')->default(false);

            // Timestamps
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
        Schema::drop('my_tasks');
    }
}
