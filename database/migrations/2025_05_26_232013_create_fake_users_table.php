<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFakeUsersTable extends Migration
{
    public function up(): void
    {
        Schema::create('fake-users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('telegram')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fake-users');
    }
}

