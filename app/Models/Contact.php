<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
		protected $table = 'contacts';
		protected $primaryKey = 'id';
		protected $fillable = ['last_name', 'first_name', 'phone_number', 'email'];
    use HasFactory;
}
