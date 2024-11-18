<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggan';

    protected $fillable = [
        'nama', 'alamat', 'tgl_lahir', 'notelp'
    ];

    public static array $rules = [
        'nama' => 'required|string|max:100',
        'tahun_masuk' => 'required|integer',
        'tgl_lahir' => 'required|date',
        'alamat' => 'nullable|string',
        'notelp' => 'nullable|string|max:15',
        'is_aktif' => 'boolean|default:0'
    ];

    public function pembelian()
    {
        return $this->hasMany(Pembelian::class, 'pelanggan_id', 'id');
    }
}
