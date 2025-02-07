<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use App\Models\Employer;
use App\Models\Tag;

class Job extends Model{
    use HasFactory, Notifiable;
 protected $table = 'job_list';
 //protected $fillable = ['title','salary','employer_id'];
 protected $guarded = [];

 public function employer(){
    return $this->belongsTo(Employer::class);
 }
 public function tags(){
    return $this->belongsToMany(Tag::class,foreignPivotKey:"job_list_id");
 }
}
?>