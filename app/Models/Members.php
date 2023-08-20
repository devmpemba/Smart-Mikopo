<?php

namespace App\Models;

use App\Models\Groups;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function group()
{
    return $this->belongsTo(Groups::class, 'groups_id');
}

}
