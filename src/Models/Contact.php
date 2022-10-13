<?php

namespace Wloop\GroupMessages\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
<<<<<<< HEAD
   


    public function contact_groups()
    {
        return $this->belongsToMany(GroupContact::class, ContactGroup::class);
    }
=======
>>>>>>> a9e549c2451c72c7f373cdddf00a558789a7ff59
}
