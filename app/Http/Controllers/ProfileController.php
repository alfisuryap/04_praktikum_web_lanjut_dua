<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile')
            ->with('full_name', 'Alfi Surya Pratama')
            ->with('short_name', 'Surya')
            ->with('nim', '2141720075')
            ->with('absen', '04')
            ->with('class', 'TI-2F')
            ->with('prodi', 'D4 Teknik Informatika')
            ->with('jurusan', 'Jurusan Teknologi Informasi')
            ->with('kampus', 'Politeknik Negeri Malang')
            ->with('email', 'alfisuryap7@gmail.com')
            ->with('idline', 'aspratama_')
            ->with('ig', '@alfisuryap');
    }
}