<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswaferdi_model extends Model
{
    use HasFactory;
    protected $table ="mahasiswaferdi";
    protected $primaryKey ="id";

    public function tampil_mahasiswaferdi(){
        $query = \DB::table('mahasiswaferdi')->get();
        return $query;
    }
}
