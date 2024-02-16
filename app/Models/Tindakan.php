<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Tindakan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'ID_Pasien');
    }

    public function perawat()
    {
        return $this->belongsTo(Perawat::class, 'ID_Perawat');
    }
}
