<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Database\Factories\SkillFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class Skill extends Model
{
    use HasFactory;

    protected $fillable =['name','image'];

    public function projects(){
return $this->hasMany(Project::class);

}
    /**
 * Create a new factory instance for the model.
 */
protected static function newFactory(): Factory
{
    return SkillFactory::new();
}
}
