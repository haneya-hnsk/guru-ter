<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table = 'teachers';
    protected $guarded = ['id'];

    public function scopeJurusan($query)
    {
        return $query->where('class', auth()->user()->class)
            ->where(function ($query) {
                $query->Where('subject', 'Dasar-dasar Program Keahlian')
                    ->orWhere('subject', 'Informatika')
                    ->orWhere('subject', 'Mapel Produktif AKL 1')
                    ->orWhere('subject', 'Mapel Produktif AKL 2')
                    ->orWhere('subject', 'Mapel Produktif AKL 3')
                    ->orWhere('subject', 'Mapel Produktif AKL 4')
                    ->orWhere('subject', 'Mapel Produktif AKL 5')
                    ->orWhere('subject', 'Mapel Produktif AKL 6')
                    ->orWhere('subject', 'Mapel Produktif 6')
                    ->orWhere('subject', 'Mapel Produktif 5')
                    ->orWhere('subject', 'Mapel Produktif 4')
                    ->orWhere('subject', 'Mapel Produktif 3')
                    ->orWhere('subject', 'Mapel Produktif 2')
                    ->orWhere('subject', 'Mapel Produktif 1')
                    ->orWhere('subject', 'Internet of Things')
                    ->orWhere('subject', 'Basis Data')
                    ->orWhere('subject', 'Pemrograman Berbasis Teks, Grafis, dan Multimedia')
                    ->orWhere('subject', 'Pemrograman Web')
                    ->orWhere('subject', 'Projek Kreatif dan Kewirausahaan')
                    ->orWhere('subject', 'Pembuatan Game')
                    ->orWhere('subject', 'Pemeliharaan Kelistrikan Kendaraan Ringan')
                    ->orWhere('subject', 'Pemeliharaan Mesin Kendaraan Ringan')
                    ->orWhere('subject', 'like', 'Pemeliharaan Sasis dan Pemindah Tenaga Kendaraan R')
                    ->orWhere('subject', 'Dasar-dasar Program Keahlian')
                    ->orWhere('subject', 'Pemrograman Berorientasi Objek')
                    ->orWhere('subject', 'Pemrograman Web dan Perangkat Bergerak')
                    ->orWhere('subject', 'Produk Kreatif dan Kewirausahaan')
                    ->orWhere('subject', 'Komputer Akuntansi')
                    ->orWhere('subject', 'like', 'Praktikum Akuntansi Perusahaan Jasa, Dagang, dan')
                    ->orWhere('subject', 'Praktikum Akuntansi Lembaga/ Instansi Pemerintah')
                    ->get();
            });
        //    ->get();

    }
}
