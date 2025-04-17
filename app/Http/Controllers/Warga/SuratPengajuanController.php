<?php

namespace App\Http\Controllers\Warga;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuratPengajuan;
use App\Models\JenisSurat;
use Illuminate\Support\Facades\Storage;

class SuratPengajuanController extends Controller
{
    public function index() {
        $pengajuans = SuratPengajuan::where('user_id', auth()->id())->get();
        return view('warga.pengajuan-surat.index', compact('pengajuans'));
    }

    public function create() {
        $jenisSurat = JenisSurat::all();
        return view('warga.pengajuan-surat.create', compact('jenisSurat'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'jenis_surat_id' => 'required|exists:jenis_surats,id',
            'data_pengajuan' => 'required|array',
            'dokumen' => 'nullable|file|mimes:pdf,jpg,jpeg,png'
        ]);

        $filePath = null;
        if ($request->hasFile('dokumen')) {
            $filePath = $request->file('dokumen')->store('dokumen');
        }

        SuratPengajuan::create([
            'user_id' => auth()->id(),
            'jenis_surat_id' => $validated['jenis_surat_id'],
            'data_pengajuan' => $validated['data_pengajuan'],
            'dokumen' => $filePath,
            'status' => 'Menunggu Verifikasi'
        ]);

        return redirect()->route('warga.ajukan-surat.index')->with('success', 'Pengajuan berhasil dikirim.');
    }

    public function downloadSurat($id) {
        $pengajuan = SuratPengajuan::where('id', $id)
                        ->where('user_id', auth()->id())
                        ->where('status', 'Selesai')
                        ->firstOrFail();
    
        $filepath = 'public/surat/' . $pengajuan->file_surat;
    
        if (!Storage::exists($filepath)) {
            abort(404, 'File tidak ditemukan');
        }
    
        return Storage::download($filepath);
    }
}
