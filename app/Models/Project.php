<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;
use App\Models\Technology;
class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'type_id', 'description', 'image', 'creation_date', 'slug'];

    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function tecnologys(){
        return $this->belongsToMany(Technology::class);
    }
}
