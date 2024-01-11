<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newmodel extends Model
{
public $fillable=['sname','sadd','sage','semail','gender','sphone','state','psw','pic'];
   
    use HasFactory;
  

}
