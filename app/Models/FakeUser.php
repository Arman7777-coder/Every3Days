<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FakeUser extends Model
{
    protected $table = 'fake-users';
    protected $fillable = [
        'email',
        'telegram',
    ];
}
