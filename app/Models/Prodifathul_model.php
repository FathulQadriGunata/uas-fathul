<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodifathul_model extends Model
{
    use HasFactory;
    protected $table ="prodifathul";
    protected $primaryKey ="id";

    public function tampil_prodifathul(){
        $query = \DB::table('prodifathul')->get();
        return $query;
    }
}
