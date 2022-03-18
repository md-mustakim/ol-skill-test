<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * @method static create(array $attributes)
 * @method static find($id)
 */
class Employee extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = ['name', 'email', 'phone'];
}
