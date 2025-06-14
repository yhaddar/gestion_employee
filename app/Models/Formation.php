<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    
    protected $table = "formations";
    protected $fillable = ["employee_id", "nom", "description", "date_debut", "date_fin"];

    protected $casts = [
        "date_debut" => "date",
        "date_fin" => "date"
    ];

    public function employee(){
        return $this->belongsTo(Employee::class);
    }
}
