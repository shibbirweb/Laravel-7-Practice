<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        // if users and roles table exists
        /*if (Schema::hasTable('users') AND Schema::hasTable('roles')){

            Schema::create('role_user', function (Blueprint $table){
                $table->foreignId('user_id')
                    ->constrained()
                    ->onUpdate('cascade')
                    ->cascadeOnDelete();
                $table->foreignId('role_id')
                    ->constrained()
                    ->onUpdate('cascade')
                    ->cascadeOnDelete();
            });
        }*/

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        //Schema::dropIfExists('role_user');

        Schema::dropIfExists('roles');
    }
}
