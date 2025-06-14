<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("employees", function(Blueprint $table){
            $table->id();
            $table->string("prenom");
            $table->string("nom");
            $table->string("email")->unique(true);
            $table->string("post");
            $table->date("date_embauche");
            $table->double("salaire");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop("employees");
    }
};
