<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {

            $table->id();

            $table->string('name');

            $table->text('address');

            $table->string('email');

            $table->string('work_phone')->nullable();

            $table->string('cell_no');

            $table->date('date_of_birth')->nullable();

            $table->string('category')->nullable();

            $table->text('remarks')->nullable();

            $table->decimal('total', 10, 2)->default(0);

            $table->string('status')->default('Pending');

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
