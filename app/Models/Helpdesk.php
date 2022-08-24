<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Helpdesk extends Model
{
    use HasFactory;
    protected $table = "tbl_helpdesk";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user',
        'keluhan',
        'tgl_keluhan',
        'deskripsi',
        'foto'
    ];
}
