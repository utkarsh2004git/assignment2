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
        Schema::create('admin', function (Blueprint $table) {
            $table->id("admin_id")->autoIncrement();
            $table->string("Name",60);
            $table->string("email",60);
            $table->enum("Gender",['M',"F","O"]);
            $table->date("DOB");
            $table->string("Password");
            $table->boolean("Status")->default(1);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};
