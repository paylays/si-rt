<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajuanSuratController extends Controller
{
    public function index()
    {
        return view('warga.pengajuan-surat.index');
    }

}
