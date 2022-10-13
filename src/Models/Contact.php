<?php

namespace Wloop\GroupMessages\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
   


    public function contact_groups()
    {
        return $this->belongsToMany(GroupContact::class, ContactGroup::class);
    }
}
