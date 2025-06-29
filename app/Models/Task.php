<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'tasks';
    protected $primaryKey = 'id';

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'long_description' => '',
        'completed' => false,
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'long_description',
        'status',
        'priority',
        'completed',
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array<string>|bool
     */
    // protected $guarded = [];

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }
}
