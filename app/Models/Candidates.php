<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Candidates extends Model
{
    use HasFactory;

    protected $table = 'candidates';
    protected $primaryKey = 'id';
    protected $fillable = ['student_id','position_id','partylist_id', 'school_year'];   

    public function user(){
        return $this->hasMany(User::class,'id','student_id');
    }
}
