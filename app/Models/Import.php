<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Import extends Model
{
    use HasFactory;

    protected $fillable = ['file_name', 'status', 'error_details'];

    protected $casts = [
        'error_details' => 'array',
    ];
}