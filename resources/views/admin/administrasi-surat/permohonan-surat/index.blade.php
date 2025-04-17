@extends('admin.layouts.vertical', ['title' => 'Permohonan Surat'])

@section('css')

@endsection

@section('content')

@include("admin.layouts.shared/page-title", ["subtitle" => "Pengajuan Surat", "title" => "Permohonan Surat"])

<div class="grid xl:grid-cols-3 md:grid-cols-2 gap-5 mb-5">
<div class="lg:col-span-2">
        <div class="card overflow-hidden">
            <div class="card-header">
                <h4 class="card-title">Daftar Pengajuan Surat Masuk</h4>
            </div>
            <div class="overflow-x-auto">
                <div class="min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-default-200">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Tanggal Pengajuan</th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Nama Pemohon</th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Jenis Surat</th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Status</th>
                                    <th scope="col" class="px-6 py-3 text-start text-sm text-default-500">
                                        Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-default-200">
                                @forelse ($pengajuans as $pengajuan)
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        {{ $pengajuan->created_at->format('d M Y')  }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        {{ $pengajuan->user->name ?? '-' }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        {{ $pengajuan->jenisSurat->nama_surat }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        {{ $pengajuan->status }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-default-800">
                                        <button type="button" class="btn bg-info text-white">Detail</button>
                                        <a href="{{ route('admin.permohonan-surat.generate', $pengajuan->id) }}" class="btn bg-success text-white">
                                            Generate PDF
                                        </a>
                                    </td>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-4 text-center text-sm text-default-500">
                                            Belum ada data pengajuan surat
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end card -->
    </div>
</div>

@endsection

@section('script')

@endsection