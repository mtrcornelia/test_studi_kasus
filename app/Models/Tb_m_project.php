<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tb_m_project extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function Tb_m_client()
    {
    	//belongsTo untuk data one to one
    	return $this-> belongsTo(Tb_m_client::class);
    }
}
