<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ajarController extends Controller
{
    public function daftarPengajar()
    {
        return 'Tabel pendaftaran pengajar mahasiswa';
    }
    public function tabelPengajar()
    {
        return 'Tabel data pengajar mahasiswa';
    }
    public function blogPengajar()
    {
        return 'halaman blog mahasiswa';
    }
}
