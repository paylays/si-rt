<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('surat_pengajuans', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('jenis_surat_id')->constrained('jenis_surats')->onDelete('cascade');

            $table->json('data_pengajuan');
            $table->string('dokumen')->nullable();
            $table->enum('status', [
                'Menunggu Verifikasi', 
                'Disetujui', 
                'Ditolak', 
                'Sedang Diproses', 
                'Selesai', 
                'Dikirim ke Warga'
            ])->default('Menunggu Verifikasi');
            $table->text('catatan_admin')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_pengajuans');
    }
};
