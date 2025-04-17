<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuratPengajuan;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;

class PengajuanSuratController extends Controller
{
    public function index() {
        $pengajuans = SuratPengajuan::latest()->get();
        return view('admin.administrasi-surat.permohonan-surat.index', compact('pengajuans'));
    }

    public function verifikasi(Request $request, $id) {
        $pengajuan = SuratPengajuan::findOrFail($id);

        $pengajuan->update([
            'status' => $request->status,
            'catatan_admin' => $request->catatan_admin
        ]);

        return redirect()->route('admin.permohonan-surat.index')->with('success', 'Status pengajuan diperbarui.');
    }

    public function previewSurat($id) {
        $pengajuan = SuratPengajuan::findOrFail($id);
        return view('admin.administrasi-surat.template-surat.template_belum_menikah', ['data' => $pengajuan->data_pengajuan]);
    }
    

    public function generateSurat($id) {
        $pengajuan = SuratPengajuan::findOrFail($id);
        $data = $pengajuan->data_pengajuan;

        // logika generate surat dari template
        $pdf = Pdf::loadView('admin.administrasi-surat.template-surat.template_belum_menikah', compact('data'));

        $filename = 'surat_'.$pengajuan->id.'.pdf';
        $filepath = 'public/surat/' . $filename;
        Storage::put($filepath, $pdf->output());


        $pengajuan->update([
            'status' => 'Selesai',
            'file_surat' => $filename
        ]);

        return $pdf->stream('surat_'.$pengajuan->id.'.pdf');
    }
}
