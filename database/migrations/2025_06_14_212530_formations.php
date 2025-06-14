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
        Schema::create("formations", function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger("employee_id");
            $table->foreign("employee_id")->references("id")->on("employees")->onDelete("cascade");
            $table->string("nom");
            $table->longText("description");
            $table->date("date_debut");
            $table->date("date_fin");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop("formations");
    }
};
