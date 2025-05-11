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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();

            $table->string('name',50);
            $table->string('email',50);
            $table->string('mobile',50);


            // Foreign Key
            $table->unsignedBigInteger('user_id');


            // Relationship  সুমাইয়ার(Foreign Key) বিয়ে হয়েছে রাব্বিলের(Primary Key) সাথে বাড়ি গাইবান্ধা(Primary Keys Table)

            $table->foreign('user_id')->references('id')->on('users')
                ->restrictOnDelete()->cascadeOnUpdate();



            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
