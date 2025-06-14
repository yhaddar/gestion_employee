<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = "employees";

    protected $fillable = ["prenom", "nom", "email", "post", "date_embauche", "salaire"];

    protected $casts = [
        "date_embauche" => "date"
    ];

    public function formation(){
        return $this->hasMany(Formation::class);
    }
}
