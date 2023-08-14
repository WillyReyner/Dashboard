<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewTodoKanban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_todo_kanban', function (Blueprint $table) {
            $table->id();
            $table->string('id_project')->nullable();
            $table->string('id_kanban')->nullable();
            $table->string('name_todo')->nullable();
            $table->string('description')->nullable();
            $table->string('comment')->nullable();
            $table->string('status')->nullable();
            $table->string('type')->nullable();
            $table->string('prority')->nullable();
            $table->string('author')->nullable();
            $table->string('Assigned')->nullable();
            $table->string('effort')->nullable();
            $table->timestamp('last_update')->nullable();
            $table->string('planned_hours')->nullable();
            $table->string('hours_left')->nullable();

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
        Schema::dropIfExists('new_todo_kanban');
    }
}
