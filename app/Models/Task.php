<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'point',
        'experience',
        'seed',
        'description',
        'nft',
        'start_at',
        'end_at',
    ];

    public function taskUsers()
    {
        return $this->hasMany(TaskUser::class);
    }
}
