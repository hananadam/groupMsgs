<?php

namespace Wloop\GroupMessages\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupContact extends Model
{
    use HasFactory;

    protected $guarded = ['id'];



    // public function pivot_contacts()
    // {
    //     return $this->belongsToMany(Contact::class);
    // }

   
