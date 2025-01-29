<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('post_id'); // Foreign key to posts table
            $table->string('commenter_name'); // Name of the commenter
            $table->text('content'); // Comment content
            $table->timestamps(); // created_at and updated_at

            // Define foreign key constraint
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
    });
}
};